# Yard Sales - WordPress Theme

## Description

"Yard Sales" is a WordPress theme designed for garage sales and flea market websites. This theme provides an easy-to-use and customizable structure for listing and selling second-hand products.

## Features

- Responsive design
- WooCommerce integration
- Customization options for colors and typography
- Custom widgets
- Support for multiple navigation menus
- Custom page templates
- Support for custom logos, featured images, and dynamic titles
- Custom post type for products

## Requirements

- WordPress 5.0 or higher
- PHP 7.0 or higher
- WooCommerce (optional, for store functionality)

## Installation

### From the WordPress Admin Panel

1. Navigate to **Appearance > Themes**.
2. Click on **Add New**.
3. Click on **Upload Theme**.
4. Select the `yard-sales.zip` file from your computer.
5. Click **Install Now**.
6. Once installed, click **Activate**.

### Manually via FTP

1. Download and unzip the `yard-sales.zip` file.
2. Connect to your web server using an FTP client.
3. Upload the unzipped `yard-sales` folder to the `/wp-content/themes/` directory.
4. In the WordPress admin panel, navigate to **Appearance > Themes**.
5. Find and activate the "Yard Sales" theme.

## Usage

### Theme Structure

- The `index.php` file is the main file of the theme and is used to display the content of the posts. It contains the following logic.
- The footer.php file manages the theme's footer and loads widgets from the "pie-pagina" widget area
- The functions.php file includes functions to register and enqueue scripts and styles, add theme support features, register navigation menus, widgets, and custom post types.

Asset Folder

The assets folder contains additional resources used by the theme:

- CSS: Stylesheets for customizing the theme's appearance.
- JS: JavaScript files for adding interactive functionality.
- Images: Graphics and icons used throughout the theme.

Ensure these assets are appropriately referenced in your theme files for optimal functionality and styling.
Customization

To customize the theme, navigate to Appearance > Customize. From there, you can modify various design options such as colors, typography, and layout.
Widgets Setup

This theme includes support for widgets in the footer area. To add or configure widgets:

- Navigate to Appearance > Widgets.
- Drag desired widgets to the Pie de página (identified as "pie-pagina") section.

## Author
Michelle Duque De La Rosa

## License

This theme is licensed under the GPL v2.0 or later. For more details, please review the LICENSE file included in this repository.


