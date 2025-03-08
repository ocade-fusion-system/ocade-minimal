<?php

namespace OcadeMinimal;

function add_templates_menu()
{
  add_menu_page(
    'Templates',  // Nom affiché dans le menu
    'Templates',  // Titre de la page
    'manage_options',              // Capacité requise
    'templates',                   // Slug de la page
    '',                             // Callback (pas nécessaire ici)
    'dashicons-layout',             // Icône
    10                              // Position dans le menu
  );
}
add_action('admin_menu', __NAMESPACE__ . '\add_templates_menu');