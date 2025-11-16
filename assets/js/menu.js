/**
 * Pure Menu - Mega Menu Navigation
 * 
 * Handles keyboard navigation and accessibility features
 */

(function() {
	'use strict';

	/**
	 * Initialize menu functionality
	 */
	function initMenu() {
		const nav = document.querySelector('.main-navigation');
		if (!nav) return;
		
		// Initialize keyboard navigation
		initKeyboardNav(nav);
		
		// Close menus on outside click
		initOutsideClick(nav);
	}

	/**
	 * Initialize keyboard navigation
	 */
	function initKeyboardNav(nav) {
		const menuItems = nav.querySelectorAll('.pure-menu__item--root');
		
		menuItems.forEach((item, index) => {
			const link = item.querySelector('.pure-menu__link');
			if (!link) return;
			
			link.addEventListener('keydown', function(e) {
				// Arrow Right - next item
				if (e.key === 'ArrowRight') {
					e.preventDefault();
					const nextItem = menuItems[index + 1];
					if (nextItem) {
						const nextLink = nextItem.querySelector('.pure-menu__link');
						if (nextLink) nextLink.focus();
					}
				}
				
				// Arrow Left - previous item
				if (e.key === 'ArrowLeft') {
					e.preventDefault();
					const prevItem = menuItems[index - 1];
					if (prevItem) {
						const prevLink = prevItem.querySelector('.pure-menu__link');
						if (prevLink) prevLink.focus();
					}
				}
				
				// Arrow Down - open submenu and focus first item
				if (e.key === 'ArrowDown') {
					const hasChildren = item.classList.contains('pure-menu__item--has-children');
					if (hasChildren) {
						e.preventDefault();
						
						// Find submenu
						const submenu = item.querySelector('.pure-submenu--dropdown, .pure-mega-menu');
						if (submenu) {
							const firstLink = submenu.querySelector('.pure-menu__link');
							if (firstLink) {
								firstLink.focus();
							}
						}
					}
				}
				
				// Escape - close submenu and return focus
				if (e.key === 'Escape') {
					const openItem = item.closest('.pure-menu__item--has-children');
					if (openItem) {
						const link = openItem.querySelector('.pure-menu__link');
						if (link) {
							link.focus();
						}
					}
				}
			});
		});
		
		// Handle submenu keyboard navigation
		const submenuLinks = nav.querySelectorAll('.pure-submenu--dropdown .pure-menu__link, .pure-mega-menu__items .pure-menu__link');
		submenuLinks.forEach(link => {
			link.addEventListener('keydown', function(e) {
				// Escape - close and return to parent
				if (e.key === 'Escape') {
					e.preventDefault();
					const parentItem = this.closest('.pure-menu__item--root');
					if (parentItem) {
						const parentLink = parentItem.querySelector(':scope > .pure-menu__link');
						if (parentLink) {
							parentLink.focus();
						}
					}
				}
				
				// Arrow Up - previous item in submenu
				if (e.key === 'ArrowUp') {
					e.preventDefault();
					const currentLi = this.closest('li');
					const prevLi = currentLi?.previousElementSibling;
					if (prevLi) {
						const prevLink = prevLi.querySelector('.pure-menu__link');
						if (prevLink) prevLink.focus();
					}
				}
				
				// Arrow Down - next item in submenu
				if (e.key === 'ArrowDown') {
					e.preventDefault();
					const currentLi = this.closest('li');
					const nextLi = currentLi?.nextElementSibling;
					if (nextLi) {
						const nextLink = nextLi.querySelector('.pure-menu__link');
						if (nextLink) nextLink.focus();
					}
				}
			});
		});
	}

	/**
	 * Close menus when clicking outside
	 */
	function initOutsideClick(nav) {
		document.addEventListener('click', function(e) {
			// Check if click is outside navigation
			if (!nav.contains(e.target)) {
				// Menu will close automatically via CSS :hover
			}
		});
	}

	/**
	 * Initialize on DOM ready
	 */
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initMenu);
	} else {
		initMenu();
	}

})();
