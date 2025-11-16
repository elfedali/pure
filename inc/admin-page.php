<?php
/**
 * Theme Admin Page
 * 
 * Provides theme configuration options including demo data creation
 *
 * @package Pure
 */

/**
 * Add theme admin menu
 */
function pure_add_admin_menu() {
	add_theme_page(
		__( 'Pure Theme Options', 'pure' ),
		__( 'Pure Options', 'pure' ),
		'manage_options',
		'pure-theme-options',
		'pure_admin_page_content'
	);
}
add_action( 'admin_menu', 'pure_add_admin_menu' );

/**
 * Admin page content
 */
function pure_admin_page_content() {
	// Check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	// Handle form submission
	if ( isset( $_POST['pure_create_demo_data'] ) && check_admin_referer( 'pure_demo_data_action', 'pure_demo_data_nonce' ) ) {
		$result = pure_create_demo_data();
		if ( $result['success'] ) {
			echo '<div class="notice notice-success is-dismissible"><p>' . esc_html( $result['message'] ) . '</p></div>';
		} else {
			echo '<div class="notice notice-error is-dismissible"><p>' . esc_html( $result['message'] ) . '</p></div>';
		}
	}

	// Handle delete demo data
	if ( isset( $_POST['pure_delete_demo_data'] ) && check_admin_referer( 'pure_delete_demo_action', 'pure_delete_demo_nonce' ) ) {
		$result = pure_delete_demo_data();
		if ( $result['success'] ) {
			echo '<div class="notice notice-success is-dismissible"><p>' . esc_html( $result['message'] ) . '</p></div>';
		} else {
			echo '<div class="notice notice-error is-dismissible"><p>' . esc_html( $result['message'] ) . '</p></div>';
		}
	}

	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		
		<div class="pure-admin-content" style="max-width: 800px;">
			
			<!-- Demo Data Section -->
			<div class="card" style="margin-top: 20px;">
				<h2><?php esc_html_e( 'Demo Data', 'pure' ); ?></h2>
				<p><?php esc_html_e( 'Create demo pages and menu structure to quickly set up your site with sample content.', 'pure' ); ?></p>
				
				<table class="form-table">
					<tr>
						<th scope="row">
							<?php esc_html_e( 'Demo Content', 'pure' ); ?>
						</th>
						<td>
							<form method="post" style="display: inline-block; margin-right: 10px;">
								<?php wp_nonce_field( 'pure_demo_data_action', 'pure_demo_data_nonce' ); ?>
								<input type="submit" name="pure_create_demo_data" class="button button-primary" value="<?php esc_attr_e( 'Create Demo Data', 'pure' ); ?>">
							</form>
							
							<form method="post" style="display: inline-block;">
								<?php wp_nonce_field( 'pure_delete_demo_action', 'pure_delete_demo_nonce' ); ?>
								<input type="submit" name="pure_delete_demo_data" class="button button-secondary" value="<?php esc_attr_e( 'Delete Demo Data', 'pure' ); ?>" onclick="return confirm('<?php esc_attr_e( 'Are you sure you want to delete all demo data?', 'pure' ); ?>');">
							</form>
							
							<p class="description">
								<?php esc_html_e( 'This will create pages for MENS, BOYS, SNOW, SURF, WATERMAN, and SALE sections with nested product category pages.', 'pure' ); ?>
							</p>
						</td>
					</tr>
				</table>
			</div>

			<!-- Theme Info -->
			<div class="card" style="margin-top: 20px;">
				<h2><?php esc_html_e( 'Theme Information', 'pure' ); ?></h2>
				<table class="form-table">
					<tr>
						<th scope="row"><?php esc_html_e( 'Version', 'pure' ); ?></th>
						<td><?php echo esc_html( PURE_VERSION ); ?></td>
					</tr>
					<tr>
						<th scope="row"><?php esc_html_e( 'Customizer', 'pure' ); ?></th>
						<td>
							<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button">
								<?php esc_html_e( 'Customize Theme', 'pure' ); ?>
							</a>
						</td>
					</tr>
				</table>
			</div>

		</div>
	</div>
	<?php
}

/**
 * Create demo data - pages and menu
 */
