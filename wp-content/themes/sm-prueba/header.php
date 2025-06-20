<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?> Prueba Tecnica</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="logo">
    <img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Logo">
    <form class="search-form-mobile" method="get" action="<?php echo home_url('/'); ?>">
      <button class="search">
        <img class="search-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-mobile.png" alt="Search">
      </button>
    </form>
  </div>

  <div class="navigation-complete">
    <div class="nav-options">
      <nav class="main-menu">
        <a href="#">Trabaja con nosotros</a>
        <a href="#">Grupo Nutresa</a>
        <a href="#">Contáctanos</a>
      </nav>
    
      <div class="header-extras">
        <form class="search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
          <input type="search" name="s" />
          <button type="submit">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-desktop.png" alt="Search">
          </button>
        </form>
        
        <div class="social-icons">
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-facebook.png" alt="Facebook"></a>
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-linkedin.png" alt="LinkedIn"></a>
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/england-flag.png" alt="English"></a>
        </div>
        
        <button class="menu-toggle">☰</button>
      </div>
    </div>

    <div class="second-line-menu">
      <nav class="main-menu">
        <a href="#">
          Nuestra Compañía
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-row.png" alt="Row">
        </a>
        <a href="#">Organización Consciente</a>
        <a href="#">Marcas</a>
        <a href="#">
          Internacional
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-row.png" alt="Row">
        </a>
        <a href="#">Negocios Industriales</a>
        <a href="#">
          Fomento Cacaotero
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/down-row.png" alt="Row">
        </a>
        <a href="#">Sostenibilidad</a>
      </nav>
    </div>
  </div>
</header>