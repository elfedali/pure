# Pure WordPress Theme

A minimal, clean, and well-organized WordPress theme built with Pure CSS framework.

## Description

Pure is a lightweight WordPress theme that uses the Pure CSS framework to provide a clean, responsive design. Built with best practices and modern WordPress standards, featuring a modular structure for easy customization.

## Features

- **Pure CSS Framework**: Uses Pure CSS 3.0 for lightweight, responsive styling
- **Modular Structure**: Well-organized with template parts and includes
- **Responsive Design**: Mobile-first, fully responsive layout
- **Widget Ready**: Sidebar and footer widget areas
- **Custom Menus**: Primary and footer navigation menus
- **Post Formats**: Support for various post formats
- **Custom Logo**: Upload your own logo
- **Post Thumbnails**: Featured image support with multiple sizes
- **Comments**: Built-in comment system
- **Search**: Custom search functionality
- **Customizer Ready**: Theme customizer support for colors and settings
- **Translation Ready**: Fully translatable with .pot file support

## Theme Structure

```
pure/
├── assets/
│   ├── css/          # Additional stylesheets
│   ├── js/           # JavaScript files
│   └── images/       # Theme images
├── inc/
│   ├── theme-setup.php        # Theme setup and configuration
│   ├── enqueue.php            # Scripts and styles enqueuing
│   ├── widgets.php            # Widget areas registration
│   ├── template-tags.php      # Custom template tags
│   ├── template-functions.php # Template helper functions
│   └── customizer.php         # Theme customizer options
├── template-parts/
│   ├── content/
│   │   ├── content.php        # Default post content
│   │   ├── content-page.php   # Page content
│   │   ├── content-none.php   # No content found
│   │   ├── entry-meta.php     # Post meta information
│   │   └── entry-footer.php   # Post footer content
│   ├── header/
│   │   └── site-branding.php  # Site logo and title
│   └── navigation/
│       └── navigation-primary.php # Primary menu
├── style.css         # Main stylesheet with theme header
├── functions.php     # Theme functions loader
├── header.php        # Header template
├── footer.php        # Footer template
├── index.php         # Main blog template
├── single.php        # Single post template
├── page.php          # Page template
├── archive.php       # Archive template
├── search.php        # Search results template
├── 404.php           # Error page template
├── sidebar.php       # Sidebar template
├── comments.php      # Comments template
├── searchform.php    # Search form template
└── README.md         # This file
```

## Installation

1. Upload the `pure` folder to `/wp-content/themes/` directory
2. Activate the theme through the 'Appearance > Themes' menu in WordPress
3. Configure theme settings in 'Appearance > Customize'

## Template Files

- `index.php` - Main blog template
- `single.php` - Single post template
- `page.php` - Static page template
- `archive.php` - Archive pages template
- `search.php` - Search results template
- `404.php` - Error page template
- `header.php` - Header template
- `footer.php` - Footer template
- `sidebar.php` - Sidebar template
- `comments.php` - Comments template
- `searchform.php` - Search form template

## Customization

### Menus
Go to Appearance > Menus to create and assign menus to:
- Primary Menu (Header navigation)
- Footer Menu (Footer navigation)

### Widgets
Go to Appearance > Widgets to add widgets to:
- Sidebar

### Custom Logo
Go to Appearance > Customize > Site Identity to upload a custom logo.

## Browser Support

This theme uses Pure CSS which supports:
- Latest Chrome
- Latest Firefox
- Latest Safari
- Latest Edge
- IE 11+

## Credits

- Pure CSS Framework: https://purecss.io/
- Built with WordPress best practices

## License

This theme is licensed under the GPL v2 or later.

## Changelog

### Version 1.0
- Initial release
- Pure CSS 3.0 integration
- Responsive grid layout
- Complete template set
- Widget and menu support
- Custom logo support
- Post formats support

## Support

For support and documentation, please visit the theme page.
