# Elementor ACF Team Card

A custom Elementor widget that renders a team-member card with content pulled from Advanced Custom Fields on a custom post type. Built as a portfolio piece to demonstrate Elementor and ACF integration alongside responsive HTML, CSS, and vanilla JavaScript.

## Why I built it

Team member cards are a repeat need for content-heavy WordPress sites: About pages, agency directories, testimonials. Building them once as an Elementor widget that reads from a structured post type (rather than gluing them together in the page builder each time) means editors get consistent output and developers get a real content model.

## Features

- Custom "Team Member" post type registered in code
- ACF field group registered in code (role, bio, LinkedIn, X/Twitter, email)
- Elementor widget with SELECT and SWITCHER controls
- Responsive layout (mobile stacked → desktop side-by-side at 1024px)
- CSS custom properties for easy theming
- Vanilla JS hover interaction with keyboard focus support
- BEM class naming, mobile-first CSS
- Assets registered so they only load on pages that use the widget
- Passes WordPress Coding Standards (WPCS 3.x) clean

## Tech stack

- WordPress 6.0+
- PHP 7.4+
- Elementor (free)
- Advanced Custom Fields (free)

## Screenshots

### Desktop
![Desktop layout](docs/screenshots/desktop.png)

### Tablet
![Tablet layout](docs/screenshots/tablet.png)

### Mobile
![Mobile layout](docs/screenshots/mobile.png)

## Installation

1. Ensure Elementor and Advanced Custom Fields are installed and active.
2. Copy the folder into `wp-content/plugins/`.
3. Activate from the Plugins screen.
4. Create Team Members under the "Team Members" menu with their photo and details.
5. Edit any page in Elementor, drag "Team Card" from the widget panel, pick a team member.

## Development

```bash
composer install
docker compose exec -w /var/www/html/wp-content/plugins/elementor-acf-team-card wordpress php vendor/bin/phpcs
```

## License

GPL-2.0-or-later