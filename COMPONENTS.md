# Pure Theme - Common Components

This starter theme includes ready-to-use, customizable components built with SCSS and CSS variables.

## 🎨 Customization

All components use CSS variables from `_variables.scss`. Customize your theme by modifying:

```scss
:root {
    // Brand colors
    --primary-color: #0078e7;
    --secondary-color: #666;
    
    // State colors
    --success-color: #28a745;
    --info-color: #17a2b8;
    --warning-color: #ffc107;
    --danger-color: #dc3545;
    
    // Text colors
    --text-color: #333;
    --text-light: #666;
    --text-muted: #999;
    
    // Backgrounds
    --background-color: #fff;
    --background-light: #f9f9f9;
    --background-dark: #f5f5f5;
    
    // Borders
    --border-color: #e5e5e5;
    
    // Shadows
    --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.1);
    --shadow-md: 0 4px 12px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 8px 24px rgba(0, 0, 0, 0.15);
    
    // Spacing
    --spacing-xs: 0.5em;
    --spacing-sm: 1em;
    --spacing-md: 1.5em;
    --spacing-lg: 2em;
    --spacing-xl: 3em;
    
    // Typography
    --font-family-base: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto;
    --font-size-base: 16px;
    --line-height-base: 1.6;
    
    // Border radius
    --border-radius-sm: 3px;
    --border-radius-md: 5px;
    
    // Transitions
    --transition-speed: 0.2s;
    
    // Focus states
    --focus-ring: rgba(0, 120, 231, 0.25);
    --focus-border: var(--primary-color);
}
```

## 🔘 Buttons (`_buttons.scss`)

### Basic Usage
```html
<button class="button">Primary Button</button>
<a href="#" class="btn">Link Button</a>
```

### Variants
```html
<button class="button-secondary">Secondary</button>
<button class="button-outline">Outline</button>
<button class="button-ghost">Ghost</button>
<button class="button-light">Light</button>
```

### Sizes
```html
<button class="button button-small">Small</button>
<button class="button">Default</button>
<button class="button button-large">Large</button>
<button class="button button-block">Full Width</button>
```

### With Icons
```html
<button class="button button-icon">
    <i data-lucide="plus"></i>
    Add Item
</button>

<button class="button-icon-only">
    <i data-lucide="search"></i>
</button>
```

### Button Group
```html
<div class="button-group">
    <button class="button">Left</button>
    <button class="button">Center</button>
    <button class="button">Right</button>
</div>
```

## 📝 Forms (`_forms.scss`)

### Basic Form
```html
<form>
    <div class="form-group">
        <label for="name" class="label-required">Name</label>
        <input type="text" id="name" class="form-control" placeholder="Enter name">
        <small class="form-text">Help text goes here</small>
    </div>
    
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" class="form-control">
    </div>
    
    <button type="submit" class="button">Submit</button>
</form>
```

### Form Sizes
```html
<input type="text" class="form-control form-control-sm">
<input type="text" class="form-control">
<input type="text" class="form-control form-control-lg">
```

### Input Group
```html
<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">@</span>
    </div>
    <input type="text" class="form-control" placeholder="Username">
</div>

<div class="input-group">
    <input type="text" class="form-control" placeholder="Search...">
    <div class="input-group-append">
        <button class="button">Go</button>
    </div>
</div>
```

### Validation States
```html
<input type="text" class="form-control is-valid">
<div class="valid-feedback">Looks good!</div>

<input type="text" class="form-control is-invalid">
<div class="invalid-feedback">Please enter a valid value.</div>
```

### Checkboxes & Radios
```html
<div class="form-check">
    <input type="checkbox" id="check1">
    <label for="check1">Remember me</label>
</div>
```

### Search Form
```html
<form class="search-form">
    <input type="search" class="form-control search-field" placeholder="Search...">
    <button type="submit" class="button search-submit">
        <i data-lucide="search"></i>
    </button>
</form>
```

### Inline Form
```html
<form class="form-inline">
    <input type="email" class="form-control" placeholder="Email">
    <button type="submit" class="button">Subscribe</button>
</form>
```

## 🃏 Cards (`_cards.scss`)

### Basic Card
```html
<div class="card">
    <div class="card-body">
        <h3 class="card-title">Card Title</h3>
        <p class="card-text">Card content goes here...</p>
        <a href="#" class="card-link">Read More</a>
    </div>
</div>
```

### Card with Header & Footer
```html
<div class="card">
    <div class="card-header">
        <h4>Featured Post</h4>
    </div>
    <div class="card-body">
        <p class="card-text">Post content...</p>
    </div>
    <div class="card-footer">
        <small>Posted 2 hours ago</small>
    </div>
</div>
```