function pure_create_demo_data() {
	// Check if demo menu already exists
	$menu_name = 'Pure Demo Menu';
	$menu_exists = wp_get_nav_menu_object( $menu_name );
	
	if ( $menu_exists ) {
		return array(
			'success' => false,
			'message' => __( 'Demo menu already exists. Please delete it first before creating new demo data.', 'pure' )
		);
	}

	// Create menu
	$menu_id = wp_create_nav_menu( $menu_name );
	
	if ( is_wp_error( $menu_id ) ) {
		return array(
			'success' => false,
			'message' => __( 'Failed to create demo menu.', 'pure' )
		);
	}

	// Store created page IDs for cleanup
	$demo_page_ids = array();

	// Define menu structure with diverse demo content
	$menu_structure = array(
		// PRODUCTS - Mega Menu
		array(
			'title' => 'Products',
			'classes' => array( 'mega-menu' ),
			'children' => array(
				array(
					'title' => 'CATEGORIES',
					'children' => array(
						'Featured Items', 'Best Sellers', 'New Releases', 'Limited Edition', 
						'Seasonal', 'Premium Collection', 'Essentials', 'Bundles'
					)
				),
				array(
					'title' => 'BY TYPE',
					'children' => array(
						'View All', 'Apparel', 'Equipment', 'Gear', 
						'Footwear', 'Outerwear', 'Activewear'
					)
				),
				array(
					'title' => 'TECHNOLOGY',
					'children' => array(
						'View All', 'Smart Devices', 'Wearables', 'Gadgets', 'Innovations'
					)
				),
				array(
					'title' => 'LIFESTYLE',
					'children' => array(
						'View All', 'Travel', 'Home & Living', 'Fitness', 'Outdoor', 
						'Work', 'Leisure', 'Everyday'
					)
				),
				array(
					'title' => 'GIFTS',
					'children' => array(
						'Gift Guide', 'Gift Cards', 'Under $50', 'Under $100'
					)
				),
			)
		),
		// COLLECTIONS - Standard Dropdown
		array(
			'title' => 'Collections',
			'children' => array(
				'Spring 2025', 'Summer Vibes', 'Urban Style', 'Heritage', 'Signature Series'
			)
		),
		// SERVICES - Standard Dropdown
		array(
			'title' => 'Services',
			'children' => array(
				'Customization', 'Personal Shopping', 'Repairs', 'Consultations', 'Subscriptions'
			)
		),
		// ABOUT - Simple link
		array(
			'title' => 'About',
		),
		// BLOG - Simple link
		array(
			'title' => 'Blog',
		),
		// CONTACT - Simple link
		array(
			'title' => 'Contact',
		),
	);

	// Add menu items recursively
	$result = pure_add_demo_menu_items( $menu_id, $menu_structure, 0, $demo_page_ids );

	// Store demo page IDs in option for cleanup
	update_option( 'pure_demo_page_ids', $demo_page_ids );
	update_option( 'pure_demo_menu_id', $menu_id );

	// Assign menu to primary location
	$locations = get_theme_mod( 'nav_menu_locations' );
	$locations['primary'] = $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations );

	return array(
		'success' => true,
		'message' => sprintf( 
			__( 'Demo data created successfully! Created %d pages and assigned menu to primary location.', 'pure' ),
			count( $demo_page_ids )
		)
	);
}

/**
 * Recursively add menu items and create pages
 */
function pure_add_demo_menu_items( $menu_id, $items, $parent_id = 0, &$demo_page_ids = array() ) {
	foreach ( $items as $item ) {
		$page_id = null;
		
		// Determine if this is a string (simple item) or array (complex item)
		if ( is_string( $item ) ) {
			$title = $item;
			$classes = array();
			$children = array();
		} else {
			$title = $item['title'];
			$classes = isset( $item['classes'] ) ? $item['classes'] : array();
			$children = isset( $item['children'] ) ? $item['children'] : array();
		}

		// Create page for this menu item
		$page_slug = sanitize_title( $title );
		$existing_page = get_page_by_path( $page_slug );
		
		if ( ! $existing_page ) {
			$page_id = wp_insert_post( array(
				'post_title'   => $title,
				'post_content' => '<p>Content of the page: <strong>' . esc_html( $title ) . '</strong></p><p>This is demo content. Please replace with your actual content.</p>',
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_name'    => $page_slug,
			) );
			
			if ( $page_id && ! is_wp_error( $page_id ) ) {
				$demo_page_ids[] = $page_id;
			}
		} else {
			$page_id = $existing_page->ID;
		}

		// Add to menu
		$menu_item_data = array(
			'menu-item-title'      => $title,
			'menu-item-status'     => 'publish',
			'menu-item-parent-id'  => $parent_id,
		);

		// Link to page if created
		if ( $page_id ) {
			$menu_item_data['menu-item-object-id'] = $page_id;
			$menu_item_data['menu-item-object'] = 'page';
			$menu_item_data['menu-item-type'] = 'post_type';
		} else {
			$menu_item_data['menu-item-url'] = '#';
			$menu_item_data['menu-item-type'] = 'custom';
		}

		if ( ! empty( $classes ) ) {
			$menu_item_data['menu-item-classes'] = implode( ' ', $classes );
		}

		$item_id = wp_update_nav_menu_item( $menu_id, 0, $menu_item_data );

		// Add children recursively
		if ( ! empty( $children ) ) {
			pure_add_demo_menu_items( $menu_id, $children, $item_id, $demo_page_ids );
		}
	}
}

/**
 * Delete demo data
 */
function pure_delete_demo_data() {
	// Get stored demo page IDs
	$demo_page_ids = get_option( 'pure_demo_page_ids', array() );
	$demo_menu_id = get_option( 'pure_demo_menu_id', 0 );

	// Delete pages
	foreach ( $demo_page_ids as $page_id ) {
		wp_delete_post( $page_id, true );
	}

	// Delete menu
	if ( $demo_menu_id ) {
		wp_delete_nav_menu( $demo_menu_id );
	}

	// Clean up options
	delete_option( 'pure_demo_page_ids' );
	delete_option( 'pure_demo_menu_id' );

	// Remove menu from primary location if it was assigned
	$locations = get_theme_mod( 'nav_menu_locations' );
	if ( isset( $locations['primary'] ) && $locations['primary'] == $demo_menu_id ) {
		unset( $locations['primary'] );
		set_theme_mod( 'nav_menu_locations', $locations );
	}

	return array(
		'success' => true,
		'message' => sprintf( 
			__( 'Demo data deleted successfully! Removed %d pages and menu.', 'pure' ),
			count( $demo_page_ids )
		)
	);
}
