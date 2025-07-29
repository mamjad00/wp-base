<?php
// Theme setup
function wp_theme_vite_tailwind_setup() {
    // Add support
    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', [
      'flex-height' => true,
      'flex-width'  => true,
    ]);

     // Register menu locations
    register_nav_menus([
      'primary' => __('Primary Menu', 'wp-theme-vite-tailwind'),
      'footer'  => __('Footer Menu', 'wp-theme-vite-tailwind'),
    ]);
}
add_action('after_setup_theme', 'wp_theme_vite_tailwind_setup');
