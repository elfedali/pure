<?php
/**
 * Sample Menu Creation
 * 
 * Creates a demo mega menu structure on theme activation
 *
 * @package Pure
 */

/**
 * Create sample mega menu on theme activation
 */
function pure_create_sample_menu() {
	// Check if menu already exists
	$menu_name = 'Primary Menu';
	$menu_exists = wp_get_nav_menu_object( $menu_name );
	
	// Only create if it doesn't exist
	if ( ! $menu_exists ) {
		$menu_id = wp_create_nav_menu( $menu_name );
		
		// Create menu structure similar to Quiksilver
		$menu_items = array(
			// MENS - Mega Menu
			array(
				'title' => 'MENS',
				'url' => '#',
				'classes' => array( 'mega-menu' ),
				'children' => array(
					array(
						'title' => 'COLLECTIONS',
						'url' => '#',
						'children' => array(
							array( 'title' => 'New Arrivals', 'url' => '#' ),
							array( 'title' => 'Spring Break', 'url' => '#' ),
							array( 'title' => 'DNA', 'url' => '#' ),
							array( 'title' => 'Saturn', 'url' => '#' ),
							array( 'title' => 'Hawaii Collection', 'url' => '#' ),
							array( 'title' => 'Waterman', 'url' => '#' ),
							array( 'title' => 'Originals', 'url' => '#' ),
							array( 'title' => 'Highline', 'url' => '#' ),
							array( 'title' => 'Training', 'url' => '#' ),
						),
					),
					array(
						'title' => 'CLOTHING',
						'url' => '#',
						'children' => array(
							array( 'title' => 'Shop All', 'url' => '#' ),
							array( 'title' => 'Tees', 'url' => '#' ),
							array( 'title' => 'Shirts & Polos', 'url' => '#' ),
							array( 'title' => 'Shorts & Amphibians', 'url' => '#' ),
							array( 'title' => 'Pants', 'url' => '#' ),
							array( 'title' => 'Sweatshirts & Hoodies', 'url' => '#' ),
							array( 'title' => 'Jackets', 'url' => '#' ),
						),
					),
					array(
						'title' => 'SURF',
						'url' => '#',
						'children' => array(
							array( 'title' => 'Shop All', 'url' => '#' ),
							array( 'title' => 'Boardshorts', 'url' => '#' ),
							array( 'title' => 'Wetsuits', 'url' => '#' ),
							array( 'title' => 'Rashguards', 'url' => '#' ),
							array( 'title' => 'Surf Accessories', 'url' => '#' ),
						),
					),
					array(
						'title' => 'ACCESSORIES',
						'url' => '#',
						'children' => array(
							array( 'title' => 'Shop All', 'url' => '#' ),
							array( 'title' => 'Backpacks & Bags', 'url' => '#' ),
							array( 'title' => 'Hats', 'url' => '#' ),
							array( 'title' => 'Beanies', 'url' => '#' ),
							array( 'title' => 'Towels', 'url' => '#' ),
							array( 'title' => 'Water Bottles', 'url' => '#' ),
							array( 'title' => 'Wallets', 'url' => '#' ),
							array( 'title' => 'Belts', 'url' => '#' ),
							array( 'title' => 'Socks', 'url' => '#' ),
						),
					),
					array(
						'title' => 'SHOES',
						'url' => '#',
						'children' => array(
							array( 'title' => 'Shop All', 'url' => '#' ),
							array( 'title' => 'Sandals', 'url' => '#' ),
							array( 'title' => 'Shoes', 'url' => '#' ),
						),
					),
				),
			),
			
			// BOYS - Standard Dropdown
			array(
				'title' => 'BOYS',
				'url' => '#',
				'children' => array(
					array( 'title' => 'New Arrivals', 'url' => '#' ),
					array( 'title' => 'Tees', 'url' => '#' ),
					array( 'title' => 'Boardshorts', 'url' => '#' ),
					array( 'title' => 'Accessories', 'url' => '#' ),
				),
			),
			
			// SNOW - Standard Dropdown
			array(
				'title' => 'SNOW',
				'url' => '#',
				'children' => array(
					array( 'title' => 'Shop All', 'url' => '#' ),
					array( 'title' => 'Snow Jackets', 'url' => '#' ),
					array( 'title' => 'Snow Pants', 'url' => '#' ),
					array( 'title' => 'Accessories', 'url' => '#' ),
				),
			),
			
			// SURF - Simple link
			array(
				'title' => 'SURF',
				'url' => '#',
			),
			
			// WATERMAN - Simple link
			array(
				'title' => 'WATERMAN',
				'url' => '#',
			),
			
			// SALE - Simple link
			array(
				'title' => 'SALE',
				'url' => '#',
			),
		);
		
		// Add menu items recursively
		pure_add_menu_items( $menu_id, $menu_items );
		
		// Assign menu to primary location
		$locations = get_theme_mod( 'nav_menu_locations' );
		$locations['primary'] = $menu_id;
		set_theme_mod( 'nav_menu_locations', $locations );
	}
}

/**
 * Recursively add menu items
 */
function pure_add_menu_items( $menu_id, $items, $parent_id = 0 ) {
	foreach ( $items as $item ) {
		$item_id = wp_update_nav_menu_item( $menu_id, 0, array(
			'menu-item-title'      => $item['title'],
			'menu-item-url'        => $item['url'],
			'menu-item-status'     => 'publish',
			'menu-item-parent-id'  => $parent_id,
			'menu-item-classes'    => implode( ' ', isset( $item['classes'] ) ? $item['classes'] : array() ),
		) );
		
		// Add children recursively
		if ( isset( $item['children'] ) && ! empty( $item['children'] ) ) {
			pure_add_menu_items( $menu_id, $item['children'], $item_id );
		}
	}
}

// Sample menu creation is disabled by default to avoid overriding
// existing site menus when the theme is activated. If you want to
// auto-create the demo menu, uncomment the line below.
// add_action( 'after_switch_theme', 'pure_create_sample_menu' );
