# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a WordPress theme for "charme-beauty", a cosmetic surgery clinic website. The theme is built as a custom WordPress theme with multiple custom post types for managing different types of content.

## Build Process

### CSSDevelopment
- SCSSファイルは存在していますが、以前の業者が作成したもので破損しています。今後CSSはディレクトリ直下の `style.css` に追記してください。

### No Package Manager
- This project does not use npm, yarn, or other package managers
- Dependencies are managed manually and included directly in the theme
- JavaScript libraries (jQuery, Slick slider, FancyBox) are included in `/js/lib/` and `/css/` directories

## Architecture

### Custom Post Typesç
The theme registers several custom post types in `functions.php`:
- `service` - Medical services offered
- `news` - News and updates
- `voice` - Customer testimonials/reviews
- `clinic` - Clinic locations/information
- `case` - Before/after case studies
- `campaign` - Marketing campaigns

### Custom Taxonomies
- `clinic_caategory` - Clinic categories (note: typo in original code)
- `clinic_area` - Clinic geographic areas
- `case_category` - Case study categories (eye, face, nose, bust, contour, injection, liposuction, makeup, skin, aesthetic-dentistry, other)
- `case_clinic` - Cases associated with specific clinics

### Template Hierarchy
- **Archive templates**: `archive-{post_type}.php` for listing pages (25+ template files total)
- **Single templates**: `single-{post_type}.php` for individual posts
- **Taxonomy templates**: `taxonomy-{taxonomy}-{term}.php` for categorized content
- **Page templates**: Located in `/page-templates/` directory for custom page layouts (30+ specialized pages)
- **Case category taxonomies**: Individual taxonomy templates for each case category (eye, face, nose, bust, contour, injection, liposuction, makeup, skin, aesthetic-dentistry, other)

### Directory Structure
- `/css/` - Compiled CSS files and third-party CSS libraries (reset.css, style.min.css, jquery.fancybox.css, etc.)
- `/js/` - JavaScript files including animations, sliders, and pagination (accordion.js, paginathing.js, slick.js, /lib/, /case/, /top/)
- `/imgs/` - Theme images and assets
- `/page-templates/` - Custom page templates for special pages (about.php, contact.php, service pages, campaign pages, etc.)
- `/include/` - PHP includes and utilities (contact form handling)
- `/template-parts/` - Reusable template components (page-blocks.php, page-clinic.php)

### Key Theme Features
- **Custom image sizes**: `case_image_s` (226x224), `case_image_l` (512x507), `campaign_image_s/l` (800x300), `case_clinic` (200x200)
- **Font definitions**: Noto Sans CJK JP variants (Regular, Medium, Bold, Light), Futura Medium, Roboto thin italic
- **Color scheme variables** in SCSS: `$baseColor: #ebe7e1`, `$subColor: #937f65`, `$fontColor: #424242`
- **JavaScript libraries**: Slick slider for carousels, jQuery FancyBox for image galleries, custom pagination with paginathing.js
- **WordPress optimizations**: Removed meta tags, generators, autosave disabled, emoji detection removed

### Important Files
- `functions.php` - Core theme functionality, custom post types, image sizes, and WordPress customizations
- `header.php` / `footer.php` - Theme layout structure
- `index.php` - Homepage template with clinic slider functionality
- `search-case.php` - Custom search functionality for case studies
- `service-detail.php` - Specialized service detail template

## Development Notes

- Theme removes default WordPress meta tags and generators for cleaner output
- Autosave functionality is disabled
- Custom REST API endpoints may be registered for frontend functionality
- Japanese language support with Noto Sans CJK JP font family
