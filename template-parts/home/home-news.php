<?php
/**
 * @author Tom Gooden @good3n
 * @package CEBA / Home / News
 **/
?>

<section class="news">
  <div class="container">
    <h2 class="news__title">News &amp; Events</h2><!-- /.news__title -->
    <a href="<?php echo get_home_url().'/news-events/' ?>" class="news__link">View All</a><!-- /.news__link -->
    <div class="news__posts">
      <?php
        $args = array(
         'post_status' => 'publish',
         'posts_per_page' => 2
        );
        $query = new WP_Query( $args );
        while ($query -> have_posts()) {
          $query -> the_post();
          echo '<a href="'.get_permalink().'" class="news__post-link">';
            echo '<h3 class="news__post-title">'.get_the_title().'</h3>';
            echo '<p class="news__post-excerpt">'.wp_trim_words( get_the_content() , '20' ).'</p>';
          echo '</a>';
        } // endwhile;
        wp_reset_postdata();
        ?>
    </div><!-- /.news__posts -->
  </div><!-- /.container -->
</section><!-- /.news -->