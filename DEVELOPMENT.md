# Development Mode

The Pure theme includes a powerful Development Mode that helps you debug and develop your theme customizations.

## Features

### Development Mode Settings
Located in **Appearance > Customize > Development Mode**

#### 1. Enable Development Mode
- **Default:** Disabled
- **Purpose:** Switches from minified CSS (`theme.min.css`) to unminified CSS (`theme.css`) with source maps
- **Benefits:**
  - Easier debugging with readable CSS
  - Source maps for tracing styles back to SCSS files
  - Automatic cache busting (uses `time()` instead of version number)
- **Usage:** Enable during development, disable for production

#### 2. Enable Debug Mode
- **Default:** Disabled
- **Purpose:** Enables comprehensive debugging features
- **Features:**
  - Enables PHP error reporting
  - Adds detailed HTML comments with:
    - Theme version
    - WordPress version
    - PHP version
    - Current template file
    - Post type and ID (for singular pages)
    - Taxonomy and term info (for archives)
    - Page type detection
    - Peak memory usage
  - Adds debug indicator to Admin Bar (for logged-in admins)
- **Warning:** ⚠️ **Never enable in production!** This can expose sensitive information.

#### 3. Show Template Information
- **Default:** Disabled
- **Purpose:** Shows the current template file in HTML comments
- **Output:** `<!-- Template: /page-templates/template-ui-docs.php -->`
- **Usage:** Helpful when you want to know which template file is rendering

## Admin Bar Indicator

When Development or Debug mode is enabled, logged-in administrators will see a red indicator in the Admin Bar:

```
🔧 DEV + DEBUG
```

Clicking this indicator:
- Opens the Customizer directly to Development Mode section
- Shows additional details in dropdown:
  - CSS file in use (theme.css or theme.min.css)
  - Current memory usage and peak
  - Number of database queries

## CSS Mode Switching

### Development Mode (ON)
```php
// Loads: assets/css/theme.css
// Version: time() (cache busting)
// Features: Unminified, with source maps
```

### Production Mode (OFF - Default)
```php
// Loads: assets/css/theme.min.css
// Version: PURE_VERSION constant
// Features: Minified, optimized, cached
```

## Debug Output Example

With Debug Mode enabled, your HTML will include:

```html
<!-- DEBUG MODE ENABLED -->
<!-- Theme Version: 1.0.0 -->
<!-- WordPress Version: 6.4.2 -->
<!-- PHP Version: 8.2.0 -->
<!-- Current Template: page-templates/template-ui-docs.php -->
<!-- Post Type: page -->
<!-- Post ID: 42 -->
<!-- Page Type: Page -->
<!-- Peak Memory Usage: 25.5 MB -->
<!-- END DEBUG INFO -->
```

## Best Practices

### Development Workflow

1. **Enable Development Mode** when working on styles:
   ```
   Customize > Development Mode > Enable Development Mode ✓
   ```
   - Work with `theme.css` (unminified)
   - Use browser DevTools with source maps
   - Changes reflect immediately (cache busting)

2. **Enable Debug Mode** when troubleshooting:
   ```
   Customize > Development Mode > Enable Debug Mode ✓
   ```
   - See template files being used
   - Check memory usage
   - Monitor database queries
   - View detailed page information

3. **Before Going Live** - Disable all development features:
   ```
   Customize > Development Mode:
   - Enable Development Mode ✗
   - Enable Debug Mode ✗
   - Show Template Information ✗
   ```
   - Uses optimized `theme.min.css`
   - No debug output in HTML
   - Better performance and security

### Security Notes

⚠️ **Critical:** Development/Debug modes expose:
- PHP version information
- File paths and template names
- Memory usage patterns
- WordPress version
- System configuration

**NEVER enable these in production environments!**

## Integration with Build System

The theme's build system creates both versions:

```bash
# Build both CSS files
npm run build

# Watch for SCSS changes (builds theme.css)
npm run watch

# Build minified CSS (builds theme.min.css)
npm run build:css:min
```

Development Mode automatically switches between these files based on the customizer setting.

## Admin Bar Styling

The dev mode indicator is highly visible:
- Red background (#ff6b6b)
- White text
- Bold font
- Hover effect (#ff5252)
- Cannot be missed!

## Code Reference

### Functions
- `pure_debug_mode_init()` - Initializes debug mode settings
- `pure_add_debug_admin_bar()` - Adds admin bar indicator
- `pure_dev_mode_admin_bar_styles()` - Styles the indicator

### Template Tags
Debug output is automatically added in `footer.php` before `wp_footer()`.

### Customizer Settings
- `pure_dev_mode` - Boolean for development mode
- `pure_debug_mode` - Boolean for debug mode
- `pure_show_template_info` - Boolean for template info

## Example Usage

### Scenario: Debugging a Template Issue

1. Enable Debug Mode in Customizer
2. Visit the problematic page
3. View page source (Ctrl+U / Cmd+Option+U)
4. Check HTML comments at the bottom:
   ```html
   <!-- Current Template: single.php -->
   <!-- Post Type: post -->
   <!-- Post ID: 123 -->
   ```
5. Now you know exactly which file to edit!

### Scenario: CSS Development

1. Enable Development Mode
2. Run `npm run watch` in terminal
3. Edit SCSS files in `assets/scss/`
4. Changes auto-compile to `theme.css`
5. Refresh browser (cache busted automatically)
6. Use DevTools source maps to trace styles
7. When done, run `npm run build` and disable Dev Mode

## Troubleshooting

**Problem:** CSS changes not showing
- **Solution:** Enable Development Mode for cache busting

**Problem:** Can't find which template is rendering
- **Solution:** Enable "Show Template Information"

**Problem:** Need to see database query count
- **Solution:** Enable Debug Mode, check Admin Bar indicator dropdown

**Problem:** Red indicator still showing after disabling
- **Solution:** Hard refresh browser (Ctrl+Shift+R / Cmd+Shift+R)
