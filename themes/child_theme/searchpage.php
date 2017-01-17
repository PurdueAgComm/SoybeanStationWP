<?php
/*
Template Name: Search Page
*/
?>

<?php
get_header(); ?>

      <style>
      .breadcrumb{
       display: none;
      }
      </style>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
      <br>

      <?php get_search_form(); ?>

    </div><!-- #main -->
  </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();