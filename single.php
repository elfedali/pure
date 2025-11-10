<?php
/**
 * Single Post Template
 * 
 * @package Pure
 */

get_header(); ?>

<div class="pure-g">
    <div class="pure-u-1 pure-u-md-2-3">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content/content', get_post_format() );

            the_post_navigation( array(
                'prev_text' => '<span class="nav-subtitle">' . __( 'Previous:', 'pure' ) . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . __( 'Next:', 'pure' ) . '</span> <span class="nav-title">%title</span>',
            ) );

            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile;
        ?>
    </div>

    <div class="pure-u-1 pure-u-md-1-3">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
