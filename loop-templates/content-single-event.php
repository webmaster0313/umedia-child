<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="events-page">

<div class="container px-md-0">
  <div class="row justify-content-between">
      <div class="col-auto col-md-5">
        <div class="titlebar">
          <h1 class="page-title pl-3 pl-sm-0"><?php the_field('event_title'); ?></h1>
          <div class="primary-bar-extension"></div>
        </div>
        <div class="breadcrumb blog text-primary px-3 px-md-0 mb-0 mt-5">
          <a href="<?php echo get_home_url(); ?>/digging-in">
          < Digging In
          </a>
        </div>
      </div>
      <div class="col-4 col-4">
        <div class="event-date"><h2><?php the_field('event_date'); ?></div></h2>
        <div class="event-location"><h3><?php the_field('event_location'); ?></h3></div>

        <?php
        if (get_field('registration_link') == true ) { ?>
         <a href=" <?php the_field('registration_link'); ?>" class="btn-grad" role="button" aria-pressed="true">
        <?php if ( get_field( 'button_text' ) ): ?>
          <?php the_field('button_text'); ?>
        <?php else: // field_name returned false ?>
          Register
        <?php endif; // end of if field_name logic ?>
        </a>
        <?php
        }
        else {
        }
         ?>
      </div>
    </div>
  </div>

  <div class="container px-3 px-md-0 mt-5">
    <div class="events-superbody"><!-- Subhead Title -->
      <h2>
        <?php the_field('event_superbody'); ?>
      </h2>
    </div>
  </div>

  <div class="container event-details px-0">
    <div class="row">
      <div class="col-12">
        <div class="ml-0 text-left"><!-- Start Left Section -->
          <div class="event-desc">
            <?php the_field('event_details'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- ********** Check to see if author is UDig. If so, hide author box. ********** -->
<?php
global $authordata;
$username = $authordata->user_login;
if ( $username == 'UDig' ) : ?>

<?php else: ?>

<?php echo do_shortcode( '[author_box layout="inline_avatar_events" show_title="false"]' ); ?>

<?php endif;
// End Author Section
?>
<!-- ********** End Author Section ********** -->

  <!-- Insights Slider -->
  <div class="insights mt-5" style="overflow:hidden!important; margin-top:8rem!important;">
    <div class="container-fluid bg-blue">
        <div class="row">
          <div class="container">
              <div class="row">
                <div class="col-12 text-left insights-title">
                    <h2>DIG IN >
                      <?php
                        $category = get_the_category();
                        echo '
                        ';
                        echo get_primary_category($category);
                        echo '
                        ';
                      ?>
                    </h2>
                </div>
              </div><!-- Inner Row -->
          </div><!-- Inner Container -->
        </div><!-- Row -->
    </div>
    <div class="container-fluid bg-half-blue">
        <div class="row">
          <div class="container px-0">
              <div class="row">
                <div class="col-sm-12 col-md-10 offset-md-2 col-lg-11 offset-lg-1 pb-4">
                    <div class="slider-group">
                    <?php
                      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                      remove_all_filters('posts_orderby'); // ADDED
                      $current_cat = get_primary_category($post->ID);
                      $the_query = new WP_Query( array (
                          'post_type' => array('results', 'post', 'videos', 'events'),
                          'category_name' => $current_cat,
                          'post_status' => 'publish',
                          'posts_per_page' => 10,
                          'orderby' => 'date',
                          'order' => 'DESC',
                          'offset' => 0,
                          'post__not_in' => array( $post->ID ),
                          'paged' => $paged
                      ));
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <div class="slider-item">
                          <a href="<?php echo get_permalink(get_the_ID()); ?>">
                            <div class="slider-card">
                            <?php $backgroundImg = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                                <div class="img" style="background-image: url('<?php echo $backgroundImg; ?>');"></div>
                                <div class='slider-wrapper'>
                                <?php
                                  $cats = array();
                                  foreach (get_the_category($post_id) as $c) {
                                  $cat = get_category($c);
                                  array_push($cats, $cat->name);
                                  }

                                  if (sizeOf($cats) > 0) {
                                  $post_categories = implode(', ', $cats);
                                  } else {
                                  $post_categories = 'Not Assigned';
                                  }
                                ?>
                                  <div class='category'>
                                      <h3>
                                      <?php
                                          $post_type = get_post_type( $post->ID );
                                          if ($post_type == 'results') {
                                             echo 'Work';
                                          }
                                          elseif ($post_type == 'videos') {
                                             echo 'Video';
                                          }
                                          elseif ($post_type == 'events') {
                                             echo 'Event';
                                          }
                                          else {
                                             echo'Blog';
                                          }
                                       ?>
                                      </h3>
                                  </div>

                                  <div class='title'>
                                    <?php
                                    $post_type = get_post_type( $post->ID );
                                    if ($post_type == 'results') : ?>
                                       <h2><?php echo get_field('subhead'); ?></h2>

                                    <?php elseif ($post_type == 'post') : ?>
                                       <h2><?php the_title(); ?></h2>

                                    <?php elseif ($post_type == 'events') : ?>
                                       <h2><?php echo the_field('event_title'); ?></h2>

                                    <?php elseif ($post_type == 'videos') : ?>
                                       <h2><?php the_field('video_title'); ?></h2>

                                    <?php else : ?>
                                    <h2><?php the_title(); ?></h2>

                                    <?php endif; ?>
                                 </div>

                                </div><!-- .slider-wrapper -->
                            </div><!-- .slider-card -->
                          </a>
                      </div><!-- End Slider Item -->
                    <?php endwhile; endif; wp_reset_postdata(); wp_reset_query(); ?>

                    </div> <!-- .slider-group -->
                </div>
                <!-- Background Element -->
                <div class='blog-element'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-element.png"  alt=""/>
                </div>
              </div>
          </div>
        </div>
    </div><!-- Container -->
  </div><!-- Insights -->
</div>