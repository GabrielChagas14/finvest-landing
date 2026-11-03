# FinVest — Premium Financial Consulting & Wealth Advisory WordPress Theme

![FinVest Theme Banner](https://img.shields.io/badge/FinVest-Wealth%20Advisory-C9A84C?style=for-the-badge&logoColor=white)
![WordPress Version](https://img.shields.io/badge/WordPress-6.0%2B-blue?style=for-the-badge&logo=wordpress)
![PHP Version](https://img.shields.io/badge/PHP-7.4%20|%208.0%20|%208.1%20|%208.2-777BB4?style=for-the-badge&logo=php)
![License](https://img.shields.io/badge/License-MIT-gold?style=for-the-badge)

> **"Your Wealth. Our Expertise."**  
> An institutional-grade, bespoke WordPress theme built for ultra-high-net-worth wealth managers, fiduciary advisory practices, family offices, and private wealth consultants.

---

## 🏛️ Project Overview

**FinVest** is a custom-coded, standalone WordPress theme engineered without bloated page builders (Elementor, Divi) or bulky dependencies. Designed specifically for discerning financial advisors and investment firms, it projects authority, prestige, and fiduciary trust while delivering blazing-fast Core Web Vitals performance.

### 🎨 Visual & Brand Architecture
- **Primary Color:** Deep Gold (`#C9A84C`) — represents prestige, stability, and prosperity.
- **Background:** Dark Charcoal (`#1A1A2E` / `#121221`) — evokes institutional elegance and security.
- **Typography:** 
  - *Headings:* `Cinzel` & `Playfair Display` (Classic European banking serif).
  - *Body / UI:* `Plus Jakarta Sans` (Crisp geometric sans-serif for readability).
- **Core Value Proposition:** Pure fee-only fiduciary model, highlighting zero conflict of interest and institutional custody.

---

## 💼 Highlighted Advisory Services

FinVest comes pre-structured with comprehensive modules for 6 core wealth disciplines:
1. **Investment Portfolio Management** — Multi-asset allocation, algorithmic tax-loss harvesting, downside tail-risk hedging.
2. **Retirement Planning & Distribution** — Cash flow sequencing, Mega Backdoor Roth conversions, Monte Carlo stress-testing.
3. **Tax Optimization & Structuring** — QSBS exclusion strategies, Charitable Remainder Trusts (CRTs), cross-border asset location.
4. **Business Financial Advisory & M&A** — Founder liquidity planning, key-person buyout agreements, corporate treasury yield.
5. **Real Estate Investment & Syndication** — Section 1031 exchanges, Delaware Statutory Trusts (DST), direct commercial private equity.
6. **Family Office & Estate Governance** — Dynasty trusts, multi-generational wealth transfer, philanthropic foundations.

---

## 🛠️ Tech Stack & Standards

- **Core Engine:** WordPress 6.x / PHP 7.4+ (fully PHP 8.2 compatible)
- **Styling:** Semantic CSS3, CSS Custom Properties (`:root`), BEM-inspired naming, Flexbox & CSS Grid
- **Interactivity:** Vanilla ES6+ JavaScript (zero jQuery dependencies, lightweight execution)
- **Accessibility:** WCAG 2.1 AA compliant colors, keyboard navigation, `aria-*` modal attributes, focus rings
- **Local Dev Environment:** Docker Compose (WordPress Latest + MySQL 8.0)

---

## 📁 Repository Structure

```
finvest-landing/
├── wordpress-theme/
│   └── finvest/
│       ├── style.css             # Theme metadata & complete responsive design system
│       ├── index.php             # Fallback archive & blog template with WP Loop
│       ├── functions.php         # Theme setup, enqueueing, Customizer options
│       ├── header.php            # Semantic header, fiduciary top-bar, mobile navigation
│       ├── footer.php            # 4-column footer, compliance disclosures, consultation modal
│       ├── front-page.php        # High-converting homepage with all 8 core sections
│       ├── assets/
│       │   ├── css/
│       │   │   └── custom.css    # Keyframes, micro-interactions, print stylesheet
│       │   └── js/
│       │       └── main.js       # Sticky nav, modal logic, number counters, smooth scroll
│       └── screenshot.png        # Admin theme preview thumbnail
├── docker-compose.yml            # One-command local development stack
├── README.md                     # Full documentation & setup guide
└── DEPLOYMENT.md                 # Production hosting & deployment manual
```

---

## 🚀 Quickstart: Local Development with Docker Compose

Running FinVest locally takes under 2 minutes using Docker:

### Prerequisites
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) installed and running.
- Git installed.

### Step-by-Step Instructions

1. **Clone or Navigate to the Project:**
   ```bash
   cd "c:\Emanuel Projetos\Smart_Renting\finvest-landing"
   ```

2. **Launch the Containers:**
   ```bash
   docker compose up -d
   ```
   *This starts WordPress on port `8080` and MySQL on the internal bridge network, mounting `./wordpress-theme/finvest` directly into `/var/www/html/wp-content/themes/finvest`.*

3. **Complete the 5-Minute WordPress Install:**
   - Open your browser to: [http://localhost:8080](http://localhost:8080)
   - Select your language (e.g., English).
   - Enter your Site Title: `FinVest Wealth Advisory`
   - Set an Admin Username, Password, and Email.
   - Click **Install WordPress**.

4. **Activate the FinVest Theme:**
   - Log in to WP Admin at [http://localhost:8080/wp-admin](http://localhost:8080/wp-admin).
   - Navigate to **Appearance > Themes**.
   - Hover over **FinVest** and click **Activate**.

5. **Set the Static Homepage:**
   - In WP Admin, navigate to **Settings > Reading**.
   - Under **Your homepage displays**, select **A static page**.
   - Choose a page with the *Front Page* template, or FinVest will automatically serve `front-page.php` as your root landing page.

6. **Stop the Containers When Done:**
   ```bash
   docker compose down
   ```

---

## 💻 Manual Installation (Without Docker)

If you already have a local development environment (such as LocalWP, XAMPP, MAMP, or Laragon):

1. Copy the `finvest` folder:
   ```
   Copy: finvest-landing/wordpress-theme/finvest
   To:   /your-local-wordpress/wp-content/themes/finvest
   ```
2. Log into your WordPress Admin Dashboard.
3. Go to **Appearance > Themes**.
4. Click **Activate** on **FinVest**.

---

## ⚙️ Theme Customizer Options

FinVest includes native WordPress Customizer controls under **Appearance > Customize > FinVest Settings**:

| Setting Name | Default Value | Description |
| :--- | :--- | :--- |
| **Primary Brand Gold Color** | `#C9A84C` | Automatically updates CSS variables, buttons, glows, and badges site-wide. |
| **Advisory Phone Number** | `+1 (800) 555-VEST` | Updates direct links across the top bar, CTA banner, and footer. |
| **Advisory Email Address** | `advisory@finvestwealth.com` | Updates confidential contact links throughout the site. |
| **Office Address** | `740 Park Avenue, Penthouse B, NY`| Configures the private advisory office location in the footer. |
| **Assets Under Advisory** | `$1.8B+` | Sets the hero banner AUM trust metric. |

---

## 📝 Navigation & Menu Configuration

To customize the navigation bar:
1. Go to **Appearance > Menus** in WP Admin.
2. Create a new menu called **Primary Menu**.
3. Add Custom Links with anchor targets:
   - `#services` &rarr; Services
   - `#about` &rarr; About Fiduciary
   - `#process` &rarr; Methodology
   - `#team` &rarr; Leadership
   - `#testimonials` &rarr; Client Results
   - `#contact` &rarr; Contact
4. Under **Menu Settings**, check the **Primary Navigation** display location.
5. Click **Save Menu**.

*(Note: If no menu is configured, FinVest includes an automated fallback menu that links to all homepage sections immediately out of the box).*

---

## 🔌 Recommended Plugins

FinVest was engineered to be self-reliant, but pairs seamlessly with top-tier plugins for enterprise operations:

- **SEO & Schema:** [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/) or [Rank Math](https://rankmath.com/) — for rich financial organization schema, OpenGraph tags, and XML sitemaps.
- **Performance & Caching:** [WP Rocket](https://wp-rocket.me/) or [LiteSpeed Cache](https://wordpress.org/plugins/litespeed-cache/) — for page caching, CSS/JS minification, and CDN integration.
- **Advanced Forms:** [Contact Form 7](https://wordpress.org/plugins/contact-form-7/) or [Gravity Forms](https://www.gravityforms.com/) — for multi-step consultation audits with CRM sync (HubSpot, Salesforce).
- **Security:** [Wordfence Security](https://wordpress.org/plugins/wordfence/) — for two-factor authentication (2FA) and enterprise firewall protection.

---

## 🌐 Deployment Options

Unlike static frontend frameworks, WordPress requires a server with a **PHP runtime** and a **MySQL / MariaDB database**.

| Hosting Type | Recommended Providers | Best For |
| :--- | :--- | :--- |
| **Managed WordPress** | [WP Engine](https://wpengine.com/), [Kinsta](https://kinsta.com/), [SiteGround](https://www.siteground.com/) | Production enterprise clients requiring automated backups, staging environments, and high-availability caching. |
| **Self-Hosted VPS** | [DigitalOcean](https://www.digitalocean.com/), [Linode](https://www.linode.com/), [Hetzner](https://www.hetzner.com/) | Developers running Docker Compose in production behind a Traefik or NGINX reverse proxy. |
| **Free Portfolio Hosting** | [InfinityFree](https://www.infinityfree.com/), [000webhost](https://www.000webhost.com/) | Quick, zero-cost live demonstration for portfolio reviews. |

> ⚠️ **Important Note on Vercel:**  
> WordPress is written in PHP and executes dynamically on a web server with an attached SQL database. Vercel is designed for serverless static and Node.js runtimes (Next.js, Nuxt, SvelteKit), so WordPress cannot be deployed as a traditional monolith on Vercel.  
> *If you require Vercel deployment, you can run WordPress in **Headless mode** (as an API backend on a PHP host) and build a Next.js / Nuxt frontend deployed to Vercel.*  
> See [DEPLOYMENT.md](DEPLOYMENT.md) for complete step-by-step guides for all options.

---

## 📄 License

This project is licensed under the **MIT License** — see the [LICENSE](LICENSE) file for details.

Developed with precision by **Gabriel Chagas**.
