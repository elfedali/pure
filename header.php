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

<!-- Search Offcanvas -->
<div class="search-offcanvas" id="searchOffcanvas" style="display: none;">
    <div class="search-offcanvas__container">
        <form role="search" method="get" class="search-offcanvas__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" 
                   class="search-offcanvas__input" 
                   placeholder="<?php esc_attr_e( 'Search...', 'pure' ); ?>" 
                   name="s" 
                   id="searchInput"
                   autocomplete="off">
            <button type="submit" class="search-offcanvas__submit" aria-label="<?php esc_attr_e( 'Submit search', 'pure' ); ?>">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.35-4.35"></path>
                </svg>
            </button>
            <button type="button" class="search-offcanvas__close" onclick="toggleSearch()" aria-label="<?php esc_attr_e( 'Close search', 'pure' ); ?>">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </form>
    </div>
</div>

<script>
function toggleSearch() {
    const offcanvas = document.getElementById('searchOffcanvas');
    const input = document.getElementById('searchInput');
    if (offcanvas.style.display === 'none') {
        offcanvas.style.display = 'block';
        setTimeout(() => input.focus(), 100);
    } else {
        offcanvas.style.display = 'none';
    }
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.getElementById('searchOffcanvas').style.display = 'none';
    }
});
</script>

<div class="site-container">
    <main class="site-content">
