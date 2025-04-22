<?php

global $pagenow; // Page actuelle

// TEMPLATES
require_once get_template_directory() . '/includes/models/index.php'; // Page parent Templates
require_once get_template_directory() . '/includes/models/cpt-header.php'; // Custom Post Type Header
require_once get_template_directory() . '/includes/models/cpt-actualites.php'; // Custom Post Type Actualites
require_once get_template_directory() . '/includes/models/cpt-authors.php'; // Custom Post Type Authors
require_once get_template_directory() . '/includes/models/cpt-maintenance.php'; // Custom Post Type Maintenance
require_once get_template_directory() . '/includes/models/cpt-categorie-articles.php'; // Custom Post Type Categorie D'articles
require_once get_template_directory() . '/includes/models/cpt-tag-articles.php'; // Custom Post Type Categorie D'articles
require_once get_template_directory() . '/includes/models/cpt-footer.php'; // Custom Post Type Footer
require_once get_template_directory() . '/includes/models/cpt-404.php'; // Custom Post Type 404

// MISE A JOUR
if (is_admin()) require_once get_template_directory() . '/ocade-updater.php';

// SUPPORTS
add_action('after_setup_theme', function () {
  add_theme_support('custom-logo'); // Active les logos personnalisés
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']); // Active les formats d'article
  add_theme_support('automatic-feed-links'); // Active les liens de flux automatiques
  add_theme_support('editor-style'); // Active les styles de l'éditeur
  add_theme_support('post-thumbnails'); // Active les images mises en avant
  add_theme_support('custom-background'); // Active les arrière-plans personnalisés
  add_theme_support('title-tag'); // Active le titre dynamique (plus besoin de le mettre dans le header)
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']); // Active les balises HTML5
  add_theme_support('customize-selective-refresh-widgets'); // Active la mise à jour des widgets en direct
  add_theme_support('menus'); // Active les menus
  add_theme_support('custom-header'); // Active les en-têtes personnalisés
  add_theme_support('wp-block-styles'); // Active les styles de blocs
  add_theme_support('align-wide'); // Active les alignements larges et complets
  add_theme_support('editor-styles'); // Active les styles de l'éditeur  (Gutenberg)
  add_theme_support('responsive-embeds'); // Active les vidéos intégrées réactives (Gutenberg)
  add_theme_support('block-template'); // Active les modèles de blocs (Gutenberg)
  add_theme_support('widgets-block-editor');
  add_theme_support('dark-editor-style');
});


// STYLES CSS
add_action('wp_enqueue_scripts', function () {
  // Style parent avec version dynamique
  wp_enqueue_style(
    'ocade-minimal',
    get_template_directory_uri() . '/style.css',
    [],
    filemtime(get_template_directory() . '/style.css')
  );
  // Style enfant avec version dynamique, dépendant du parent
  wp_enqueue_style(
    'ocade-minimal-child',
    get_stylesheet_directory_uri() . '/style.css',
    ['ocade-minimal'],
    filemtime(get_stylesheet_directory() . '/style.css')
  );
});
