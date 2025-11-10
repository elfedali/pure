<?php
/**
 * Template part for displaying the primary navigation
 */
?>

<nav class="main-navigation">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'pure-menu-list',
        'container'      => false,
        'fallback_cb'    => false,
    ) );
    ?>
</nav>
