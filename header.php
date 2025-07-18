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
    <div class = "upperLine">
	  <a href = "/"><img class = "logo" src = "https://pioneer888.ru/wp-content/uploads/2023/01/logo.png" /></a> 

      <a href = "tel: +7‒914‒709‒18‒88"> +7‒914‒709‒18‒88 </a>
      <a href = "tel:+7 (4236) 622 888 "> +7 (4236) 622 888 </a>

       <div class = "signUpBlock">
           <?php wp_nav_menu( array( 'theme_location' => 'tocart', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
           <!--<a class = "lcButton" href = "/cart">Корзина</a> -->
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
