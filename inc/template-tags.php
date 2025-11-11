<?php
/**
 * Template tags and helper functions
 */

if ( ! function_exists( 'pure_posted_on' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function pure_posted_on() {
        if ( ! get_theme_mod( 'pure_show_post_date', true ) ) {
            return;
        }
        
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        
        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() )
        );

        echo '<span class="posted-on">';
        echo pure_get_icon( 'calendar', array( 'size' => 16 ) );
        echo $time_string . '</span>';
    }
endif;

if ( ! function_exists( 'pure_posted_by' ) ) :
    /**
     * Prints HTML with meta information about theme author.
     */
    function pure_posted_by() {
        if ( ! get_theme_mod( 'pure_show_post_author', true ) ) {
            return;
        }
        
        echo '<span class="byline">';
        echo pure_get_icon( 'user', array( 'size' => 16 ) );
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
        if ( get_theme_mod( 'pure_show_post_categories', true ) ) {
            $categories_list = get_the_category_list( esc_html__( ', ', 'pure' ) );
            if ( $categories_list ) {
                echo '<span class="cat-links">';
                echo pure_get_icon( 'folder', array( 'size' => 16 ) );
                printf( esc_html__( 'Posted in %1$s', 'pure' ), $categories_list );
                echo '</span>';
            }
        }

        // Tags
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'pure' ) );
        if ( $tags_list ) {
            echo '<span class="tags-links">';
            echo pure_get_icon( 'tag', array( 'size' => 16 ) );
            printf( esc_html__( 'Tagged %1$s', 'pure' ), $tags_list );
            echo '</span>';
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

        $lazy_load = get_theme_mod( 'pure_lazy_load_images', true );
        $loading_attr = $lazy_load ? 'lazy' : 'eager';

        if ( is_singular() ) :
            ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail( 'large', array( 'loading' => $loading_attr ) ); ?>
            </div>
            <?php
        else :
            ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'medium', array( 'loading' => $loading_attr ) ); ?>
                </a>
            </div>
            <?php
        endif;
    }
endif;

if ( ! function_exists( 'pure_excerpt_length' ) ) :
    /**
     * Custom excerpt length
     */
    function pure_excerpt_length( $length ) {
        return get_theme_mod( 'pure_excerpt_length', 55 );
    }
endif;
add_filter( 'excerpt_length', 'pure_excerpt_length' );

if ( ! function_exists( 'pure_excerpt_more' ) ) :
    /**
     * Custom excerpt more
     */
    function pure_excerpt_more( $more ) {
        if ( is_admin() ) {
            return $more;
        }
        
        $read_more_text = get_theme_mod( 'pure_read_more_text', __( 'Read More', 'pure' ) );
        return '... <a class="read-more" href="' . get_permalink() . '">' . esc_html( $read_more_text ) . ' ' . pure_get_icon( 'arrow-right', array( 'size' => 16 ) ) . '</a>';
    }
endif;
add_filter( 'excerpt_more', 'pure_excerpt_more' );
