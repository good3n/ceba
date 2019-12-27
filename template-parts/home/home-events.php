<?php
/**
 * @author Tom Gooden @good3n
 * @package CEBA / Home / Events
 **/

//   $count = wp_count_posts('tribe_events');

//   // if events
//   if($count->publish > 0) {

?>

<section class="events">
  <div class="container">
    <h2 class="events__title">Upcoming Events</h2><!-- /.events__title -->
    <a href="<?php echo get_home_url().'/events/' ?>" class="events__link">View All Events</a><!-- /.news__link -->
    <div class="events__posts">
      <?php
        $events = tribe_get_events([
          // 'start_date' => 'now',
          'posts_per_page' => 2
        ]);
        foreach ( $events as $event ) {
          echo '<a href="/event/'.$event->post_name.'" class="events__post-link">';
            echo '<h3 class="events__post-title">'.$event->post_title.'</h3>';
            echo '<p class="events__post-excerpt">'.tribe_get_start_date( $event ).'</p>';
          echo '</a>';
        } // endforeach;
      ?>
    </div><!-- /.events__posts -->
  </div><!-- /.container -->
</section><!-- /.events -->

<?php
  // } // endif;
?>