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


<?php
//get_sidebar();
get_footer();


