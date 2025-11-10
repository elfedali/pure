<?php
/**
 * 404 Error Page Template
 */

get_header(); ?>

<div class="pure-g">
    <div class="pure-u-1">
        <article class="error-404 not-found">
            <header class="entry-header">
                <h1 class="entry-title"><?php esc_html_e( '404 - Page Not Found', 'pure' ); ?></h1>
            </header>

            <div class="entry-content">
                <p><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'pure' ); ?></p>

                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-2">
                        <h2><?php esc_html_e( 'Search', 'pure' ); ?></h2>
                        <?php get_search_form(); ?>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-2">
                        <h2><?php esc_html_e( 'Recent Posts', 'pure' ); ?></h2>
                        <ul>
                            <?php
                            wp_list_pages( array(
                                'title_li' => '',
                                'number'   => 5,
                            ) );
                            ?>
                        </ul>
                    </div>
                </div>

                <p style="margin-top: 2em;">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="pure-button pure-button-primary">
                        <?php esc_html_e( 'Go to Homepage', 'pure' ); ?>
                    </a>
                </p>
            </div>
        </article>
    </div>
</div>

<?php get_footer(); ?>
