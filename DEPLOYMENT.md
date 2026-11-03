# FinVest Theme Deployment & Hosting Guide

This guide details how to deploy and host the **FinVest** WordPress theme in production and staging environments, explaining server requirements, platform options, and best practices.

---

## 🔍 Understanding WordPress Hosting vs. Vercel

### Why WordPress Cannot Be Deployed Directly to Vercel
Vercel is an edge-first cloud platform engineered for:
1. Static files (HTML, CSS, client-side JS)
2. Serverless Node.js / Edge functions (Next.js, SvelteKit, Astro, Nuxt)

**WordPress Architecture Requirements:**
- **Persistent PHP Runtime:** WordPress executes PHP scripts dynamically on every incoming request (unless cached).
- **Relational Database:** WordPress requires an active connection to a MySQL or MariaDB database to store posts, options, users, and metadata.
- **Local Persistent File Storage:** WordPress writes media uploads to `/wp-content/uploads/` on the server disk.

Because Vercel does not provide a native persistent PHP runtime or managed MySQL engine for monolithic PHP applications, **a traditional WordPress installation cannot run directly on Vercel**.

---

## 🚀 Hosting Deployment Strategies

### Option 1: Managed WordPress Hosting (Recommended for Production Clients)
*Providers: [WP Engine](https://wpengine.com/), [SiteGround](https://www.siteground.com/), [Kinsta](https://kinsta.com/)*

Managed hosts are optimized specifically for WordPress with built-in object caching (Redis), enterprise CDNs (Cloudflare Enterprise), staging environments, and daily automated backups.

#### Deployment Steps:
1. Zip the `finvest` theme folder:
   ```bash
   # Navigate to the themes directory
   cd finvest-landing/wordpress-theme
   # Zip the finvest directory into finvest.zip
   ```
2. Log into the client's WordPress admin dashboard (`https://clientdomain.com/wp-admin`).
3. Navigate to **Appearance > Themes > Add New > Upload Theme**.
4. Choose `finvest.zip` and click **Install Now**.
5. Click **Activate**.
6. Configure theme settings under **Appearance > Customize > FinVest Settings**.

---

### Option 2: Traditional cPanel Hosting via SFTP / FTP
*Providers: SiteGround, Bluehost, HostGator, InMotion*

If deploying to standard shared or VPS hosting with cPanel/Plesk:

#### Upload via SFTP:
1. Connect using an SFTP client (e.g., [FileZilla](https://filezilla-project.org/) or [Cyberduck](https://cyberduck.io/)):
   - **Host:** `sftp.yourdomain.com`
   - **Username:** Your hosting SFTP username
   - **Port:** `22` (or custom host port)
2. Remote directory destination:
   ```
   /public_html/wp-content/themes/
   ```
3. Upload the entire unzipped `finvest/` directory into that folder.
4. Verify directory permissions:
   - Directories: `755` (`rwxr-xr-x`)
   - Files: `644` (`rw-r--r--`)
5. In WP Admin, navigate to **Appearance > Themes** and activate **FinVest**.

---

### Option 3: Docker on a Cloud VPS (Self-Hosted Production)
*Providers: DigitalOcean Droplets, Linode / Akamai, Hetzner, AWS Lightsail*

For complete infrastructure control, you can run the included `docker-compose.yml` directly on a Linux VPS behind an NGINX reverse proxy with free Let's Encrypt SSL certificates.

#### Production Docker Workflow:
1. Provision an Ubuntu 22.04 / 24.04 LTS server.
2. Install Docker and Docker Compose:
   ```bash
   sudo apt update && sudo apt install -y docker.io docker-compose
   ```
3. Clone your GitHub repository:
   ```bash
   git clone https://github.com/GabrielChagas14/finvest-landing.git
   cd finvest-landing
   ```
4. Adjust `docker-compose.yml` passwords for production safety:
   ```yaml
   WORDPRESS_DB_PASSWORD: 'UseAStrongGeneratedPassword123!'
   MYSQL_ROOT_PASSWORD: 'UseAnotherStrongPassword456!'
   ```
5. Launch the containers in detached mode:
   ```bash
   docker-compose up -d
   ```
6. Set up **Certbot / Nginx** or **Traefik** to route port `8080` to your custom domain with HTTPS:
   ```nginx
   server {
       server_name advisory.yourfirm.com;

       location / {
           proxy_pass http://localhost:8080;
           proxy_set_header Host $host;
           proxy_set_header X-Real-IP $remote_addr;
           proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
           proxy_set_header X-Forwarded-Proto $scheme;
       }
   }
   ```

---

### Option 4: Headless Architecture with Vercel (Decoupled Jamstack)
*If you specifically want a Vercel-deployed frontend:*

In a **Headless WordPress** setup:
1. **Backend (CMS):** WordPress runs on a traditional PHP host (e.g., WP Engine or a $5 DigitalOcean droplet), exposing the **WP REST API** or **WPGraphQL**.
2. **Frontend (Vercel):** A Next.js or Nuxt app queries WordPress as a headless CMS and pre-renders static HTML pages on Vercel at build time via Incremental Static Regeneration (ISR).

```
[ Editors / Admins ] 
         │
         ▼
[ WordPress CMS on PHP/MySQL ] ──(WPGraphQL / REST API)──▶ [ Next.js Frontend on Vercel ]
                                                                      │
                                                                      ▼
                                                                [ End Users ]
```

*Note: For a pure landing page like FinVest, a monolithic PHP theme running on a standard host is significantly simpler to maintain and eliminates the overhead of managing two separate server stacks.*

---

### Option 5: Free Web Hosting for Portfolio Demonstrations
*Providers: [InfinityFree](https://www.infinityfree.com/), [000webhost](https://www.000webhost.com/), [Pantheon](https://pantheon.io/)*

If you need a 100% free live web URL to show FinVest to recruiters, clients, or on your portfolio:

1. **Pantheon Free Tier (Best Developer Experience):**
   - Register a free developer account at [Pantheon.io](https://pantheon.io/).
   - Create a new free WordPress site.
   - Use Pantheon's Git or SFTP connection to push the `finvest` theme.
   - You get a fast, free `*.pantheonsite.io` URL with full PHP 8.x and MySQL support.

2. **InfinityFree:**
   - Sign up at [infinityfree.net](https://www.infinityfree.com/).
   - Create an account and install WordPress using the Softaculous 1-click installer.
   - Use the web file manager or FileZilla to upload `finvest` into `/htdocs/wp-content/themes/`.
   - Activate the theme from the dashboard.

---

## 🔒 Post-Deployment Checklist

Before taking the website live for real advisory clients:

- [ ] **Enforce HTTPS:** Ensure all requests redirect to `https://`.
- [ ] **Configure Permalinks:** Set WP Admin > Settings > Permalinks to **Post name** (`/%postname%/`).
- [ ] **Update Theme Customizer:** Verify phone, email, and address under Appearance > Customize > FinVest Settings.
- [ ] **Regulatory Disclosures:** Replace placeholder legal text with your firm's specific SEC/FINRA Form ADV Part 2A details.
- [ ] **Set Up SMTP Mail:** Install an SMTP plugin (e.g., [WP Mail SMTP](https://wordpress.org/plugins/wp-mail-smtp/)) with SendGrid, Amazon SES, or Postmark so consultation lead forms are reliably delivered.
- [ ] **Caching & Minification:** Enable server-level page caching (e.g., FastCGI, Redis, or WP Rocket).
- [ ] **Security:** Disable XML-RPC if unused, enable 2FA on administrator accounts, and schedule automatic offsite database backups.
