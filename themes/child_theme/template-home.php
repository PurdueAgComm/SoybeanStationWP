<?php
/**
 *
 * Template Name: Home Page with Banner
 *
**/

get_header(); ?>

      <style>
      .breadcrumb{
       display: none;
      }
      </style>

<div class="full-width-banner" style="background-image: url('PLACE IMAGE URL HERE - 1660 x 600');">
  <div class="container">
    <div class="col-lg-12">
      <div class="shader">
      <article>
        <div class="fullwidthheader">Soybean Station</div>
        <p class="fullwidthparagraph">Delivering First Class Soybean Information</p>
      </article>
      </div>
    </div>
  </div>
</div>
<br>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php get_template_part( 'content', 'home' ); ?>
      </div>
    </div>
  </div>
<?php endwhile; // end of the loop. ?>
<br>
<?php
//get_sidebar();
get_footer();


