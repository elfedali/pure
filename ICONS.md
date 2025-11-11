# Lucide Icons Usage Guide

Lucide icons have been integrated into the Pure theme. Here's how to use them:

## Basic Usage

### In PHP Templates

```php
// Display an icon
<?php pure_icon( 'heart' ); ?>

// Display with custom size
<?php pure_icon( 'heart', array( 'size' => 32 ) ); ?>

// Display with custom class
<?php pure_icon( 'heart', array( 'class' => 'my-custom-class' ) ); ?>

// Get icon HTML (without echoing)
$icon_html = pure_get_icon( 'star', array( 'size' => 20 ) );
```

### Available Parameters

```php
pure_icon( 'icon-name', array(
    'size'        => 24,              // Icon size in pixels (default: 24)
    'color'       => 'currentColor',  // Icon color (default: currentColor)
    'stroke'      => 2,               // Stroke width (default: 2)
    'class'       => '',              // Additional CSS classes
    'aria_hidden' => true,            // Accessibility attribute (default: true)
) );
```

## Common Icon Shortcuts

The theme includes shortcut functions for frequently used icons:

### Social Media
```php
<?php echo pure_icon_facebook(); ?>
<?php echo pure_icon_twitter(); ?>
<?php echo pure_icon_instagram(); ?>
<?php echo pure_icon_linkedin(); ?>
<?php echo pure_icon_youtube(); ?>
<?php echo pure_icon_github(); ?>
```

### UI Icons
```php
<?php echo pure_icon_menu(); ?>        // Hamburger menu
<?php echo pure_icon_close(); ?>       // X close icon
<?php echo pure_icon_search(); ?>      // Search icon
<?php echo pure_icon_arrow_right(); ?> // Arrow right
<?php echo pure_icon_arrow_left(); ?>  // Arrow left
<?php echo pure_icon_calendar(); ?>    // Calendar
<?php echo pure_icon_user(); ?>        // User
<?php echo pure_icon_tag(); ?>         // Tag
<?php echo pure_icon_folder(); ?>      // Folder
<?php echo pure_icon_mail(); ?>        // Mail
<?php echo pure_icon_home(); ?>        // Home
<?php echo pure_icon_external_link(); ?> // External link
```

## Real-World Examples

### Example 1: Navigation Menu with Icons
```php
<nav class="main-navigation">
    <a href="<?php echo home_url(); ?>">
        <?php echo pure_icon_home( array( 'size' => 20 ) ); ?>
        Home
    </a>
    <a href="<?php echo home_url('/blog'); ?>">
        <?php echo pure_icon_folder( array( 'size' => 20 ) ); ?>
        Blog
    </a>
</nav>
```

### Example 2: Post Meta with Icons
```php
<div class="entry-meta">
    <?php echo pure_icon_calendar( array( 'size' => 16 ) ); ?>
    <time><?php echo get_the_date(); ?></time>
    
    <?php echo pure_icon_user( array( 'size' => 16 ) ); ?>
    <span><?php the_author(); ?></span>
</div>
```

### Example 3: Social Links
```php
<div class="social-links">
    <?php if ( get_theme_mod( 'pure_social_facebook' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'pure_social_facebook' ) ); ?>" target="_blank">
            <?php echo pure_icon_facebook( array( 'size' => 24 ) ); ?>
        </a>
    <?php endif; ?>
    
    <?php if ( get_theme_mod( 'pure_social_twitter' ) ) : ?>
        <a href="<?php echo esc_url( get_theme_mod( 'pure_social_twitter' ) ); ?>" target="_blank">
            <?php echo pure_icon_twitter( array( 'size' => 24 ) ); ?>
        </a>
    <?php endif; ?>
</div>
```

### Example 4: Read More Link with Icon
```php
<a href="<?php the_permalink(); ?>" class="read-more">
    <?php echo get_theme_mod( 'pure_read_more_text', __( 'Read More', 'pure' ) ); ?>
    <?php echo pure_icon_arrow_right( array( 'size' => 18 ) ); ?>
</a>
```

### Example 5: Search Form with Icon
```php
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="search-field" placeholder="Search..." name="s">
    <button type="submit" class="search-submit">
        <?php echo pure_icon_search( array( 'size' => 20 ) ); ?>
    </button>
</form>
```

## Available Icons

Lucide has 1000+ icons. Browse the full collection at:
https://lucide.dev/icons/

Common categories:
- **Arrows**: arrow-right, arrow-left, arrow-up, arrow-down, chevron-right, chevron-left
- **UI**: menu, x, search, settings, more-horizontal, more-vertical
- **Social**: facebook, twitter, instagram, linkedin, youtube, github
- **Content**: file, folder, image, video, music, book
- **Communication**: mail, message-circle, phone, bell
- **User**: user, users, user-plus, user-check
- **Date/Time**: calendar, clock, timer
- **Actions**: edit, trash, save, download, upload
- **Status**: check, x, alert-circle, info, help-circle

## Styling Icons

Add custom styles in your `theme.scss`:

```scss
.lucide-icon {
    display: inline-block;
    vertical-align: middle;
    
    &.icon-large {
        width: 48px;
        height: 48px;
    }
    
    &.icon-primary {
        color: var(--primary-color);
    }
}
```

Then use:
```php
<?php pure_icon( 'heart', array( 'class' => 'icon-large icon-primary' ) ); ?>
```

## Performance Note

Icons are loaded from CDN and initialized automatically. They are lightweight SVG icons that don't impact performance.
