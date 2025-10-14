# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a WordPress theme for "charme-beauty", a cosmetic surgery clinic website. The theme is built as a custom WordPress theme with multiple custom post types for managing different types of content.

## Build Process

### CSS/SCSS Development
- Main SCSS files are located in `/scss/` directory
- Primary SCSS file: `scss/style.scss`
- Compiled CSS output: `style.css` and `styles.css`
- Use `sass` to compile SCSS files:
  ```bash
  sass scss/style.scss style.css
  sass scss/style.scss styles.css --watch  # For development with auto-compile
  ```

### No Package Manager
- This project does not use npm, yarn, or other package managers
- Dependencies are managed manually and included directly in the theme

## Architecture

### Custom Post Types
The theme registers several custom post types in `functions.php`:
- `service` - Medical services offered
- `news` - News and updates
- `voice` - Customer testimonials/reviews
- `clinic` - Clinic locations/information
- `case` - Before/after case studies
- `campaign` - Marketing campaigns

### Template Hierarchy
- **Archive templates**: `archive-{post_type}.php` for listing pages
- **Single templates**: `single-{post_type}.php` for individual posts
- **Taxonomy templates**: `taxonomy-{taxonomy}-{term}.php` for categorized content
- **Page templates**: Located in `/page-templates/` directory for custom page layouts
- **Case category taxonomies**: Multiple taxonomy templates for different case categories (eye, face, nose, bust, etc.)

### Directory Structure
- `/css/` - Compiled CSS files and third-party CSS libraries
- `/scss/` - SCSS source files with color variables and font definitions
- `/js/` - JavaScript files including animations, sliders, and pagination
- `/imgs/` - Theme images and assets
- `/page-templates/` - Custom page templates for special pages
- `/include/` - PHP includes and utilities
- `/template-parts/` - Reusable template components

### Key Theme Features
- Custom image sizes defined for different content types (case images, campaign images, clinic thumbnails)
- Font definitions for Noto Sans CJK JP variants and custom fonts
- Color scheme variables defined in SCSS: `$baseColor: #ebe7e1`, `$subColor: #937f65`, `$fontColor: #424242`
- Slick slider integration for clinic carousel functionality
- jQuery FancyBox for image galleries
- Custom pagination system

### Important Files
- `functions.php` - Core theme functionality, custom post types, image sizes, and WordPress customizations
- `header.php` / `footer.php` - Theme layout structure
- `index.php` - Homepage template with clinic slider functionality
- `search-case.php` - Custom search functionality for case studies

## Development Notes

- Theme removes default WordPress meta tags and generators for cleaner output
- Autosave functionality is disabled
- Custom REST API endpoints may be registered for frontend functionality
- Japanese language support with Noto Sans CJK JP font family