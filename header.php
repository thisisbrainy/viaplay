<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ionicons.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<header id="masthead" class="site-header" role="banner">
  <div class="container head">
    <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
    <nav id="site-navigation" class="main-navigation" role="navigation">
<?php if ( is_page('Home') ) : ?>
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
<?php else : ?>
	<?php wp_nav_menu( array( 'theme_location' => 'alternative', 'menu_id' => 'primary-menu' ) ); ?>
<?php endif; ?>
    </nav>
    <!-- #site-navigation -->
    <div class="mobile-menu" style="display:none;">
      <div class="button_container" id="toggle">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>

      <div class="overlay" id="overlay">
        <div class="menu-peamenuu-container">
          <div class="menu-peamenuu-container">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- #masthead -->

<script>
$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });
</script> 
	<div id="content" class="site-content">
