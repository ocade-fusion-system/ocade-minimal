<?php

// TEMPLATES
require_once get_template_directory() . '/includes/models/index.php'; // Page parent Templates
require_once get_template_directory() . '/includes/models/cpt-header.php'; // Custom Post Type Header
require_once get_template_directory() . '/includes/models/cpt-actualites.php'; // Custom Post Type Actualites
require_once get_template_directory() . '/includes/models/cpt-categorie-articles.php'; // Custom Post Type Categorie D'articles
require_once get_template_directory() . '/includes/models/cpt-footer.php'; // Custom Post Type Footer
require_once get_template_directory() . '/includes/models/cpt-404.php'; // Custom Post Type 404

// SUPPORTS
add_action('after_setup_theme', function() { add_theme_support('post-thumbnails'); }); // Active les images mises en avant

// MISE A JOUR
if (is_admin()) require_once get_template_directory() . '/ocade-updater.php';

// STYLES CSS
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('ocade-minimal', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('ocade-minimal-child', get_stylesheet_directory_uri() . '/style.css');
});



