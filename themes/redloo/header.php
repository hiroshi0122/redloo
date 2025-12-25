<?php
  /* get page ID */
  if (is_home()) {
    $page_id = 'home';
  } else {
    $page_id = get_slug_id();
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_template_part('template-parts/components/meta'); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header typography">
    <?php get_template_part('template-parts/components/navigation-header'); ?>
  </header>
