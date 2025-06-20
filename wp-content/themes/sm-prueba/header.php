<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="logo">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo">
  </div>

  <nav class="main-menu">
    <?php
    wp_nav_menu([
      'theme_location' => 'menu_principal',
      'container' => false,
      'menu_class' => 'menu'
    ]);
    ?>
  </nav>

  <div class="header-extras">
    <form class="search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
      <input type="search" name="s" placeholder="Buscar">
      <button type="submit">🔍</button>
    </form>

    <div class="social-icons">
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-fb.png" alt="Facebook"></a>
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-li.png" alt="LinkedIn"></a>
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-flag.png" alt="English"></a>
    </div>

    <button class="menu-toggle">☰</button>
  </div>
</header>
