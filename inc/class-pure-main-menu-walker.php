<?php
/**
 * Custom Walker for Primary Navigation
 *
 * Adds BEM-style classes, ARIA attributes for accessibility, and a submenu toggle button
 * for touch devices. Keeps markup lean and semantic.
 *
 * @package Pure
 */

if ( ! class_exists( 'Pure_Main_Menu_Walker' ) ) {
	class Pure_Main_Menu_Walker extends Walker_Nav_Menu {

		/**
		 * Tracks if current parent is a mega menu.
		 *
		 * @var bool
		 */
		private $is_mega_menu = false;

		/**
		 * Start Level.
		 *
		 * @param string $output Used to append additional content.
		 * @param int    $depth  Depth of menu item.
		 * @param array  $args   Menu arguments.
		 */
		public function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat( "\t", $depth );
			
			// Build submenu classes based on depth and mega menu status
			if ( $depth === 0 ) {
				if ( $this->is_mega_menu ) {
					// Mega menu wrapper
					$output .= "\n{$indent}<div class=\"pure-mega-menu\">\n";
					$output .= "{$indent}\t<div class=\"pure-mega-menu__inner\">\n";
					$output .= "{$indent}\t\t<ul class=\"pure-mega-menu__columns\">\n";
				} else {
					// Standard dropdown
					$output .= "\n{$indent}<ul class=\"pure-submenu pure-submenu--dropdown\" role=\"menu\">\n";
				}
			} else if ( $depth === 1 && $this->is_mega_menu ) {
				// Mega menu sub-items (within column)
				$output .= "\n{$indent}<ul class=\"pure-mega-menu__items\">\n";
			} else {
				// Deeper levels
				$submenu_class = 'pure-submenu pure-submenu--level-' . ( $depth + 1 );
				$output .= "\n{$indent}<ul class=\"{$submenu_class}\" role=\"menu\">\n";
			}
		}

		/**
		 * End Level.
		 */
		public function end_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat( "\t", $depth );
			$output .= "{$indent}</ul>\n";
			
			// Close mega menu wrappers
			if ( $depth === 0 && $this->is_mega_menu ) {
				$output .= "{$indent}\t</div>\n"; // close inner
				$output .= "{$indent}</div>\n"; // close mega-menu
			}
		}

		/**
		 * Start Element.
		 *
		 * @param string $output Passed by reference.
		 * @param object $item   Menu item data object.
		 * @param int    $depth  Depth.
		 * @param array  $args   Menu arguments.
		 * @param int    $id     Current item ID.
		 */
		public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			
			// Check for mega-menu class on root items
			if ( $depth === 0 && in_array( 'mega-menu', $classes, true ) ) {
				$this->is_mega_menu = true;
			}
			
			$classes[] = 'pure-menu__item';

			if ( in_array( 'menu-item-has-children', $classes, true ) ) {
				$classes[] = 'pure-menu__item--has-children';
				
				// Add mega menu modifier to root items
				if ( $depth === 0 && $this->is_mega_menu ) {
					$classes[] = 'pure-menu__item--mega';
				}
			}
			
			if ( $depth === 0 ) {
				$classes[] = 'pure-menu__item--root';
			}
			
			// Mega menu column header styling
			if ( $depth === 1 && $this->is_mega_menu && in_array( 'menu-item-has-children', $classes, true ) ) {
				$classes[] = 'pure-mega-menu__column';
			}

			$classes = array_filter( $classes );
			$class_names = join( ' ', array_map( 'sanitize_html_class', $classes ) );
			$class_attribute = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			$item_id = 'menu-item-' . $item->ID;
			$output .= $indent . '<li' . $class_attribute . ' id="' . esc_attr( $item_id ) . '" role="none">';

			// Link attributes.
			$atts = array();
			$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
			$atts['target'] = ! empty( $item->target ) ? $item->target : '';
			$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
			$atts['href']   = ! empty( $item->url ) ? $item->url : '';
			
			// For mega menu column headers, make non-clickable
			if ( $depth === 1 && $this->is_mega_menu && in_array( 'menu-item-has-children', $classes, true ) ) {
				$atts['href'] = '#';
				$atts['tabindex'] = '-1';
			} else {
				$atts['role'] = 'menuitem';
			}

			if ( in_array( 'menu-item-has-children', $classes, true ) && $depth === 0 ) {
				$atts['aria-haspopup'] = 'true';
				$atts['aria-expanded'] = 'false';
			}

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( empty( $value ) && $value !== '0' ) {
					continue;
				}
				$value      = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}

			$title = apply_filters( 'the_title', $item->title, $item->ID );
			$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

			// For mega menu column headers, use header tag
			if ( $depth === 1 && $this->is_mega_menu && in_array( 'menu-item-has-children', $classes, true ) ) {
				$item_output = '<h3 class="pure-mega-menu__heading">' . esc_html( $title ) . '</h3>';
			} else {
			$item_output  = '<a class="pure-menu__link"' . $attributes . '>';
			$item_output .= '<span class="pure-menu__text">' . esc_html( $title ) . '</span>';
			$item_output .= '</a>';
		}

		$item_output = apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			$output     .= $item_output;
		}

		/**
		 * End Element.
		 */
		public function end_el( &$output, $item, $depth = 0, $args = array() ) {
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			
			// Reset mega menu flag after root item closes
			if ( $depth === 0 && in_array( 'mega-menu', $classes, true ) ) {
				$this->is_mega_menu = false;
			}
			
			$output .= '</li>' . "\n";
		}
	}
}

/**
 * Fallback callback for primary menu: list pages if no menu assigned.
 */
function pure_primary_menu_fallback() {
	echo '<ul class="pure-menu-list pure-menu-list--fallback" role="menubar">';
	wp_list_pages( array( 'title_li' => false ) );
	echo '</ul>';
}