### Card with Image
```html
<div class="card">
    <img src="image.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h3 class="card-title">Image Card</h3>
        <p class="card-text">Description...</p>
    </div>
</div>
```

### Card Variants
```html
<div class="card card-outline">Outline Card</div>
<div class="card card-flat">Flat Card</div>
<div class="card card-elevated">Elevated Card</div>
```

### Image Overlay Card
```html
<div class="card card-overlay">
    <img src="hero.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
        <h2 class="card-title">Hero Title</h2>
        <p class="card-text">Overlay content</p>
    </div>
</div>
```

### Horizontal Card
```html
<div class="card card-horizontal">
    <img src="image.jpg" class="card-img" alt="...">
    <div class="card-body">
        <h3 class="card-title">Horizontal Card</h3>
        <p class="card-text">Content...</p>
    </div>
</div>
```

### Card Meta (for WordPress posts)
```html
<div class="card">
    <div class="card-body">
        <div class="card-meta">
            <span class="meta-item">
                <i data-lucide="calendar"></i>
                Nov 11, 2025
            </span>
            <span class="meta-item">
                <i data-lucide="user"></i>
                John Doe
            </span>
            <span class="meta-item">
                <i data-lucide="folder"></i>
                <a href="#">News</a>
            </span>
        </div>
        <h3 class="card-title">Post Title</h3>
        <p class="card-text">Excerpt...</p>
        <div class="card-actions">
            <a href="#" class="button">Read More</a>
        </div>
    </div>
</div>
```

### Card Grid
```html
<div class="card-grid">
    <div class="card">...</div>
    <div class="card">...</div>
    <div class="card">...</div>
</div>
```

## 🧩 Common Components (`_components.scss`)

### Badges
```html
<span class="badge">New</span>
<span class="badge badge-secondary">Sale</span>
<span class="badge badge-light">Popular</span>
<span class="badge badge-pill">99+</span>
```

### Alerts
```html
<div class="alert alert-info">
    <strong class="alert-heading">Info!</strong>
    This is an info message.
</div>

<div class="alert alert-success">Success message</div>
<div class="alert alert-warning">Warning message</div>
<div class="alert alert-error">Error message</div>
```

### Alert with Close Button
```html
<div class="alert alert-info" x-data="{ show: true }" x-show="show">
    Information message
    <button @click="show = false" class="alert-close">×</button>
</div>
```

### Breadcrumbs
```html
<nav class="breadcrumbs">
    <a href="/">Home</a>
    <span class="separator">/</span>
    <a href="/blog">Blog</a>
    <span class="separator">/</span>
    <span class="current">Post Title</span>
</nav>
```

### Pagination
```html
<ul class="pagination">
    <li class="page-item disabled">
        <span>Previous</span>
    </li>
    <li class="page-item">
        <a href="#">1</a>
    </li>
    <li class="page-item current">
        <span>2</span>
    </li>
    <li class="page-item">
        <a href="#">3</a>
    </li>
    <li class="page-item">
        <a href="#">Next</a>
    </li>
</ul>
```

### Dividers
```html
<div class="divider"></div>

<div class="divider divider-text">or</div>
```

### Avatars
```html
<img src="avatar.jpg" class="avatar" alt="User">
<img src="avatar.jpg" class="avatar avatar-sm" alt="User">
<img src="avatar.jpg" class="avatar avatar-lg" alt="User">
<img src="avatar.jpg" class="avatar avatar-xl" alt="User">
```

### Tags/Chips
```html
<span class="tag">WordPress</span>
<span class="tag">PHP</span>

<a href="#" class="tag">
    JavaScript
    <span class="tag-close">×</span>
</a>
```

### List Group
```html
<div class="list-group">
    <div class="list-group-item">Item 1</div>
    <div class="list-group-item active">Item 2 (Active)</div>
    <div class="list-group-item">Item 3</div>
</div>

<!-- With links -->
<div class="list-group">
    <a href="#" class="list-group-item">Link 1</a>
    <a href="#" class="list-group-item">Link 2</a>
</div>
```

### Progress Bar
```html
<div class="progress">
    <div class="progress-bar" style="width: 75%">75%</div>
</div>
```

### Spinner/Loader
```html
<div class="spinner"></div>
<div class="spinner spinner-sm"></div>
<div class="spinner spinner-lg"></div>
```

### Tooltips
```html
<span class="tooltip tooltip-top">
    Hover me
    <span class="tooltip-text">Tooltip text</span>
</span>

<span class="tooltip tooltip-bottom">
    Hover me
    <span class="tooltip-text">Bottom tooltip</span>
</span>
```

## 🎯 WordPress Integration Examples

