<?php
/**
 * Sidebar Template
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <div class="sidebar-inner">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside>
