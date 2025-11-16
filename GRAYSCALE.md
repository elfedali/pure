# Gray Scale System

The Pure theme uses a comprehensive gray scale color palette for consistent design across all components.

## Gray Scale Palette

The theme includes 10 levels of gray, from almost white to almost black:

```scss
--gray-50:  #fafafa  // Almost white
--gray-100: #f5f5f5  // Very light gray
--gray-200: #e5e5e5  // Light gray
--gray-300: #d4d4d4  // Medium-light gray
--gray-400: #a3a3a3  // Medium gray
--gray-500: #737373  // True gray
--gray-600: #525252  // Medium-dark gray
--gray-700: #404040  // Dark gray
--gray-800: #262626  // Very dark gray
--gray-900: #171717  // Almost black
```

## Semantic Usage

### Text Colors

The theme maps gray scale to semantic text colors:

```scss
--text-color:       var(--gray-900)  // Main text - almost black
--text-base:        var(--gray-800)  // Base text - very dark
--text-light:       var(--gray-600)  // Light text - medium-dark
--text-muted:       var(--gray-500)  // Muted text - true gray
--text-disabled:    var(--gray-400)  // Disabled text - medium gray
--text-placeholder: var(--gray-400)  // Placeholder text - medium gray
```

#### Usage Examples:

```html
<!-- Main heading -->
<h1 class="text-color">Main Heading</h1>

<!-- Regular text -->
<p class="text-base">Regular paragraph text</p>

<!-- Lighter text -->
<p class="text-light">Lighter supporting text</p>

<!-- Muted text -->
<p class="text-muted">Less important information</p>

<!-- Disabled state -->
<button disabled>
    <span class="text-disabled">Disabled Button</span>
</button>

<!-- Placeholder -->
<input type="text" placeholder="Enter your name">
<!-- Placeholder automatically uses --text-placeholder -->
```

### Border Colors

Gray scale is used for borders throughout components:

```scss
--border-color:  var(--gray-200)  // Default border - light gray
--border-light:  var(--gray-100)  // Lighter border
--border-medium: var(--gray-300)  // Medium border
--border-dark:   var(--gray-400)  // Dark border
```

#### Usage Examples:

```html
<!-- Default border -->
<div class="card">Card with default border</div>

<!-- Light border -->
<div class="card border-light">Card with light border</div>

<!-- Medium border -->
<div class="card border-medium">Card with medium border</div>

<!-- Dark border -->
<div class="card border-dark">Card with dark border</div>
```

### Background Colors

Background variations using gray scale:

```scss
--background-color: #fff              // Pure white
--background-light: var(--gray-50)    // Almost white
--background-gray:  var(--gray-100)   // Very light gray
--background-dark:  var(--gray-200)   // Light gray
```

#### Usage Examples:

```html
<!-- White background (default) -->
<div class="bg-white">White background</div>

<!-- Light background -->
<div class="bg-light">Almost white background</div>

<!-- Gray background -->
<div class="bg-gray">Very light gray background</div>

<!-- Dark background -->
<div class="bg-dark">Light gray background</div>
```

## Component Integration

### Forms

Forms use gray scale for borders, placeholders, and disabled states:

```scss
// Input borders
border: 1px solid var(--border-color);  // gray-200

// Placeholder text
&::placeholder {
    color: var(--text-placeholder);  // gray-400
}

// Disabled state
&:disabled {
    background-color: var(--background-gray);  // gray-100
    color: var(--text-disabled);              // gray-400
    border-color: var(--border-light);        // gray-100
}
```

### Cards

Cards use gray scale for headers, footers, and meta information:

```scss
// Card header/footer background
background-color: var(--background-light);  // gray-50

// Card subtitle
color: var(--text-muted);  // gray-500

// Card meta (date, author, etc.)
color: var(--text-muted);  // gray-500
```

### Breadcrumbs

Breadcrumbs use gray for separators:

```scss
.separator {
    color: var(--text-muted);  // gray-500
}
```

## Utility Classes

### Text Color Utilities

Apply gray scale colors directly:

```html
<p class="text-gray-50">Almost white text</p>
<p class="text-gray-100">Very light gray text</p>
<p class="text-gray-200">Light gray text</p>
<p class="text-gray-300">Medium-light gray text</p>
<p class="text-gray-400">Medium gray text</p>
<p class="text-gray-500">True gray text</p>
<p class="text-gray-600">Medium-dark gray text</p>
<p class="text-gray-700">Dark gray text</p>
<p class="text-gray-800">Very dark gray text</p>
<p class="text-gray-900">Almost black text</p>

<!-- Semantic utilities -->
<p class="text-base">Base text color</p>
<p class="text-muted">Muted text color</p>
<p class="text-disabled">Disabled text color</p>
```

### Background Utilities

