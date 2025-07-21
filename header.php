<!DOCTYPE html>
<html style = "overflow-x :hidden !important;" <?php language_attributes(); ?> <?php inside_schema_type(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body class = "body"
    <?php body_class(); ?>>
    <?php wp_body_open(); ?>

  <div id="wrapper" class="hfeed">
    <div class = "container">
      <div class="header-inner">
        <a href = "/">
          <img width="275" height="69" class = "logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-new.png" alt="logo" />
        </a> 
        <div class="header-inner__items">
          <div class="header-inner__item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="phone">
              <div>
                  <a href="tel:+79147091888">+7 (914) 709‒18‒88</a>
                  <p>Магазин сантехники</p>
              </div>
          </div>

          <div class="header-inner__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="phone">
            <div>
              <a href="tel:+79147394546">+ 7 (914) 739-45-46</a>
              <p>Магазин мебели и сантехники</p>
            </div>
          </div>

          <div class="header-inner__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pin.svg" alt="pin">
            <div>
              <span>Магазин мебели и&nbsp;сантехники</span>
              <p>Магазин сантехники</p>
            </div>
          </div>

          <div class="header-inner__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pin.svg" alt="pin">
            <div>
              <span>Находскинский проспект&nbsp;1М</span>
              <p>Магазин мебели</p>
            </div>
          </div>
        </div>

        <div class = "signUpBlock">
            <?php wp_nav_menu( array( 'theme_location' => 'tocart', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
            <!--<a class = "lcButton" href = "/cart">Корзина</a> -->
        </div>
      </div>
    </div>

    <header id="header" class = "mainHeaderContainer" role="banner">
      <nav id="menu" class = "headerMenu" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
			  <?php echo do_shortcode('[fibosearch]'); ?>
      </nav>

      <div class = "headerWidgetRight">
        <?php dynamic_sidebar( 'header_rwidget' ); ?>
      </div>
    </header>

  <div id="container" class = "mainContentContainer">
    <main id="content" role="main">
