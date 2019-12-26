<?php
/**
 * @author Tom Gooden @good3n
 * @package CEBA / Home / News
 **/
?>

<section class="home-news">
  <div class="container">
    <h2 class="home-news__title">News &amp; Events</h2><!-- /.home-news__title -->
    <a href="" class="home-news__link">View All</a><!-- /.home-news__link -->
    <div class="home-news__posts">
      <?php
        $args = array(
         'post_status' => 'publish',
         'posts_per_page' => 2
        );
        $query = new WP_Query( $args );
        while ($query -> have_posts()) {
          $query -> the_post();
          echo '<a href="'.get_permalink().'" class="home-news__post-link">';
            echo '<h3 class="home-news__post-title">'.get_the_title().'</h3>';
            echo '<p class="home-news__post-excerpt">'.wp_trim_words( get_the_content() , '20' ).'</p>';
          echo '</a>';
        } // endwhile;
        wp_reset_postdata();
        ?>
    </div><!-- /.home-news__posts -->
  </div><!-- /.container -->
</section><!-- /.home-news -->