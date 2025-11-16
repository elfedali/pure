# Pure Theme - Mega Menu Implementation

## Overview
The Pure theme now supports a modern mega menu navigation system similar to the Quiksilver design, featuring multi-column dropdowns with category sections.

## Features
- ✅ Multi-column mega menu dropdowns
- ✅ Standard single-column dropdowns
- ✅ Category headers for mega menu sections
- ✅ Full keyboard navigation support
- ✅ Mobile-responsive with toggle buttons
- ✅ ARIA attributes for accessibility
- ✅ Smooth hover animations
- ✅ BEM-style CSS classes

## How to Use

### Setting Up a Mega Menu

1. **Go to WordPress Admin → Appearance → Menus**

2. **Create your menu structure:**
   ```
   MENS (add 'mega-menu' CSS class)
   ├── COLLECTIONS (becomes column header)
   │   ├── New Arrivals
   │   ├── Spring Break
   │   ├── DNA
   │   └── Saturn
   ├── CLOTHING (becomes column header)
   │   ├── Shop All
   │   ├── Tees
   │   ├── Shirts & Polos
   │   └── Shorts & Amphibians
   └── SURF (becomes column header)
       ├── Shop All
       ├── Boardshorts
       └── Wetsuits
   ```

3. **Add 'mega-menu' CSS class to top-level items:**
   - Click on the top-level menu item (e.g., "MENS")
   - Click "Screen Options" at the top and enable "CSS Classes"
   - In the "CSS Classes" field, add: `mega-menu`
   - Save the menu

4. **Structure your columns:**
   - First level children (e.g., "COLLECTIONS", "CLOTHING") become column headers
   - Second level children (e.g., "New Arrivals", "Tees") become clickable links within columns

### Standard Dropdown Menu

For standard dropdown menus (non-mega), simply create a nested menu structure WITHOUT adding the `mega-menu` class:

```
ABOUT
├── Our Story
├── Team
└── Contact
```

## Menu Structure Rules

### Mega Menu
- **Root Item**: Add `mega-menu` CSS class
- **Level 1 Items**: Become category headers (non-clickable)
- **Level 2 Items**: Become clickable links in columns
- **Automatic Layout**: Columns automatically adjust based on content

### Standard Dropdown
- **Root Item**: No special class needed
- **Level 1+ Items**: All clickable links
- **Single Column**: Vertical dropdown

## Styling Customization

### Variables (add to `_variables.scss`)
```scss
// Menu colors
$menu-text-color: #333;
$menu-hover-color: #000;
$menu-bg: #fff;
$menu-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);

// Spacing
$menu-gap: 2rem;
$mega-menu-padding: 3rem 2rem;
$column-gap: 3rem;
```

### Override Styles
You can customize the menu by adding your own styles to override the defaults:

```scss
// In your custom SCSS file
.pure-menu__link {
  font-size: 1rem; // Change font size
  color: your-color;
}

.pure-mega-menu__inner {
  max-width: 1600px; // Change container width
}

.pure-mega-menu__columns {
  grid-template-columns: repeat(5, 1fr); // Force 5 columns
}
```

## Keyboard Navigation

### Desktop
- **Tab**: Navigate through menu items
- **Arrow Left/Right**: Move between top-level items
- **Arrow Down**: Open submenu and focus first item
- **Arrow Up/Down**: Navigate within submenu
- **Escape**: Close submenu and return to parent
- **Enter/Space**: Activate link

### Mobile
- **Tap toggle button**: Expand/collapse submenu
- **Tab**: Navigate through menu items
- **Enter**: Activate link

## Mobile Behavior

- Menu becomes vertical on screens < 1024px
- Toggle buttons appear for expandable sections
- Mega menus stack into single column
- Smooth accordion-style animations

## Accessibility Features

- Full ARIA attribute support
- `role="menubar"` on menu list
- `role="menu"` on submenus
- `role="menuitem"` on links
- `aria-haspopup` and `aria-expanded` on parent items
- Focus visible indicators
- Skip link support
- Screen reader friendly

## Browser Support

- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- iOS Safari (latest)
- Chrome Android (latest)

## Files Modified

```
inc/
  class-pure-main-menu-walker.php  ← Custom walker class
  enqueue.php                       ← Added menu.js enqueue

assets/
  scss/
    _navigation.scss                ← Menu styles
    theme.scss                      ← Import navigation
  js/
    menu.js                         ← Menu interactions

template-parts/
  navigation/
    navigation-primary.php          ← Walker implementation
```

## Troubleshooting

### Mega menu not showing
- Verify `mega-menu` class is added to the top-level menu item
- Check that menu has children items
- Clear browser cache and hard refresh (Cmd+Shift+R)

### Columns not appearing correctly
- Ensure first-level children have their own children
- Try clearing WordPress cache if using a caching plugin

### Mobile menu not working
- Check browser console for JavaScript errors
- Verify `menu.js` is enqueued properly
- Ensure no JavaScript conflicts with other plugins

### Styling issues
- Run `npm run build:css` to recompile styles
- Check for CSS conflicts in browser DevTools
- Verify SCSS imported correctly in `theme.scss`

## Support

For issues or questions, please check:
1. WordPress Admin → Appearance → Menus settings
2. Browser console for JavaScript errors
3. Theme customizer settings

## Future Enhancements

Consider adding:
- Featured images in mega menu
- Promotional banners in mega menu columns
- Custom mega menu widgets
- Animation options via customizer
- More layout variations

---

**Version**: 1.0.0  
**Last Updated**: November 16, 2025
