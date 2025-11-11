# Alpine.js in Pure Theme

Alpine.js is now installed and ready to use in the Pure theme with common components initialized.

## What is Alpine.js?

Alpine.js is a lightweight JavaScript framework that gives you the reactive and declarative nature of big frameworks like Vue or React at a much lower cost. It's perfect for adding interactivity to your WordPress theme without the overhead of larger frameworks.

## Installation

Alpine.js is installed via npm and automatically copied to `assets/js/` during build:

```bash
npm install alpinejs
npm run build
```

The script is loaded in the header with `defer` attribute for optimal performance. The theme includes `alpine-init.js` with pre-built components and utilities.

## Common Components (Pre-initialized)

The theme includes ready-to-use Alpine.js components in `assets/js/alpine-init.js`:

### Mobile Menu
```html
<div x-data="mobileMenu()">
    <button @click="toggle()">
        <i data-lucide="menu"></i>
    </button>
    
    <nav x-show="open" 
         x-transition
         @click.outside="close()">
        <?php wp_nav_menu(); ?>
    </nav>
</div>
```

### Search
```html
<div x-data="search()">
    <button @click="toggle()">
        <i data-lucide="search"></i>
    </button>
    
    <form x-show="open" 
          x-transition
          @submit="submit()"
          method="get" 
          action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" 
               name="s" 
               x-model="query"
               x-ref="searchInput"
               @keydown.escape="close()">
    </form>
</div>
```

### Dropdown
```html
<div x-data="dropdown()">
    <button @click="toggle()">
        Options <i data-lucide="chevron-down"></i>
    </button>
    
    <div x-show="open" 
         x-transition
         @click.outside="close()">
        <a href="#">Option 1</a>
        <a href="#">Option 2</a>
    </div>
</div>
```

### Tabs
```html
<div x-data="tabs(1)">
    <div class="tabs">
        <button @click="setTab(1)" :class="{ 'active': isActive(1) }">Tab 1</button>
        <button @click="setTab(2)" :class="{ 'active': isActive(2) }">Tab 2</button>
        <button @click="setTab(3)" :class="{ 'active': isActive(3) }">Tab 3</button>
    </div>
    
    <div x-show="isActive(1)" x-transition>Content 1</div>
    <div x-show="isActive(2)" x-transition>Content 2</div>
    <div x-show="isActive(3)" x-transition>Content 3</div>
</div>
```

### Accordion
```html
<div x-data="accordion()">
    <button @click="toggle()">
        <span>Accordion Title</span>
        <i :data-lucide="open ? 'chevron-up' : 'chevron-down'"></i>
    </button>
    
    <div x-show="open" x-transition>
        <p>Accordion content goes here...</p>
    </div>
</div>
```

### Modal
```html
<div x-data="modal()">
    <button @click="show()">Open Modal</button>
    
    <div x-show="open" 
         x-transition
         @click.self="hide()"
         class="modal-overlay">
        <div class="modal-content">
            <button @click="hide()">
                <i data-lucide="x"></i>
            </button>
            <h2>Modal Title</h2>
            <p>Modal content...</p>
        </div>
    </div>
</div>
```

### Sticky Header
```html
<header x-data="stickyHeader()"
        :class="{ 
            'header-sticky': !atTop, 
            'header-scrolled': scrolled 
        }">
    <!-- Header content -->
</header>
```

### Scroll to Top
```html
<div x-data="scrollToTop()">
    <button x-show="show" 
            x-transition
            @click="scrollToTop()">
        <i data-lucide="arrow-up"></i>
    </button>
</div>
```

### Generic Toggle
```html
<div x-data="toggle(false)">
    <button @click="toggle()">Toggle</button>
    <div x-show="open">Content</div>
</div>
```

## Global Store

Access theme state globally using Alpine Store:

```html
<!-- Anywhere in your templates -->
<div x-data>
    <button @click="$store.theme.toggleMobileMenu()">Menu</button>
    <div x-show="$store.theme.mobileMenuOpen">
        Navigation...
    </div>
</div>
```

Store properties:
- `$store.theme.mobileMenuOpen` - Mobile menu state
- `$store.theme.searchOpen` - Search state
- `$store.theme.toggleMobileMenu()` - Toggle mobile menu
- `$store.theme.closeMobileMenu()` - Close mobile menu
- `$store.theme.toggleSearch()` - Toggle search
- `$store.theme.closeSearch()` - Close search

## Magic Helpers

### Clipboard
```html
<button @click="$clipboard('Text to copy')">
    Copy to Clipboard
</button>
```

### Reinitialize Lucide Icons
```html
<div x-data @change="$reinitLucide()">
    <!-- Icons will reinitialize after changes -->
</div>
```

## Basic Usage

### Toggle Visibility

