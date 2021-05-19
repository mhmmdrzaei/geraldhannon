<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <section class="headerMain" role="contentinfo" aria-label="container with Page title and Menu">
  <section class="pageTitle" role="contentinfo" aria-label="Website Title">
    
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
       <h1> <?php bloginfo( 'name' ); ?></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>
      </a>
    
    
  </section>
  <section class="menuSection" role="contentinfo" aria-label="container with Menu Items">
    <ul class="toggle">
                    <li></li>
                    <li></li>
                    <li></li>
    </ul>
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </section>
  </section>
</header><!--/.header-->

