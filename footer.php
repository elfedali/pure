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
<?php wp_footer(); ?>
</body>
</html>
