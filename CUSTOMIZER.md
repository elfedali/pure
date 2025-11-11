# Customizer Implementation Guide

All customizer settings have been fully implemented throughout the Pure theme. Here's what works:

## 🎨 Colors
- **Primary Color**: Applied to links, buttons, hover states, icons
- **Secondary Color**: Applied to secondary text elements
- **Link Color**: Custom color for all links

## 📝 Typography
- **Font Family**: Changes entire site font (System, Serif, Sans-Serif, Monospace)
- **Base Font Size**: Controls base text size (12-24px)

## 📐 Layout Settings
- **Container Max Width**: Controls content width (960-1920px)
- **Sidebar Position**: 
  - Right (default)
  - Left (switches order)
  - None (hides sidebar, full-width content)
- **Sticky Header**: Makes header stick to top on scroll

## 🏠 Header Settings
- **Display Site Title**: Show/hide site title
- **Display Site Description**: Show/hide site tagline

## 👣 Footer Settings
- **Footer Copyright Text**: Custom HTML footer text
  - Leave empty for default copyright
  - HTML allowed for links/formatting
- **Display Theme Credits**: Show/hide "Powered by WordPress"
- **Social Media Links**: Display social icons with links
  - Facebook
  - Twitter (X)
  - Instagram
  - LinkedIn
  - YouTube
  - GitHub

## ⚡ Performance
- **Lazy Load Images**: Adds native lazy loading to images
- **Minify HTML Output**: Removes whitespace from HTML (advanced)

## 🔒 Security Settings
- **CSS Integrity Check**: Adds SRI hash to CSS file
- **Remove WordPress Version**: Hides WP version from meta tags

## 📰 Blog & Archives
- **Excerpt Length**: Custom word count (10-100)
- **Read More Button Text**: Custom text for excerpt links
- **Show Post Date**: Display/hide date with calendar icon
- **Show Post Author**: Display/hide author with user icon
- **Show Post Categories**: Display/hide categories with folder icon

## Where Settings Are Applied

### Header (`template-parts/header/site-branding.php`)
- Site title visibility
- Site description visibility

### Footer (`footer.php`)
- Custom copyright text
- Theme credits toggle
- Social media icons

### Post Meta (`inc/template-tags.php`)
- Post date with icon
- Post author with icon
- Post categories with icon
- Post tags with icon
- Excerpt length
- Read more text

### Dynamic CSS (`inc/customizer-css.php`)
- All color overrides
- Font family
- Font size
- Container width
- Sidebar positioning
- Sticky header

### Security (`inc/security.php`)
- WordPress version removal
- HTML minification

### Performance (`inc/template-tags.php`, `inc/enqueue.php`)
- Image lazy loading
- CSS integrity

## Accessing in Code

```php
// Get any customizer value
$value = get_theme_mod( 'setting_name', 'default_value' );

// Examples:
$primary_color = get_theme_mod( 'pure_primary_color', '#0078e7' );
$show_title = get_theme_mod( 'pure_show_site_title', true );
$footer_text = get_theme_mod( 'pure_footer_text', '' );
$facebook_url = get_theme_mod( 'pure_social_facebook', '' );
```

## Icon Integration

All post meta now includes Lucide icons:
- 📅 Calendar icon for date
- 👤 User icon for author
- 📁 Folder icon for categories
- 🏷️ Tag icon for tags
- ➡️ Arrow icon for read more

## Testing Checklist

✅ Change primary color → Check links, buttons, icons
✅ Toggle site title/description → Verify header
✅ Add social links → Check footer icons
✅ Modify excerpt length → View archive pages
✅ Enable sticky header → Scroll page
✅ Change sidebar position → View blog layout
✅ Add custom footer text → Check footer
✅ Toggle post meta → View single posts
✅ Enable lazy loading → Inspect image tags
✅ Enable CSS integrity → Check source code

## Live Preview

All settings use `refresh` transport, so changes appear after clicking "Publish" in the Customizer.

## CSS Variables Override

Customizer dynamically injects CSS into `<head>` that overrides the default `:root` variables, allowing real-time color/layout changes without recompiling SCSS.
