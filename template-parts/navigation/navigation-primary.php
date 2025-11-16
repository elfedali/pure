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
        'fallback_cb'    => 'pure_primary_menu_fallback',
        'walker'         => new Pure_Main_Menu_Walker(),
        'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
    ) );
    ?>
</nav>