### Post Card
```php
<div class="card">
    <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'large', array( 'class' => 'card-img-top' ) ); ?>
        </a>
    <?php endif; ?>
    
    <div class="card-body">
        <div class="card-meta">
            <span class="meta-item">
                <i data-lucide="calendar"></i>
                <?php echo get_the_date(); ?>
            </span>
            <span class="meta-item">
                <i data-lucide="user"></i>
                <?php the_author(); ?>
            </span>
        </div>
        
        <h2 class="card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        
        <p class="card-text"><?php the_excerpt(); ?></p>
        
        <div class="card-actions">
            <a href="<?php the_permalink(); ?>" class="button">Read More</a>
        </div>
    </div>
</div>
```

### Comment Form
```php
<?php
comment_form( array(
    'class_submit' => 'button',
    'class_form' => 'comment-form',
) );
?>
```

### Search Form
```php
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="form-control search-field" placeholder="Search..." 
           value="<?php echo get_search_query(); ?>" name="s">
    <button type="submit" class="button search-submit">
        <i data-lucide="search"></i>
    </button>
</form>
```

## 🛠️ Build Process

After modifying SCSS files:

```bash
npm run build        # Build CSS + JS
npm run build:css    # Build CSS only
npm run watch        # Watch for changes
npm run dev          # Development mode
```

## �️ Utility Classes (`_utilities.scss`)

Quick styling with utility classes:

### Display & Flex
```html
<div class="d-flex justify-between align-center gap-md">
    <div class="flex-1">Content</div>
    <button>Action</button>
</div>
```

### Spacing
```html
<div class="mt-lg mb-md px-sm py-md">
    <!-- mt-lg = margin-top: var(--spacing-lg) -->
    <!-- px-sm = padding-left and padding-right: var(--spacing-sm) -->
</div>
```

**Available spacing:** `xs`, `sm`, `md`, `lg`, `xl`  
**Prefixes:** `m`/`p` (all), `mt`/`pt` (top), `mb`/`pb` (bottom), `ml`/`pl` (left), `mr`/`pr` (right), `mx`/`px` (horizontal), `my`/`py` (vertical)

### Text Utilities
```html
<p class="text-center text-bold text-primary">Centered bold primary text</p>
<p class="text-muted text-small text-uppercase">Muted small uppercase</p>
<p class="text-truncate">This text will be truncated with ellipsis...</p>
```

### Colors
```html
<span class="text-success">Success text</span>
<span class="text-danger">Danger text</span>
<div class="bg-primary p-md">Primary background</div>
<div class="bg-light p-md">Light background</div>
```

### Borders & Shadows
```html
<div class="border rounded shadow p-md">
    Bordered, rounded, shadowed box
</div>
<div class="border-primary rounded-lg shadow-lg p-lg">
    Large shadow with primary border
</div>
```

### Width & Height
```html
<div class="w-100">Full width</div>
<div class="w-50">50% width</div>
<div class="h-100">Full height</div>
```

### Other Utilities
```html
<button class="cursor-pointer opacity-75">Button</button>
<div class="position-relative z-10">Relative positioned</div>
<ul class="list-none">No bullets</ul>
```

## �📁 File Structure

```
assets/scss/
├── _variables.scss    # Theme variables (customize here!)
├── _buttons.scss      # Button components
├── _forms.scss        # Form components
├── _cards.scss        # Card components
├── _components.scss   # Other UI components
├── _utilities.scss    # Utility classes
└── theme.scss         # Main file (imports all)
```

## 🎨 Quick Customization

Want to change colors? Edit `_variables.scss`:

```scss
:root {
    --primary-color: #ff6b6b;        // Your brand color
    --secondary-color: #4ecdc4;      // Accent color
    --text-color: #2c3e50;           // Text color
    --border-radius-md: 12px;        // Rounded corners
    --spacing-md: 2em;               // Spacing scale
}
```

Then run `npm run build` and all components update automatically! 🚀

## 💡 Pro Tips

1. **Consistent spacing**: Use `var(--spacing-sm)`, `var(--spacing-md)`, etc.
2. **Color adjustments**: All components use theme colors
3. **Alpine.js integration**: Components work great with Alpine directives
4. **Flexbox Grid**: Use with flexboxgrid classes for layouts
5. **Customizer**: Colors can be adjusted via WordPress Customizer

## 🔗 Resources

- [Flexbox Grid Docs](http://flexboxgrid.com/)
- [Alpine.js Docs](https://alpinejs.dev/)
- [Lucide Icons](https://lucide.dev/)

---

**This is your starter theme foundation!** Mix and match these components to build any WordPress project. All styles are production-ready and accessible. 🎉
