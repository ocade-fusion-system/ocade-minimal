<?php

namespace OcadeMinimal;

add_action('init', function () {
  $labels = array(
    'name' => __('Header'),
    'singular_name' => __('Header'),
    'menu_name' => __('Header'),
    'all_items' => __('Headers'),
    'add_new' => __('Ajouter un nouveau'),
    'add_new_item' => __('Ajouter un nouveau header'),
    'edit_item' => __('Modifier le header'),
    'new_item' => __('Nouveau header'),
    'view_item' => __('Voir le header'),
    'search_items' => __('Rechercher des headers'),
    'not_found' => __('Aucun header trouvé'),
    'not_found_in_trash' => __('Aucun header trouvé dans la corbeille'),
  );

  $args = [
    'public' => true,
    'publicly_queryable' => false, // masquer l'interface de requête publique = ne pas indexer
    'labels'  => $labels,
    'icon' => 'dashicons-admin-site',
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => false,
    'query_var' => true,
    'menu_icon' => 'dashicons-admin-site',
    'supports' => array('title', 'editor', 'revisions'),
    'map_meta_cap' => true, // activer la vérification des autorisations pour les publications individuelles
    'show_in_rest' => true, // permet à l'API REST de récupérer des données à partir de ce type de contenu. Si cette clé est définie sur true, le type de contenu sera disponible via l'API REST.
    'show_ui' => true, // active l'interface utilisateur pour le type de contenu dans le tableau de bord WordPress. Si cette clé est définie sur false, l'interface utilisateur ne sera pas visible pour ce type de contenu.
    'show_in_menu' => 'templates', // ajoute une entrée pour ce type de contenu dans le menu de navigation du tableau de bord WordPress. Si cette clé est définie sur false, le type de contenu ne sera pas visible dans le menu de navigation. Visible/Cache dans bar admin.
    'show_in_nav_menus' => false, // indique si ce type de contenu doit être affiché dans les menus de navigation du site. Si cette clé est définie sur false, le type de contenu ne sera pas disponible pour être ajouté aux menus de navigation.
    'exclude_from_search' => true, // empêche les éléments de ce type de contenu d'apparaître dans les résultats de recherche sur le site. Si cette clé est définie sur true, le type de contenu sera exclu des résultats de recherche.
    'has_archive' => false, // indique si ce type de contenu aura une archive de type de contenu (une page qui affiche tous les éléments du type de contenu). Si cette clé est définie 
    'can_export' => true, // indique si ce type de contenu peut être exporté en utilisant l'outil d'exportation WordPress. Si cette clé est définie sur true, le type de contenu pourra être exporté.
    'public' => false, // permet d'activer l'interface utilisateur pour ce type de contenu sur le site front-end. Si cette clé est définie sur false, le type de contenu ne sera pas disponible sur le site front-end.
    'max_posts' => 0, // définir le nombre maximum de publications pour ce type de publication personnalisé
    'menu_position' => 10
  ];
  register_post_type('header', $args);
});
