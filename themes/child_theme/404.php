<?php get_header(); ?>
      <style>
      .breadcrumb{
       display: none;
      }
      </style>

<div id="main-content">
    <div class="container">
        <div id="content-area" class="clearfix">
            <div id="left-area">
                <article id="post-0" <?php post_class( 'et_pb_post not_found' ); ?>>
                    <h1><?php esc_html_e('Sorry, Boilermaker. That page cannot be found.','Divi'); ?></h1>
                    <p><?php esc_html_e('Whoops. Looks like the page you were looking for doesn\'t exit. Maybe try searching for something else using the search bar below', 'Divi'); ?></p>
                </article> <!-- .et_pb_post -->
            </div> <!-- #left-area -->
<div class="row" style="margin-left:-4px;">
  <form class="form-inline" role="search" method="get" id="searchform"
      class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
          <input class="form-control" placeholder="Search" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
          <input class="btn btn-default" type="submit" id="searchsubmit"
              value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
  </form>
</div>
<br>
        </div> <!-- #content-area -->
    </div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>
