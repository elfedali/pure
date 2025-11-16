<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="site-header__wrapper">
        <div class="site-header__container">
            <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
            <?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
            <?php get_template_part( 'template-parts/header/header', 'actions' ); ?>
        </div>
    </div>
</header>

<div class="site-container">
    <main class="site-content">
