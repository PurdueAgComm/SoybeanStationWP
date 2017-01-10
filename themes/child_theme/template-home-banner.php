<?php
/**
 *
 * Template Name: Home Banner Page
 *
**/

get_header(); ?>

<div class="introContainer rowContainer" id="introRow">
  <div class="shader"></div>
  <div class="container intro">
    <div class="icon">
      <i class="fa fa-leaf"></i>
    </div>
    <h1>PLANT SCIENCES</h1>
    <div class="divider"></div>
    <div class="content">
      <!-- <p class="content-text">Our mission is to be a global leader in delivering innovation, technology, and the human capacity necessary to help farming operations of all sizes produce food, fuel, and fiber more efficiently.</p> -->
    </div>
  </div>
</div>

<div class="proofPointContainer rowContainer">
  <div class="container">
    <div class="proofPoint row">
      <h1>Working together to move plant science discoveries from research to commercialization</h1>
    </div>
  </div>
</div>

<div class="linksContainer rowContainer" id="linksRow">
  <div class="container">
    <div class="links row num-col-4">
      <div class="columnPair">
        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-flask"></i>
            </div>
            <h3>Research</h3>
            <div class="divider"></div>
            <ul>
              <li><a href="center-for-molecular-agriculture-2/">Center for Molecular Agriculture</a></li>
              <li><a href="phenotyping-2/">Phenotyping</a></li>
              <li><a href="collaboration-2/">Collaboration</a></li>
            </ul>
          </div>
        </div>

        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <h3>Education</h3>
            <div class="divider"></div>
            <ul>
              <li><a href="http://admissions.purdue.edu/majors/colleges.php?ClgCd=AGR">Majors</a></li>
              <li><a href="teaching-labs/">Teaching Labs</a></li>
              <li><a href="https://ag.purdue.edu/oap/MASI/Pages/default.aspx">Summer Institutes</a></li>
              <li><a href="https://ag.purdue.edu/oap/Pages/default.aspx">Academic Resources</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="columnPair">
        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-globe"></i>
            </div>
            <h3>Impact</h3>
            <div class="divider"></div>
            <ul>
              <li><a href="agricultural/">Agricultural</a></li>
              <li><a href="academic/">Academic</a></li>
              <li><a href="technology-commercialization/">Technology & Commercialization</a></li>
            </ul>
          </div>
        </div>

        <div class="columnContainer col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="column">
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <h3>Support</h3>
            <div class="divider"></div>
            <ul>
              <li><a href="opportunities/">Opportunities</a></li>
              <li><a href="partners/">Partners</a></li>
              <li><a href="https://securelb.imodules.com/s/1461/campaign/give.aspx?sid=1461&gid=1010&pgid=3175&cid=7440&bledit=1&sort=1&dids=2107.35&appealcode=13860">Make a Gift</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
      <div class="col-md-6">
        <div class="newsItem">
          <h1 class="newsItem-Title">Features</h1>
          <?php
            // we need to get the last three posts that are tagged as news that are published
            $args = array( 'numberposts' => '4', 'post_status' => 'publish', 'category' => '13');
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
            <div class="col-xs-6">
              <?php if(!empty($thumb_id)) : ?>
                <img style="min-width: 250px;" src="<?php echo $featured_thumb_URL; ?>" class="img-responsive hidden-xs" alt="<?php echo $recent["post_title"]; ?>">
              <?php else: ?>
                <img src="http://placehold.it/350x150&text=No Image" class="img-responsive hidden-xs">
              <?php endif; ?>
              <h5><a href="<?php echo get_permalink($recent["ID"]); ?>"><?php echo $recent["post_title"]; ?></a></h5>
              <p><?php echo $blurb  . " [...]"; ?></p>
            </div>
          <?php endforeach; ?>
          <br style="clear: both;">
        </div> <!-- /.newsItem -->
      </div> <!-- /.col-md-6-->
      <div class="col-md-6">
        <div class="newsItem">
          <h1 class="newsItem-Title">News</h1>
            <?php
              // we need to get the last three posts that are tagged as news that are published
              $args = array( 'numberposts' => '3', 'post_status' => 'publish', 'category' => '6');
              $recent_posts = wp_get_recent_posts( $args );
              $i = 0;
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
              <!-- One News Story -->
              <?php if(!empty($thumb_id)) : ?>
                  <div class="col-sm-4">
                    <img src="<?php echo $featured_thumb_URL; ?>" class="img-responsive hidden-xs" alt="<?php echo $recent["post_title"]; ?>">
                  </div>
              <?php else: ?>
                  <div class="col-sm-4 text-center">
                    <i style="color: #dadada;" class="fa fa-newspaper-o fa-5x"></i>
                    <!-- <img src="http://placehold.it/350x150" class="img-responsive hidden-xs"> -->
                  </div>
              <?php endif; ?>
              <div class="col-sm-8">
                <div class="news-padding-fix">
                  <a href="<?php echo get_permalink($recent["ID"]); ?>"><h4><?php echo $recent["post_title"]; ?></h4></a>
                  <span class="meta-news"></span>
                  <p><?php echo $blurb . " [...]" ?></p>
                  <a href="<?php echo get_permalink($recent["ID"]); ?>" class="btn btn-sm btn-default clear-fix">Read More</a>
                  <?php if($i == 2) : ?>
                    <br><br>
                    <a class="btn btn-sm btn-default btn-block" href="/plantsciences/recent-news">View All News &raquo;</a>
                  <?php endif; ?>
                </div>
              </div>
              <!-- End News Story -->
            <?php
            $i++;
            endforeach; ?>
          </div>

      </div>
    </div>
  </div>
</div>


<?php
//get_sidebar();
get_footer();


