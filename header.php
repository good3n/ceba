<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CEBA
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
    <div class="container">
      <?php
        if ( is_front_page() || is_home() )  {
          ?>
          <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'main-menu',
              'menu_id'        => 'primary-menu',
            ) );
            ?>
          </nav><!-- #site-navigation -->
        <?php
        } else {
        ?>
          <p class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          </p>
          <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'main-menu',
              'menu_id'        => 'primary-menu',
            ) );
            ?>
          </nav><!-- #site-navigation -->
          <?php
        } // endif;
      ?>
    </div><!-- /.container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
