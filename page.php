<?php
/**
 * Page Template
 * 
 * @package Pure
 */

get_header(); ?>

<div class="pure-g">
    <div class="pure-u-1">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content/content', 'page' );

            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>
