/**
 * Alpine.js Initialization
 * Common components and utilities for Pure theme
 */

document.addEventListener('alpine:init', () => {
    
    // Global Alpine Store for theme state
    Alpine.store('theme', {
        mobileMenuOpen: false,
        searchOpen: false,
        
        toggleMobileMenu() {
            this.mobileMenuOpen = !this.mobileMenuOpen;
            if (this.mobileMenuOpen) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        },
        
        closeMobileMenu() {
            this.mobileMenuOpen = false;
            document.body.style.overflow = '';
        },
        
        toggleSearch() {
            this.searchOpen = !this.searchOpen;
        },
        
        closeSearch() {
            this.searchOpen = false;
        }
    });
    
    // Mobile Menu Component
    Alpine.data('mobileMenu', () => ({
        open: false,
        
        toggle() {
            this.open = !this.open;
            if (this.open) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        },
        
        close() {
            this.open = false;
            document.body.style.overflow = '';
        }
    }));
    
    // Dropdown Component
    Alpine.data('dropdown', () => ({
        open: false,
        
        toggle() {
            this.open = !this.open;
        },
        
        close() {
            this.open = false;
        }
    }));
    
    // Search Component
    Alpine.data('search', () => ({
        open: false,
        query: '',
        
        toggle() {
            this.open = !this.open;
            if (this.open) {
                this.$nextTick(() => {
                    this.$refs.searchInput?.focus();
                });
            }
        },
        
        close() {
            this.open = false;
            this.query = '';
        },
        
        submit() {
            if (this.query.trim()) {
                // Form will submit naturally
                return true;
            }
            return false;
        }
    }));
    
    // Tabs Component
    Alpine.data('tabs', (defaultTab = 1) => ({
        activeTab: defaultTab,
        
        setTab(tab) {
            this.activeTab = tab;
        },
        
        isActive(tab) {
            return this.activeTab === tab;
        }
    }));
    
    // Accordion Component
    Alpine.data('accordion', (openByDefault = false) => ({
        open: openByDefault,
        
        toggle() {
            this.open = !this.open;
        }
    }));
    
    // Modal Component
    Alpine.data('modal', () => ({
        open: false,
        
        show() {
            this.open = true;
            document.body.style.overflow = 'hidden';
        },
        
        hide() {
            this.open = false;
            document.body.style.overflow = '';
        },
        
        close() {
            this.hide();
        }
    }));
    
    // Sticky Header Component
    Alpine.data('stickyHeader', () => ({
        atTop: true,
        scrolled: false,
        lastScroll: 0,
        
        init() {
            this.handleScroll();
            window.addEventListener('scroll', () => this.handleScroll());
        },
        
        handleScroll() {
            const currentScroll = window.pageYOffset;
            this.atTop = currentScroll <= 50;
            this.scrolled = currentScroll > 100;
            this.lastScroll = currentScroll;
        }
    }));
    
    // Scroll to Top Component
    Alpine.data('scrollToTop', () => ({
        show: false,
        
        init() {
            window.addEventListener('scroll', () => {
                this.show = window.pageYOffset > 300;
            });
        },
        
        scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    }));
    
    // Toggle Component (generic)
    Alpine.data('toggle', (initialState = false) => ({
        open: initialState,
        
        toggle() {
            this.open = !this.open;
        },
        
        show() {
            this.open = true;
        },
        
        hide() {
            this.open = false;
        }
    }));
    
    // Magic helpers
    Alpine.magic('clipboard', () => {
        return (text) => {
            if (navigator.clipboard) {
                navigator.clipboard.writeText(text);
            }
        };
    });
    
    // Reinitialize Lucide icons after Alpine changes DOM
    Alpine.magic('reinitLucide', () => {
        return () => {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        };
    });
    
});

// Reinitialize Lucide icons when Alpine morphs or updates
document.addEventListener('alpine:initialized', () => {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});