```html
<div class="bg-gray-50">Almost white background</div>
<div class="bg-gray-100">Very light gray background</div>
<div class="bg-gray-200">Light gray background</div>
<div class="bg-gray-300">Medium-light gray background</div>
<div class="bg-gray-400">Medium gray background (white text)</div>
<div class="bg-gray-500">True gray background (white text)</div>
<div class="bg-gray-600">Medium-dark gray background (white text)</div>
<div class="bg-gray-700">Dark gray background (white text)</div>
<div class="bg-gray-800">Very dark gray background (white text)</div>
<div class="bg-gray-900">Almost black background (white text)</div>
```

**Note:** Backgrounds gray-400 and darker automatically apply white text color.

### Border Utilities

```html
<div class="border border-light">Light border</div>
<div class="border border-medium">Medium border</div>
<div class="border border-dark">Dark border</div>
<div class="border border-gray-100">Gray-100 border</div>
<div class="border border-gray-200">Gray-200 border</div>
<div class="border border-gray-300">Gray-300 border</div>
<div class="border border-gray-400">Gray-400 border</div>
<div class="border border-gray-500">Gray-500 border</div>
```

## Accessibility

The gray scale system follows WCAG 2.1 contrast guidelines:

### Text Contrast

- **gray-900 on white**: AAA (21:1 contrast)
- **gray-800 on white**: AAA (16:1 contrast)
- **gray-700 on white**: AAA (11:1 contrast)
- **gray-600 on white**: AAA (8:1 contrast)
- **gray-500 on white**: AA Large (4.5:1 contrast)
- **gray-400 on white**: AA Large only (3:1 contrast)
- **White on gray-700+**: AAA compliant
- **White on gray-600**: AA compliant
- **White on gray-500**: AA Large only

### Recommendations

- Use **gray-900** or **gray-800** for body text (AAA)
- Use **gray-600** or **gray-700** for secondary text (AAA)
- Use **gray-500** for muted text (AA Large - 14pt+ bold or 18pt+)
- Use **gray-400** only for placeholders or disabled states (not for readable content)
- Never use **gray-100** to **gray-300** for text on white backgrounds

## Customization

To adjust the gray scale, edit `_variables.scss`:

```scss
:root {
    // Adjust gray values
    --gray-50: #fafafa;   // Make lighter/darker
    --gray-100: #f5f5f5;
    // ... etc
    
    // Semantic colors automatically update
    --text-muted: var(--gray-500);
    --border-color: var(--gray-200);
}
```

All components using these semantic variables will automatically reflect your changes.

## Examples in Context

### Form with Gray Scale

```html
<form class="form-group">
    <label class="text-base">Email Address</label>
    <input 
        type="email" 
        placeholder="Enter your email"
        class="form-control"
    >
    <!-- placeholder uses gray-400 -->
    <!-- border uses gray-200 -->
    
    <small class="text-muted">We'll never share your email.</small>
    <!-- uses gray-500 -->
</form>
```

### Card with Gray Scale

```html
<div class="card">
    <div class="card-header">
        <!-- background: gray-50 -->
        <h3 class="card-title">Article Title</h3>
    </div>
    <div class="card-body">
        <p class="card-subtitle">Subtitle in muted gray</p>
        <!-- uses gray-500 -->
        
        <div class="card-meta">
            <!-- uses gray-500 -->
            <span>Published: Nov 11, 2025</span>
            <span>By: John Doe</span>
        </div>
        
        <p class="text-base">Main content text</p>
        <!-- uses gray-800 -->
    </div>
</div>
```

### Disabled Form Field

```html
<input 
    type="text" 
    value="Cannot edit this" 
    disabled
>
<!-- background: gray-100 -->
<!-- text: gray-400 -->
<!-- border: gray-100 -->
```

## Design Tokens

If you're using the theme as a design system, here are the design tokens:

| Token Name | Value | Usage |
|------------|-------|-------|
| gray-50 | #fafafa | Subtle backgrounds, hover states |
| gray-100 | #f5f5f5 | Card headers, disabled backgrounds |
| gray-200 | #e5e5e5 | Default borders, dividers |
| gray-300 | #d4d4d4 | Emphasized borders |
| gray-400 | #a3a3a3 | Placeholders, disabled text |
| gray-500 | #737373 | Muted text, meta information |
| gray-600 | #525252 | Secondary text |
| gray-700 | #404040 | Alternative text |
| gray-800 | #262626 | Base body text |
| gray-900 | #171717 | Primary headings, important text |

## Migration from Previous Version

If you're upgrading from a version without the gray scale system:

### Before:
```scss
--text-light: #666;
--text-muted: #999;
--border-color: #e5e5e5;
```

### After:
```scss
--text-light: var(--gray-600);  // #525252 (darker, better contrast)
--text-muted: var(--gray-500);  // #737373 (better legibility)
--border-color: var(--gray-200); // #e5e5e5 (unchanged)
```

The new system provides:
- Better semantic naming
- Improved accessibility
- More granular control
- Consistent design language
