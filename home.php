<?php
/**
 * Template Name: Home
 * @package CEBA
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

     <?php
        get_template_part('template-parts/home/home', 'intro');
        get_template_part('template-parts/home/home', 'news');
        get_template_part('template-parts/home/home', 'info');
      ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
