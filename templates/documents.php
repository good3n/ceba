<?php
/**
 * Template Name: Documents
 * @package CEBA
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <div class="container documents">
        <?php
          while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content', 'page' );
          endwhile; // End of the loop.

          echo '<div class="documents-list">';
            if(have_rows('documents')) {
              while(have_rows('documents')) {
                the_row();
                $document = get_sub_field('document');
                if($document['type'] === 'image') {
                  echo '<a href="' . $document['url'] . '"><img src="' . $document['url'] . '" alt="' . $document['filename'] . '">' . $document['title'] . '</a>';
                }
                if($document['type'] === 'application') {
                  echo '<a href="' . $document['url'] . '"><embed src="' . $document['url'] . '" type="application/pdf">' . $document['title'] . '</a>';
                }
              }
            }
          echo '</div>';
        ?>
      </div><!-- /.container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
