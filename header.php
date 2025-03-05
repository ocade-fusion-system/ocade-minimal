<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); // wp_body_open() is a function that returns the body of the website -->

  /** Récupération du CPT header. */
  $header_query = new WP_Query(array(
    'post_type' => 'header',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'limit' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
  )) ?? null; ?>

  <header>
    <?php if ($header_query && $header_query->have_posts()) : ?>
      <?php while ($header_query->have_posts()) : $header_query->the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </header>