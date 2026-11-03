<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$phone   = finvest_get_option( 'finvest_phone', '+1 (800) 555-VEST' );
$email   = finvest_get_option( 'finvest_email', 'advisory@finvestwealth.com' );
$clean_p = preg_replace( '/[^0-9+]/', '', $phone );
?>

<!-- ==================== HEADER & TOP BAR ==================== -->
<header class="site-header" id="siteHeader">
    <!-- Top Announcement Bar -->
    <div class="header-topbar">
        <div class="finvest-container topbar-content">
            <div class="topbar-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    <path d="m9 12 2 2 4-4"/>
                </svg>
                <span>Pure Fee-Only Fiduciary • SEC Registered Investment Advisory</span>
            </div>

            <div class="topbar-contact">
                <a href="tel:<?php echo esc_attr( $clean_p ); ?>">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    <span><?php echo esc_html( $phone ); ?></span>
                </a>
                <a href="mailto:<?php echo esc_attr( $email ); ?>">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    <span><?php echo esc_html( $email ); ?></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <div class="header-main">
        <div class="finvest-container">
            <nav class="navbar" aria-label="<?php esc_attr_e( 'Main Navigation', 'finvest' ); ?>">
                <!-- Brand Logo -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-brand">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div class="brand-monogram">FV</div>
                        <div class="brand-text-wrap">
                            <span class="brand-name">FinVest</span>
                            <span class="brand-sub">Wealth Advisory</span>
                        </div>
                    <?php endif; ?>
                </a>

                <!-- Desktop Navigation Menu -->
                <div class="main-nav">
                    <?php
                    if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu_class'     => 'nav-menu',
                                'container'      => false,
                                'fallback_cb'    => 'finvest_default_primary_nav',
                            )
                        );
                    } else {
                        finvest_default_primary_nav();
                    }
                    ?>
                </div>

                <!-- Call to Action & Mobile Hamburger -->
                <div class="nav-actions">
                    <button type="button" class="btn btn-primary open-consultation-modal">
                        <span>Schedule a Free Consultation</span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>

                    <button class="mobile-nav-toggle" aria-label="<?php esc_attr_e( 'Toggle Navigation Menu', 'finvest' ); ?>" aria-expanded="false">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="mobile-nav-drawer" id="mobileDrawer">
    <div>
        <div class="drawer-header">
            <div class="site-brand">
                <div class="brand-monogram">FV</div>
                <div class="brand-text-wrap">
                    <span class="brand-name">FinVest</span>
                    <span class="brand-sub">Wealth Advisory</span>
                </div>
            </div>
            <button class="drawer-close" aria-label="<?php esc_attr_e( 'Close navigation drawer', 'finvest' ); ?>">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <nav class="drawer-menu">
            <a href="#services" class="nav-link"><?php esc_html_e( 'Services', 'finvest' ); ?></a>
            <a href="#about" class="nav-link"><?php esc_html_e( 'About Fiduciary', 'finvest' ); ?></a>
            <a href="#process" class="nav-link"><?php esc_html_e( 'Methodology', 'finvest' ); ?></a>
            <a href="#team" class="nav-link"><?php esc_html_e( 'Advisory Team', 'finvest' ); ?></a>
            <a href="#testimonials" class="nav-link"><?php esc_html_e( 'Client Results', 'finvest' ); ?></a>
            <a href="#contact" class="nav-link"><?php esc_html_e( 'Contact', 'finvest' ); ?></a>
        </nav>
    </div>

    <div>
        <button type="button" class="btn btn-primary open-consultation-modal" style="width: 100%; margin-bottom: 1rem;">
            Schedule a Free Consultation
        </button>
        <p style="font-size: 0.8rem; text-align: center; color: var(--color-text-subtle);">
            Direct Line: <?php echo esc_html( $phone ); ?>
        </p>
    </div>
</div>
<div class="drawer-backdrop" id="drawerBackdrop"></div>
