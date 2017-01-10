<?php
/**
 *
 * Template Name: Topic Template
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

  <div class="featureNewsContainer rowContainer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="newsItem">
          <h1 class="newsItem-Title">Blog Posts</h1>

          <?php
            //This code grabs the topic type name value specified in the page Custom Fields
            $key_name = get_post_custom_values($key = 'Topic Type');
            $topicsetname = $key_name[0];

            //Switch Case. This will change the category based on the value stored in the page custom field. Field name must match identically**
            switch ($topicsetname) {
              case 'Insects':
                $categorynumber = 5;
                break;
              case 'Variety Selection':
                $categorynumber = 6;
                break;
               case 'Field Preparation':
                $categorynumber = 7;
                break;
               case 'Diseases':
                $categorynumber = 9;
                break;
               case 'Fertility':
                $categorynumber = 10;
                break;
               case 'Harvest':
                $categorynumber = 11;
                break;
               case 'High Yield Management':
                $categorynumber = 12;
                break;
               case 'Storage':
                $categorynumber = 13;
                break;
               case 'Reproductive Stage':
                $categorynumber = 14;
                break;
              case 'Row Widths':
                $categorynumber = 15;
                break;
              case 'Vegetative Stages':
                $categorynumber = 16;
                break;
              case 'Seed Treatment':
                $categorynumber = 17;
                break;
              case 'Seed Rate':
                $categorynumber = 18;
                break;
              default:
                break;
            }


            // we need to get the last three posts that are tagged as news that are published
            $args = array( 'numberposts' => '10', 'post_status' => 'publish', 'category' => $categorynumber);
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
              <?php if(!empty($thumb_id)) : ?>
                <img style="min-width: 250px;" src="<?php echo $featured_thumb_URL; ?>" class="img-responsive hidden-xs" alt="<?php echo $recent["post_title"]; ?>">
              <?php else: ?>
                <img src="http://placehold.it/350x150&text=No Image" class="img-responsive hidden-xs">
              <?php endif; ?>
              <h5><a href="<?php echo get_permalink($recent["ID"]); ?>"><?php echo $recent["post_title"]; ?></a></h5>
              <p><?php echo $blurb  . "..."; ?></p>
            </div>
          <?php endforeach; ?>
          <br style="clear: both;">
        </div> <!-- /.newsItem -->
      </div> <!-- /.col-md-6-->

    </div>
  </div>
</div>


<?php
//get_sidebar();
get_footer();


