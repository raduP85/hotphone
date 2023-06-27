<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700&display=swap" rel="stylesheet">

  <title>HotPhone - Telefoane la cele mai mici preturi</title>
  <?php wp_head();?>
</head>
<body>

<header>
  <div class="wrapper-navbar">
    <!-- above the menu section -->
    <div class="top-header">
      <div class="container">
        
        <div class="row align-items-center">
          <div class="col-sm-4">
            <a href="<?=get_site_url();?>">
              <img src="<?=get_template_directory_uri();?>/img/logo_hotphone.png" alt="HotPhone Logo" height="60px"> 
            </a>
          </div>

          <div class="col-sm-8 justify-content-end">
            <div class="top-header-contact">
              <div class="delivery">
                <div class="icon">
                  <i class="fa-solid fa-truck-fast"></i> 
                </div>
                <div class="delivery-text">
                  Livrare in toata tara 24h<br>
                  Verificare colet
                </div>
              </div>
              <div class="header-phone">
                <a href="tel:0752 172 973"><i class="fa fa-phone"></i> 0752 172 973</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- end above the menu section -->
    
    <!-- main menu -->
    <nav id="main-nav" class="navbar navbar-expand-lg navbar-dark mobile-menu-bg" aria-labelledby="main-nav-label">
      
      <div class="container d-flex justify-content-start">
      
        <!-- mobile settings -->
        <div class="mobile-menu-dropdown">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
          <div class="d-sm-none ms-3">
            <a href="<?=get_site_url();?>">
              <img src="<?=get_template_directory_uri();?>/img/logo_hotphone.png" alt="HotPhone Logo" height="35px"> 
            </a>
          </div>
        </div>
        <!-- end mobile settings -->

        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'primary',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'navbarNav',
              'menu_class'      => 'navbar-nav ms-auto',
              'fallback_cb'     => '',
              'menu_id'         => 'main-menu',
              'depth'           => 2,
              'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            )
          );
        ?>

      </div>

    </nav> 
    <!-- end main menu -->
  </div>
</header>



