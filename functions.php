<?php

// TEMPLATES
require_once get_template_directory() . '/includes/models/index.php'; // Page parent Templates
require_once get_template_directory() . '/includes/models/cpt-header.php'; // Custom Post Type Header
require_once get_template_directory() . '/includes/models/cpt-actualites.php'; // Custom Post Type Actualites
require_once get_template_directory() . '/includes/models/cpt-footer.php'; // Custom Post Type Footer
require_once get_template_directory() . '/includes/models/cpt-404.php'; // Custom Post Type 404

// SUPPORTS
add_action('after_setup_theme', function() { add_theme_support('post-thumbnails'); }); // Active les images mises en avant

// MISE A JOUR
if (is_admin()) require_once get_template_directory() . '/ocade-updater.php';


