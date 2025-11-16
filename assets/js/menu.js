/**
 * Pure Menu - Mega Menu Navigation
 * 
 * Handles desktop hover interactions, mobile toggle functionality,
 * keyboard navigation, and accessibility features
 */

(function() {
	'use strict';

	/**
	 * Initialize menu functionality
	 */
	function initMenu() {
		const nav = document.querySelector('.main-navigation');
		if (!nav) return;

		const menuItems = nav.querySelectorAll('.pure-menu__item--has-children');
		
		// Initialize mobile menu toggle
		initMobileMenuToggle(nav);
		
		// Initialize mobile toggles
		initMobileToggles();
		
		// Initialize keyboard navigation
		initKeyboardNav(nav);
		
		// Close menus on outside click
		initOutsideClick(nav);
		
		// Handle window resize
		handleResize();
	}

	/**
	 * Initialize mobile menu toggle button
	 */
	function initMobileMenuToggle(nav) {
		const toggle = document.querySelector('.mobile-menu-toggle');
		if (!toggle) return;
		
		toggle.addEventListener('click', function() {
			const isOpen = nav.classList.contains('is-open');
			
			if (isOpen) {
				nav.classList.remove('is-open');
				this.setAttribute('aria-expanded', 'false');
			} else {
				nav.classList.add('is-open');
				this.setAttribute('aria-expanded', 'true');
			}
		});
	}

	/**
	 * Initialize mobile toggle buttons
	 */
	function initMobileToggles() {
		const toggles = document.querySelectorAll('.pure-menu__toggle');
		
		toggles.forEach(toggle => {
			toggle.addEventListener('click', function(e) {
				e.preventDefault();
				e.stopPropagation();
				
				const menuItem = this.closest('.pure-menu__item--has-children');
				if (!menuItem) return;
				
				const isExpanded = this.getAttribute('aria-expanded') === 'true';
				
				// Close all other open menus at same level
				const siblings = Array.from(menuItem.parentElement.children);
				siblings.forEach(sibling => {
					if (sibling !== menuItem && sibling.classList.contains('pure-menu__item--has-children')) {
						const siblingToggle = sibling.querySelector('.pure-menu__toggle');
						const siblingLink = sibling.querySelector('.pure-menu__link');
						if (siblingToggle) {
							siblingToggle.setAttribute('aria-expanded', 'false');
						}
						if (siblingLink) {
							siblingLink.setAttribute('aria-expanded', 'false');
						}
						sibling.setAttribute('aria-expanded', 'false');
					}
				});
				
				// Toggle current menu
				const newState = !isExpanded;
				this.setAttribute('aria-expanded', newState.toString());
				
				const link = menuItem.querySelector('.pure-menu__link');
				if (link) {
					link.setAttribute('aria-expanded', newState.toString());
				}
				
				menuItem.setAttribute('aria-expanded', newState.toString());
			});
		});
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
				
				// Escape - close submenu
				if (e.key === 'Escape') {
					const openItem = item.closest('.pure-menu__item--has-children');
					if (openItem) {
						const toggle = openItem.querySelector('.pure-menu__toggle');
						const link = openItem.querySelector('.pure-menu__link');
						if (toggle) {
							toggle.setAttribute('aria-expanded', 'false');
						}
						if (link) {
							link.setAttribute('aria-expanded', 'false');
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
				// Close all expanded menus
				const expandedToggles = nav.querySelectorAll('.pure-menu__toggle[aria-expanded="true"]');
				expandedToggles.forEach(toggle => {
					toggle.setAttribute('aria-expanded', 'false');
					const menuItem = toggle.closest('.pure-menu__item');
					if (menuItem) {
						menuItem.setAttribute('aria-expanded', 'false');
					}
				});
			}
		});
	}

	/**
	 * Handle window resize
	 */
	function handleResize() {
		let resizeTimer;
		window.addEventListener('resize', function() {
			clearTimeout(resizeTimer);
			resizeTimer = setTimeout(function() {
				// Reset all aria-expanded on desktop
				if (window.innerWidth > 1024) {
					const toggles = document.querySelectorAll('.pure-menu__toggle');
					toggles.forEach(toggle => {
						toggle.setAttribute('aria-expanded', 'false');
					});
					
					const menuItems = document.querySelectorAll('.pure-menu__item--has-children');
					menuItems.forEach(item => {
						item.removeAttribute('aria-expanded');
					});
				}
			}, 250);
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
