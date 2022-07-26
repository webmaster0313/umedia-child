<?php
/**
 * Partial template for content in intelauto.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="intelligent-automation"><!-- .intelligent-automation -->
    <div class="container px-md-0">
      <div class="row align-items-center">
        <div class="col-auto col-md-6">
          <div class="titlebar">
            <h1 class="page-title pl-3 pl-sm-0"><?php the_field('approach_header_title'); ?></h1>
            <div class="primary-bar-extension"></div>
          </div>
        </div>
      </div>
      <div class="container mt-3">
        <div class="row">
          <div class="breadcrumb breadcrumb-mobile text-primary px-3 px-md-2">
            <a href="<?php echo get_home_url(); ?>/what-we-do/#transformation">
            < Transformation
            </a>
          </div>
        </div>
      </div>
    <!-- ***** Super Body Description ***** -->
      <div class="super-body section-margin mx-4 mx-sm-0">
        <div class="row">
          <div class="col-12">
            <?php the_field('approach_super_body'); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Middle Section: Approach ***** -->
    <div class="container-fluid px-0 section-margin my-0 my-sm-4">
      <div class="approach">
        <div class="section-header bg-blue px-4 px-md-0">
          <div class="container px-0">
            <div class="section-copy">
              <h2>APPROACH</h2>
              <?php the_field('approach_description'); ?>
            </div>
            <div class="section-element"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- ***** Capabilities ***** -->
    <div class="container">
      <div class="capabilities-header">
        <h2>CAPABILITIES</h2>
      </div>
    </div>
    <div class="container section-margin">
    <?php if( have_rows('approach_capabilities') ): ?>
      <?php while( have_rows('approach_capabilities') ): the_row();
        $brandImg = get_sub_field('capabilities_img');
        $brandTitle = get_sub_field('capabilities_title');
        $brandDesc = get_sub_field('capabilities_description');
      ?>
      <div class="row py-5">
        <div class="col-4 col-sm-4 col-md-3">
          <div class="capabilities-image text-center">
            <img src="<?php echo $brandImg; ?>" alt=""/>
          </div>
        </div>
        <div class="col-8 col-sm-8 col-md-9">
          <div class="capabilities-title">
            <h2><?php echo $brandTitle; ?></h2>
          </div>
          <div class="capabilities-desc">
            <?php echo $brandDesc; ?>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <!-- ***** Seperator ***** -->
    <div class="container section-margin seperator"></div>

    <!-- ***** Getting Started ***** -->
    <div class="container section-margin">
      <div class="getting-started">
        <h2>Getting Started</h2>
        <div class="subtext"><?php the_field('getting_started_description'); ?></div>
      </div>
    </div>

    <!-- ***** Left Image - Automation Education Session ***** -->
    <div class="container-fluid left-content px-0 section-margin" style="position:relative;z-index:0;">
      <div class="container px-0" style="z-index:2;">
        <div class="col-sm-12 col-md-6  py-3" style="z-index:9999;">
          <h2><?php echo get_field('auto_ed_title') ?></h2>
          <div class="description">
              <?php echo get_field('auto_ed_desc') ?>
          </div>
          <?php if( !empty(get_field("auto_ed_cta")) ): ?>
          <div class="button">
              <a href="<?php the_field("auto_ed_cta"); ?>" target="_blank" class="btn-grad mb-4 mb-md-0" role="button" aria-pressed="true">
                  <?php the_field("auto_ed_cta_text"); ?>
              </a>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="left-content-image">
        <div class="image" style="background-image:url('<?php the_field("auto_ed_image"); ?>');"></div><!-- Start Right Section -->
        <div class="automation-element">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/careers-element.svg" alt=""/>
        </div>
      </div>
    </div>

    <!-- ***** Right Image - Automation Discovery Workshop ***** -->
    <div class="container-fluid right-content px-0 section-margin" style="position:relative;z-index:0;">
      <div class="right-content-image d-none d-md-block">
        <div class="image" style="background-image:url('<?php the_field("auto_work_image"); ?>');"></div><!-- Start Right Section -->
      </div>
      <div class="container px-0" style="z-index:2;">
        <div class="col-sm-12 offset-md-6 col-md-6 offset-lg-6 col-lg-6 py-5 py-md-3" style="z-index:9999;">
          <h2><?php echo get_field('auto_work_title') ?></h2>
          <div class="description">
              <?php echo get_field('auto_work_desc') ?>
          </div>
          <?php if( !empty(get_field("auto_work_cta")) ): ?>
          <div class="button">
              <a href="<?php the_field("auto_work_cta"); ?>" target="_blank" class="btn-grad mb-4 mb-md-0" role="button" aria-pressed="true">
                  <?php the_field("auto_work_cta_text"); ?>
              </a>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="d-block d-md-none right-content-image">
            <div class="image" style="background-image:url('<?php the_field("auto_work_image"); ?>');"></div><!-- Start Left Section -->
        </div>
    </div>

    <!-- ***** Left Image - Automation Quickstart ***** -->
    <div class="container-fluid left-content px-0 section-margin" style="position:relative;z-index:0;">
      <div class="container px-0" style="z-index:2;">
        <div class="col-sm-12 col-md-6  py-3" style="z-index:9999;">
          <h2><?php echo get_field('auto_quick_title') ?></h2>
          <div class="description">
              <?php echo get_field('auto_quick_desc') ?>
          </div>
          <?php if( !empty(get_field("auto_quick_cta")) ): ?>
          <div class="button">
              <a href="<?php the_field("auto_quick_cta"); ?>" target="_blank" class="btn-grad mb-4 mb-md-0" role="button" aria-pressed="true">
                  <?php the_field("auto_quick_cta_text"); ?>
              </a>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="left-content-image">
        <div class="image" style="background-image:url('<?php the_field("auto_quick_image"); ?>');"></div><!-- Start Right Section -->
      </div>
    </div>
</div><!-- end .intelligent-automation -->

<!-- ********** Insights and Experience Section ********** -->
<div class="insights">
   <div class="container-fluid bg-blue">
      <div class="row">
         <div class="container">
            <div class="row">
               <div class="col-12 text-left insights-title">
                  <h2>DIG IN > INTELLIGENT AUTOMATION</h2>
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

                  <?php if (is_page('intelligent-automation')) {
                     $the_query = new WP_Query( array(
                     'category_name' => 'intelligent-automation',
                     'post_type' => array('post', 'results', 'videos', 'events'),
                     'posts_per_page' => 10,
                     'order'=> 'ASC',
                     'orderby' => 'title'
                     ));
                  }
                  else {
                     // the query
                     $the_query = new WP_Query( array(
                     'cat' => $category->term_id,
                     'post_type' => array('post', 'results', 'videos', 'events'),
                     'posts_per_page' => 10,
                     'order'=> 'ASC',
                     'orderby' => 'title'
                     ));
                  }
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
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-element.png" alt="" />
               </div>

            </div>
         </div>
      </div>

   </div><!-- Container -->
</div><!-- Insights -->