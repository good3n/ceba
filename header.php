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
    <?php
      if ( is_front_page() || is_home() )  {
        ?>
        <nav id="site-navigation" class="main-navigation">
          <div id="nav-toggle">
            <div class="box">
              <div class="inner"></div>
            </div>
          </div><!-- /#nav-toggle -->
          <div id="nav-wrap">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'main-menu',
              'menu_id'        => 'primary-menu',
            ) );
            ?>
          </div><!-- /#nav-wrap -->
        </nav><!-- #site-navigation -->
      <?php
      } else {
      ?>
        <nav id="site-navigation" class="main-navigation">
          <div id="nav-toggle">
            <div class="box">
              <div class="inner"></div>
            </div>
          </div><!-- /#nav-toggle -->
          <div id="nav-wrap">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'main-menu',
              'menu_id'        => 'primary-menu',
            ) );
            ?>
          </div><!-- /#nav-wrap -->
        </nav><!-- #site-navigation -->
        <div class="container">
          <div class="head-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 195 172"><g fill="none" fill-rule="nonzero"><path fill="#57BCD4" d="M98 35c3 0 5-3 5-6V6c0-3-2-6-5-6-4 0-6 3-6 6v23c0 3 2 6 6 6z"/><path fill="#BFE1EB" d="M66 36a6 6 0 0011-4l-5-10c-1-3-4-5-7-4-3 2-5 5-4 8l5 10zM122 40a6 6 0 007-4l5-10c1-3-1-6-4-8-3-1-6 1-7 4l-5 10c-1 3 1 6 4 8z"/><path fill="#1952BE" d="M6 103h23c3 0 6-2 6-5 0-4-3-6-6-6H6c-3 0-6 2-6 6 0 3 3 5 6 5zM160 98c0 3 3 5 6 5h23c3 0 6-2 6-5 0-4-3-6-6-6h-23c-3 0-6 2-6 6z"/><path fill="#57BCD4" d="M45 53a6 6 0 008 0c3-2 3-6 0-8L37 29a6 6 0 10-8 8l16 16zM146 55l4-2 16-16a6 6 0 10-8-8l-16 16a6 6 0 004 10z"/><path fill="#389CD8" d="M155 73a6 6 0 008 4l10-5c3-1 5-4 4-7-2-3-5-5-8-4l-10 5c-3 1-5 4-4 7zM22 72l10 5a6 6 0 008-4c1-3-1-6-4-7l-10-5c-3-1-6 1-8 4-1 3 1 6 4 7z"/><path fill="#F5C9A4" d="M189 115h-43a52 52 0 00-48-69 51 51 0 00-49 69H6a6 6 0 000 11h183a6 6 0 000-11z"/><path fill="#D0A17A" d="M166 138H29c-3 0-6 2-6 6 0 3 3 5 6 5h137c3 0 6-2 6-5 0-4-3-6-6-6z"/><path fill="#7C522F" d="M144 161H52c-3 0-6 2-6 6 0 3 3 5 6 5h92c3 0 6-2 6-5 0-4-3-6-6-6z"/></g></svg>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          </div>
        </div><!-- /.container -->
        <?php
      } // endif;
    ?>
	</header><!-- #masthead -->

  <script>
    const toggle = document.getElementById('nav-toggle');
    const nav = document.getElementById('nav-wrap');
    const body = document.querySelector('body');
    
    toggle.addEventListener('click', function() {
      toggle.classList.toggle('is-active');
      nav.classList.toggle('is-active');
      body.classList.toggle('is-active');
    })
  </script>

	<div id="content" class="site-content">
