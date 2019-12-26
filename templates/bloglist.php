<?php
/**
 * Template Name: News & Event List
 * @package CEBA
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <div class="container bloglist">

        <?php
          $currentPage = get_query_var('paged');
          $args = array(
            'post_status' => 'publish',
            'posts_per_page' => 1,
            'paged' => $currentPage
          );
          $query = new WP_Query( $args );
          while ($query -> have_posts()) {
            $query -> the_post();
            echo '<a href="'.get_permalink().'" class="news__post-link">';
              echo '<h3 class="news__post-title">'.get_the_title().'</h3>';
              echo '<p class="news__post-excerpt">'.wp_trim_words( get_the_content() , '20' ).'</p>';
            echo '</a>';
          } // endwhile;
        ?>
      </div><!-- /.container -->

      <div class="container">
        <?php
          echo '<div class="bloglist__pagination">' . paginate_links(array(
              'total' => $query->max_num_pages,
              'prev_text' => __('Previous'),
              'next_text' => __('Next')
          )) . '</div>';
          wp_reset_postdata();
        ?>
      </div><!-- /.container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