```html
<div x-data="{ open: false }">
    <button @click="open = !open">Toggle</button>
    <div x-show="open">
        This content toggles!
    </div>
</div>
```

### Mobile Menu Example

```html
<div x-data="{ mobileMenuOpen: false }">
    <button @click="mobileMenuOpen = !mobileMenuOpen">
        <i data-lucide="menu"></i>
    </button>
    
    <nav x-show="mobileMenuOpen" @click.outside="mobileMenuOpen = false">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
</div>
```

### Dropdown Example

```html
<div x-data="{ dropdownOpen: false }">
    <button @click="dropdownOpen = !dropdownOpen">
        Options
        <i data-lucide="chevron-down"></i>
    </button>
    
    <div x-show="dropdownOpen" 
         x-transition
         @click.outside="dropdownOpen = false">
        <a href="#">Option 1</a>
        <a href="#">Option 2</a>
        <a href="#">Option 3</a>
    </div>
</div>
```

### Search Form with Alpine

```html
<div x-data="{ searchOpen: false }">
    <button @click="searchOpen = !searchOpen">
        <i data-lucide="search"></i>
    </button>
    
    <form x-show="searchOpen" 
          x-transition
          method="get" 
          action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" 
               name="s" 
               x-ref="searchInput"
               @keydown.escape="searchOpen = false"
               placeholder="Search...">
    </form>
</div>
```

### Tabs Component

```html
<div x-data="{ activeTab: 'tab1' }">
    <div class="tabs">
        <button @click="activeTab = 'tab1'" 
                :class="{ 'active': activeTab === 'tab1' }">
            Tab 1
        </button>
        <button @click="activeTab = 'tab2'" 
                :class="{ 'active': activeTab === 'tab2' }">
            Tab 2
        </button>
        <button @click="activeTab = 'tab3'" 
                :class="{ 'active': activeTab === 'tab3' }">
            Tab 3
        </button>
    </div>
    
    <div x-show="activeTab === 'tab1'" x-transition>Content 1</div>
    <div x-show="activeTab === 'tab2'" x-transition>Content 2</div>
    <div x-show="activeTab === 'tab3'" x-transition>Content 3</div>
</div>
```

## Common Directives

- `x-data`: Define component state
- `x-show`: Toggle element visibility (keeps in DOM)
- `x-if`: Conditionally render element (removes from DOM)
- `x-on` or `@`: Listen to events (`@click`, `@keydown`, etc.)
- `x-bind` or `:`: Bind attributes (`:class`, `:href`, etc.)
- `x-model`: Two-way data binding for inputs
- `x-text`: Set element's text content
- `x-html`: Set element's HTML content
- `x-transition`: Add smooth transitions
- `x-cloak`: Hide element until Alpine initializes

## Useful Modifiers

- `@click.outside`: Trigger when clicking outside element
- `@keydown.escape`: Trigger on Escape key
- `@keydown.enter`: Trigger on Enter key
- `.prevent`: Prevent default behavior
- `.stop`: Stop event propagation
- `.once`: Only trigger once

## Integration with Lucide Icons

Alpine works great with Lucide icons already in the theme:

```html
<div x-data="{ liked: false }">
    <button @click="liked = !liked">
        <i :data-lucide="liked ? 'heart-filled' : 'heart'"></i>
    </button>
</div>
```

Remember to reinitialize Lucide after Alpine changes the DOM:
```javascript
// In your custom JS if needed
Alpine.magic('reinitLucide', () => {
    return () => {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    };
});
```

## Performance Tips

1. Use `x-show` for frequently toggled elements
2. Use `x-if` for elements that are rarely shown
3. Keep components small and focused
4. Use `x-cloak` to prevent flash of unstyled content
5. Alpine is loaded with `defer` for optimal performance

## Resources

- [Alpine.js Documentation](https://alpinejs.dev/)
- [Alpine.js Examples](https://alpinejs.dev/examples)
- [Alpine.js Cheat Sheet](https://alpinejs.dev/directives)

## Styling Alpine Components

Add Alpine-specific styles to your `assets/scss/theme.scss`:

```scss
// Hide elements with x-cloak until Alpine loads
[x-cloak] {
    display: none !important;
}

// Smooth transitions
.alpine-transition {
    transition: all 0.3s ease;
}
```

## Example: Sticky Header with Alpine

```php
<header x-data="{ 
    atTop: true,
    scrolled: false 
}" 
@scroll.window="
    atTop = (window.pageYOffset <= 50);
    scrolled = (window.pageYOffset > 100)
"
:class="{ 
    'header-sticky': !atTop, 
    'header-scrolled': scrolled 
}">
    <!-- Header content -->
</header>
```

This gives you full control over your theme's interactivity while keeping the footprint small!
