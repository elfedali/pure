<?php
/**
 * Template part for displaying header actions (search, account, cart)
 */
?>

<div class="header-actions">
    <button class="mobile-menu-toggle" aria-label="<?php esc_attr_e( 'Toggle Menu', 'pure' ); ?>" aria-expanded="false">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </button>
    
    <button class="header-actions__search" aria-label="<?php esc_attr_e( 'Search', 'pure' ); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.35-4.35"></path>
        </svg>
    </button>
    
    <a href="<?php echo esc_url( wp_login_url() ); ?>" class="header-actions__account" aria-label="<?php esc_attr_e( 'Account', 'pure' ); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>
    </a>
    
    <?php if ( function_exists( 'woocommerce_mini_cart' ) ) : ?>
        <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="header-actions__cart" aria-label="<?php esc_attr_e( 'Cart', 'pure' ); ?>">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="8" cy="21" r="1"></circle>
                <circle cx="19" cy="21" r="1"></circle>
                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
            </svg>
            <?php 
            $cart_count = WC()->cart->get_cart_contents_count();
            if ( $cart_count > 0 ) : 
            ?>
                <span class="header-actions__cart-count"><?php echo esc_html( $cart_count ); ?></span>
            <?php endif; ?>
        </a>
    <?php endif; ?>
</div>
