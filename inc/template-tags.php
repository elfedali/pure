<?php
/**
 * Template tags and helper functions
 */

if ( ! function_exists( 'pure_posted_on' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function pure_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        
        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() )
        );

        echo '<span class="posted-on">' . $time_string . '</span>';
    }
endif;

if ( ! function_exists( 'pure_posted_by' ) ) :
    /**
     * Prints HTML with meta information about theme author.
     */
    function pure_posted_by() {
        echo '<span class="byline">';
        printf(
            esc_html_x( 'by %s', 'post author', 'pure' ),
            '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
        );
        echo '</span>';
    }
endif;

if ( ! function_exists( 'pure_entry_footer' ) ) :
    /**
     * Prints HTML with meta information for categories, tags.
     */
    function pure_entry_footer() {
        // Categories
        $categories_list = get_the_category_list( esc_html__( ', ', 'pure' ) );
        if ( $categories_list ) {
            printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'pure' ) . '</span>', $categories_list );
        }

        // Tags
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'pure' ) );
        if ( $tags_list ) {
            printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'pure' ) . '</span>', $tags_list );
        }
    }
endif;

if ( ! function_exists( 'pure_post_thumbnail' ) ) :
    /**
     * Displays an optional post thumbnail.
     */
    function pure_post_thumbnail() {
        if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
            return;
        }

        if ( is_singular() ) :
            ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail( 'large' ); ?>
            </div>
            <?php
        else :
            ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'medium' ); ?>
                </a>
            </div>
            <?php
        endif;
    }
endif;
