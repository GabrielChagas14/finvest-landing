<?php
/**
 * FinVest Theme Functions and Definitions
 *
 * @package FinVest
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * 1. Theme Setup
 */
function finvest_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 630, true );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Custom Logo support
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 80,
            'width'       => 240,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    // Gutenberg wide images and responsive embeds
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );

    // Register Navigation Menus
    register_nav_menus(
        array(
            'primary' => __( 'Primary Navigation', 'finvest' ),
            'footer'  => __( 'Footer Navigation', 'finvest' ),
        )
    );
}
add_action( 'after_setup_theme', 'finvest_setup' );

/**
 * 2. Enqueue Styles & Scripts
 */
function finvest_enqueue_scripts() {
    // Google Fonts: Cinzel (Display) & Plus Jakarta Sans (Body)
    wp_enqueue_style(
        'finvest-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'finvest-style',
        get_stylesheet_uri(),
        array( 'finvest-google-fonts' ),
        '1.0.0'
    );

    // Custom CSS
    wp_enqueue_style(
        'finvest-custom-css',
        get_template_directory_uri() . '/assets/css/custom.css',
        array( 'finvest-style' ),
        '1.0.0'
    );

    // Main interactive JavaScript
    wp_enqueue_script(
        'finvest-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );

    // Output Customizer inline CSS
    $primary_color = get_theme_mod( 'finvest_primary_color', '#C9A84C' );
    if ( ! empty( $primary_color ) && '#C9A84C' !== $primary_color ) {
        $custom_css = "
            :root {
                --color-primary: {$primary_color};
                --color-primary-light: {$primary_color};
                --color-primary-border: {$primary_color}44;
                --color-primary-glow: {$primary_color}55;
            }
        ";
        wp_add_inline_style( 'finvest-style', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'finvest_enqueue_scripts' );

/**
 * 3. Theme Customizer Settings
 */
function finvest_customize_register( $wp_customize ) {
    // FinVest Options Section
    $wp_customize->add_section(
        'finvest_theme_options',
        array(
            'title'       => __( 'FinVest Settings', 'finvest' ),
            'priority'    => 30,
            'description' => __( 'Customize FinVest theme branding, colors, and direct contact details.', 'finvest' ),
        )
    );

    // Primary Brand Color
    $wp_customize->add_setting(
        'finvest_primary_color',
        array(
            'default'           => '#C9A84C',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'finvest_primary_color',
            array(
                'label'    => __( 'Primary Brand Gold Color', 'finvest' ),
                'section'  => 'finvest_theme_options',
                'settings' => 'finvest_primary_color',
            )
        )
    );

    // Company Phone Number
    $wp_customize->add_setting(
        'finvest_phone',
        array(
            'default'           => '+1 (800) 555-VEST',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'finvest_phone',
        array(
            'label'    => __( 'Advisory Phone Number', 'finvest' ),
            'section'  => 'finvest_theme_options',
            'type'     => 'text',
        )
    );

    // Company Email Address
    $wp_customize->add_setting(
        'finvest_email',
        array(
            'default'           => 'advisory@finvestwealth.com',
            'sanitize_callback' => 'sanitize_email',
        )
    );
    $wp_customize->add_control(
        'finvest_email',
        array(
            'label'    => __( 'Advisory Email Address', 'finvest' ),
            'section'  => 'finvest_theme_options',
            'type'     => 'email',
        )
    );

    // Company Office Address
    $wp_customize->add_setting(
        'finvest_address',
        array(
            'default'           => '740 Park Avenue, Penthouse B, New York, NY 10021',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'finvest_address',
        array(
            'label'    => __( 'Office Address', 'finvest' ),
            'section'  => 'finvest_theme_options',
            'type'     => 'text',
        )
    );

    // Assets Under Advisory (AUM Metric)
    $wp_customize->add_setting(
        'finvest_aum',
        array(
            'default'           => '$1.8B+',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'finvest_aum',
        array(
            'label'    => __( 'Assets Under Advisory (Stat)', 'finvest' ),
            'section'  => 'finvest_theme_options',
            'type'     => 'text',
        )
    );
}
add_action( 'customize_register', 'finvest_customize_register' );

/**
 * 4. Fallback Default Primary Menu
 */
function finvest_default_primary_nav() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="#services" class="nav-link">' . esc_html__( 'Services', 'finvest' ) . '</a></li>';
    echo '<li><a href="#about" class="nav-link">' . esc_html__( 'About', 'finvest' ) . '</a></li>';
    echo '<li><a href="#process" class="nav-link">' . esc_html__( 'Methodology', 'finvest' ) . '</a></li>';
    echo '<li><a href="#team" class="nav-link">' . esc_html__( 'Leadership', 'finvest' ) . '</a></li>';
    echo '<li><a href="#testimonials" class="nav-link">' . esc_html__( 'Results', 'finvest' ) . '</a></li>';
    echo '<li><a href="#contact" class="nav-link">' . esc_html__( 'Contact', 'finvest' ) . '</a></li>';
    echo '</ul>';
}

/**
 * 5. Helper Function: Get Customizer Option with Default
 */
function finvest_get_option( $name, $default = '' ) {
    return get_theme_mod( $name, $default );
}
