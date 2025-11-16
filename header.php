<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$menu_width = get_theme_mod( 'pure_menu_width', 'container' );
$menu_alignment = get_theme_mod( 'pure_menu_alignment', 'center' );
$wrapper_class = ( 'full-width' === $menu_width ) ? 'site-header__wrapper--full' : '';
$container_class = 'site-header__container site-header__container--' . $menu_alignment;
?>
<header class="site-header">
    <div class="site-header__wrapper <?php echo esc_attr( $wrapper_class ); ?>">
        <div class="<?php echo esc_attr( $container_class ); ?>">
            <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
            <?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
            <?php get_template_part( 'template-parts/header/header', 'actions' ); ?>
        </div>
    </div>
</header>

<div class="site-container">
    <main class="site-content">
