<?php
/* Template for displaying all category posts */
get_header(); ?>

<div class="container">
  <div class="row">
    <div class="rightnav col-lg-2 col-md-2 col-sm-2 right">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar Navigation') ) : ?>
      <?php endif; ?>
    </div>
    <div class="maincontent col-lg-7 col-md-7 col-sm-7 right" style="margin-top: 16px;">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="singleblog">

           <?php
            //This code grabs the external link name value specified in the page Custom Fields
            $key_name = get_post_custom_values($key = 'External Link');
            $externalurl = $key_name[0];

             //This external url is not empty then display external url
           if (isset($externalurl)) : ?>

        <h1><a href="<?php echo $externalurl; ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
      <?php else : ?>
              <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
      <?php endif; ?>


        <p><i class="fa fa-folder" title="category"> </i> <?php the_category(' '); ?> | <em><?php the_time('l, F jS, Y'); ?></em></p>
        <div class="banner">
          <?php
            the_post_thumbnail( 'large');
            $caption = get_post(get_post_thumbnail_id())->post_excerpt;
              if(!empty($caption)) {
                echo "<p class='caption'>" . $caption . "</p>";
              }
          ?>
        </div>
          <p style="text-align: right;"><i class="fa fa-tags"></i> <?php the_tags(''); ?></p>

        <!-- <nav id="nav-single">
          <h3 class="assistive-text"><?php _e( 'Read more', 'purduetwentyfourteen' ); ?></h3>
          <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav"><i class="fa fa-arrow-circle-left"></i></span> %title', 'purduetwentyfourteen' ) ); ?></span><br /><br />
          <span class="nav-next"><?php next_post_link( '%link', __( '%title <span class="meta-nav"><i class="fa fa-arrow-circle-right"></i></span>', 'purduetwentyfourteen' ) ); ?></span>
        </nav> -->
        </div>
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>
    </div>
    <?php get_sidebar('sidenav'); ?>
    <?php get_sidebar('sidecontent'); ?>
  </div>
</div>
<?php get_footer(); ?>