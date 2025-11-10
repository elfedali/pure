<?php
/**
 * Search Results Template
 * 
 * @package Pure
 */

get_header(); ?>

<div class="pure-g">
    <div class="pure-u-1">
        <header class="page-header">
            <h1 class="page-title">
                <?php
                printf(
                    esc_html__( 'Search Results for: %s', 'pure' ),
                    '<span>' . get_search_query() . '</span>'
                );
                ?>
            </h1>
        </header>

        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content/content', get_post_format() );
            endwhile;

            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '&laquo; Previous', 'pure' ),
                'next_text' => __( 'Next &raquo;', 'pure' ),
            ) );

        else :
            get_template_part( 'template-parts/content/content', 'none' );
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
