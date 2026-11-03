<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (along with style.css).
 *
 * @package FinVest
 * @version 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Blog Archive Header -->
    <header class="blog-header">
        <div class="finvest-container">
            <span class="section-kicker"><?php esc_html_e( 'Market Insights & Wealth Perspectives', 'finvest' ); ?></span>
            <h1 class="page-title">
                <?php
                if ( is_home() && ! is_front_page() ) {
                    single_post_title();
                } elseif ( is_archive() ) {
                    the_archive_title();
                } elseif ( is_search() ) {
                    /* translators: %s: search query */
                    printf( esc_html__( 'Search Results for: %s', 'finvest' ), '<span>' . get_search_query() . '</span>' );
                } else {
                    esc_html_e( 'Wealth Advisory Insights', 'finvest' );
                }
                ?>
            </h1>
            <p class="section-desc" style="max-width: 650px; margin: 0 auto;">
                <?php esc_html_e( 'Timely fiduciary analysis, macro-economic perspectives, and generational wealth strategies from the FinVest Investment Committee.', 'finvest' ); ?>
            </p>
        </div>
    </header>

    <!-- Posts Loop -->
    <section class="section">
        <div class="finvest-container">
            <?php if ( have_posts() ) : ?>

                <div class="blog-posts-wrap">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post-card' ); ?>>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail-wrap" style="margin-bottom: 1.5rem; border-radius: var(--radius-sm); overflow: hidden;">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; height: 220px; object-fit: cover;' ) ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="post-meta">
                                <span><?php echo esc_html( get_the_date() ); ?></span>
                                <span>&bull;</span>
                                <span><?php the_category( ', ' ); ?></span>
                            </div>

                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <div class="post-excerpt" style="font-size: 0.95rem; color: var(--color-text-muted); margin-bottom: 1.5rem;">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="btn btn-gold-outline btn-sm">
                                <?php esc_html_e( 'Read Article', 'finvest' ); ?> &rarr;
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div style="margin-top: 3.5rem; text-align: center;">
                    <?php
                    the_posts_pagination(
                        array(
                            'mid_size'  => 2,
                            'prev_text' => __( '&larr; Previous', 'finvest' ),
                            'next_text' => __( 'Next &rarr;', 'finvest' ),
                        )
                    );
                    ?>
                </div>

            <?php else : ?>

                <div style="text-align: center; padding: 4rem 1rem;">
                    <h3><?php esc_html_e( 'No Insights Found', 'finvest' ); ?></h3>
                    <p style="color: var(--color-text-muted); margin-top: 0.75rem;">
                        <?php esc_html_e( 'It looks like no publications have been posted yet. Check back soon for market updates.', 'finvest' ); ?>
                    </p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary" style="margin-top: 1.5rem;">
                        <?php esc_html_e( 'Return to Homepage', 'finvest' ); ?>
                    </a>
                </div>

            <?php endif; ?>
        </div>
    </section>

</main>

<?php
get_footer();
