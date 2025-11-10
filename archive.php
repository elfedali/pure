<?php
/**
 * Archive Template
 * 
 * @package Pure
 */

get_header(); ?>

<div class="pure-g">
    <div class="pure-u-1 pure-u-md-2-3">
        <header class="page-header">
            <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="archive-description">', '</div>' );
            ?>
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

    <div class="pure-u-1 pure-u-md-1-3">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
