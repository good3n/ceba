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
        $posts = wp_get_recent_posts(array(
          'numberposts' => 2,
          'post_status' => 'publish'
        ));
        foreach($posts as $post) {
          $excerpt = get_the_excerpt();
          echo '<a href="'.get_permalink($post['ID']).'" class="home-news__post-link">';
            echo '<h3 class="home-news__post-title">'.$post['post_title'].'</h3>';
            echo '<p class="home-news__post-excerpt">'.wp_trim_words( $excerpt , '20' ).'</p>';
          echo '</a>';
        } // endforeach;
        wp_reset_query();
      ?>
    </div><!-- /.home-news__posts -->
  </div><!-- /.container -->
</section><!-- /.home-news -->