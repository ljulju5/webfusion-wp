<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />  

  <?php wp_head(); ?>
</head>

<body>
  <!--Header-->
  <header>
    <nav>
      <a href="<?php echo esc_url(home_url()); ?>">
        <h3>Construction</h3>
      </a>
      <a id="menu-btn"><i class="fas fa-bars"></i> MENU</a>
    </nav>
    <div class="menu" id="menu">
      <i class="far fa-times-circle close" id="close-btn"></i>
      <?php wp_nav_menu( array( 'container' => 'ul','menu_class' => '', 'theme_location' =>   'primary' ) ); ?>
      <div class="icons">
        <a href="#"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-twitter-square"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-instagram-square"></i></a>
      </div>
    </div>        
    
    <div class="img"></div>
    <div class="content">
      <h1>About us</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, ipsa.</p>
    </div>
  </header>