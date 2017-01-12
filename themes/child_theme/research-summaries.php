<?php
/**
 *
 * Template Name: Events & Presentation Template
 *
**/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php get_template_part( 'content', 'page' ); ?>
      </div>
    </div>
  </div>
<?php endwhile; // end of the loop. ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">

          <?php

            // we need to get the last three posts that are tagged as news that are published
            $args = array( 'numberposts' => '10', 'post_status' => 'publish', 'category' => '20');
            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ) :
              // grab the featured image from the post
              $thumb_id = get_post_thumbnail_id($recent["ID"]);
              $featured_thumb_URL = wp_get_attachment_url($thumb_id);
              $blurb = $recent["post_content"];
              if (preg_match('/^.{1,260}\b/s', $blurb, $match))
              {
                  $blurb = $match[0];
              }
            ?>
            <div class="col-md-6">
              <h5> <i class="fa fa-file-pdf-o" style="margin-right: 10px;" aria-hidden="true"></i><a href="<?php echo get_permalink($recent["ID"]); ?>"><?php echo $recent["post_title"]; ?></a></h5>
               <p class="meta-news"><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></p>
              <p><?php echo $blurb  . "..."; ?></p>
            </div>
          <?php endforeach; ?>
          <br style="clear: both;">
        </div> <!-- /.newsItem -->
      </div> <!-- /.col-md-6-->

</div>

<?php
//get_sidebar();
get_footer();


