    </main><!-- .site-content -->

    <footer class="site-footer">
        <div class="footer-content">
            <?php
            // Custom footer text from customizer
            $footer_text = get_theme_mod( 'pure_footer_text' );
            if ( ! empty( $footer_text ) ) {
                echo wp_kses_post( $footer_text );
            } else {
                // Default footer text
                printf(
                    '&copy; %s <a href="%s">%s</a>. %s',
                    date( 'Y' ),
                    esc_url( home_url( '/' ) ),
                    esc_html( get_bloginfo( 'name' ) ),
                    esc_html__( 'All rights reserved.', 'pure' )
                );
            }
            ?>
            
            <?php if ( get_theme_mod( 'pure_show_footer_credits', true ) ) : ?>
                <span class="footer-credits">
                    <?php
                    printf(
                        esc_html__( ' | Powered by %s', 'pure' ),
                        '<a href="https://wordpress.org" target="_blank" rel="noopener">WordPress</a>'
                    );
                    ?>
                </span>
            <?php endif; ?>
        </div>
        
        <?php
        // Display social media links
        $social_networks = array(
            'facebook'  => array( 'icon' => 'facebook', 'label' => 'Facebook' ),
            'twitter'   => array( 'icon' => 'twitter', 'label' => 'Twitter' ),
            'instagram' => array( 'icon' => 'instagram', 'label' => 'Instagram' ),
            'linkedin'  => array( 'icon' => 'linkedin', 'label' => 'LinkedIn' ),
            'youtube'   => array( 'icon' => 'youtube', 'label' => 'YouTube' ),
            'github'    => array( 'icon' => 'github', 'label' => 'GitHub' ),
        );
        
        $has_social = false;
        foreach ( $social_networks as $network => $data ) {
            if ( get_theme_mod( "pure_social_{$network}" ) ) {
                $has_social = true;
                break;
            }
        }
        
        if ( $has_social ) : ?>
            <div class="footer-social">
                <?php foreach ( $social_networks as $network => $data ) :
                    $url = get_theme_mod( "pure_social_{$network}" );
                    if ( $url ) : ?>
                        <a href="<?php echo esc_url( $url ); ?>" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="<?php echo esc_attr( $data['label'] ); ?>">
                            <?php echo pure_get_icon( $data['icon'], array( 'size' => 20 ) ); ?>
                        </a>
                    <?php endif;
                endforeach; ?>
            </div>
        <?php endif; ?>
    </footer>
</div><!-- .site-container -->

<?php
// Development Mode Debug Information
if ( get_theme_mod( 'pure_debug_mode', false ) ) {
    echo "\n<!-- DEBUG MODE ENABLED -->\n";
    echo "<!-- Theme Version: " . esc_html( PURE_VERSION ) . " -->\n";
    echo "<!-- WordPress Version: " . esc_html( get_bloginfo( 'version' ) ) . " -->\n";
    echo "<!-- PHP Version: " . esc_html( phpversion() ) . " -->\n";
    
    global $template;
    if ( isset( $template ) ) {
        echo "<!-- Current Template: " . esc_html( basename( $template ) ) . " -->\n";
    }
    
    $queried_object = get_queried_object();
    if ( $queried_object ) {
        if ( is_singular() ) {
            echo "<!-- Post Type: " . esc_html( get_post_type() ) . " -->\n";
            echo "<!-- Post ID: " . esc_html( get_the_ID() ) . " -->\n";
        } elseif ( is_tax() || is_category() || is_tag() ) {
            echo "<!-- Taxonomy: " . esc_html( $queried_object->taxonomy ) . " -->\n";
            echo "<!-- Term: " . esc_html( $queried_object->name ) . " -->\n";
        }
    }
    
    echo "<!-- Page Type: ";
    if ( is_front_page() ) echo "Front Page";
    elseif ( is_home() ) echo "Blog Home";
    elseif ( is_single() ) echo "Single Post";
    elseif ( is_page() ) echo "Page";
    elseif ( is_archive() ) echo "Archive";
    elseif ( is_search() ) echo "Search";
    elseif ( is_404() ) echo "404";
    echo " -->\n";
    
    echo "<!-- Peak Memory Usage: " . size_format( memory_get_peak_usage() ) . " -->\n";
    echo "<!-- END DEBUG INFO -->\n\n";
}

// Show template info if enabled
if ( get_theme_mod( 'pure_show_template_info', false ) ) {
    global $template;
    if ( isset( $template ) ) {
        echo "\n<!-- Template: " . esc_html( str_replace( get_template_directory(), '', $template ) ) . " -->\n";
    }
}
?>

<?php wp_footer(); ?>
</body>
</html>
