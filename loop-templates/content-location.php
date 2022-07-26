<?php
/**
 * Partial template for content in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="container px-3 px-md-0 pt-4 pt-md-0">
<div class="breadcrumb location"><?php //  get_breadcrumb(); ?><a href="<?php echo home_url('/contact', ''); ?>">Contact Us</a> &nbsp;&nbsp; > &nbsp;&nbsp;<?php the_title(); ?></div><!-- Breadcrumbs -->
</div>

<!-- ********** Intro Copy ********** -->

<div class="container mb-5 px-3 px-md-0">
   <div class="intro-copy">
      <h2>
      <?php echo the_field('intro_copy'); ?>
      </h2>
   </div>
</div>

<!-- ********** Leadership ********** -->

<?php if( have_rows('leaders') ): ?>
	<?php
	echo '<div class="container pt-5">';
	echo '<div class="location-subtitles">';
	echo '<h2>LEADERSHIP</h2>';
	echo '</div>';
	echo '</div>';
	?>
	<?php else:
		echo '';
	endif; ?>



<div class='leadership'>
   <div class="container">
      <div class='row row-eq-height'>
         <?php if( have_rows('leaders') ): ?>
         <?php while( have_rows('leaders') ): the_row();
            // $leadership_image = get_sub_field('leadership_image');
            $alt = get_sub_field('image_alt_tag');
            $leadership_name = get_sub_field('leadership_name');
            $leadership_location = get_sub_field('leadership_location');
            $leadership_title = get_sub_field('position_title');
            $leadership_info = get_sub_field('leadership_info');
            $leadership_linkedin = get_sub_field('social_url');
         ?>
         <?php if($leadership_name ): ?>

            <div class='col-6 col-sm-6 col-md-4 px-3 py-5'>
            <div class='leadership-card'>
               <div class="leadership-image" style="background-image:url('<?php echo get_sub_field('leadership_image'); ?>');"></div>
               <div class='info'>
                  <div class="content">
                     <h2><?php echo $leadership_location; ?></h2>
                     <p><?php echo $leadership_info; ?></p>
                     <!--<button>Read More</button>-->
                     <?php if ( $leadership_linkedin ): ?>
                        <a href="<?php echo $leadership_linkedin;?>" target="_blank"><img style="border-radius: 0px!important" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin-blue.svg" alt="<?php echo $alt; ?>" /></a>
                     <?php else: endif; ?>
                  </div>
               </div><!-- .info -->
            </div><!-- .leader-card -->

            <div class='leadership-card-info'>
               <h2><?php echo $leadership_name; ?></h2>
               <span><?php echo $leadership_title; ?></span>
            </div><!-- .leadership-card-info -->
         </div><!-- .col-md-4 -->
         <?php else: ?>
            <div class='d-none d-md-flex col-md-4 px-3 location-leadership-empty'></div>
         <?php endif; ?>
         <?php endwhile; endif; ?>
      </div><!-- .row -->
   </div><!-- .container-fluid -->
</div><!-- .leadership -->

<!-- ********** Careers Section ********** -->
<div class="container-fluid careers px-0 section-margin" style="position:relative;z-index:0;">
   <div class="container" style="z-index:2;">
      <div class="row align-items-center">
         <div class="col-sm-12 col-md-7 col-lg-6 py-5 mb-5" style="z-index:9999;">
            <div class='location-subtitles text-uppercase'>
               <h2>CAREERS</h2>
            </div>
            <div class="description pr-2 ml-0">
               <?php echo get_field('careers_description') ?>
            </div>
            <div class="button">
               <a href="<?php echo get_field('careers_link') ?>" class="btn-grad" role="button" aria-pressed="true">
                  <?php echo get_field('careers_button') ?>
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="careers-image">
      <div class="image" style="background-image: url('<?php the_field('careers_image') ?>');"></div><!-- Start Right Section -->
      <div class="careers-element">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/careers-element.svg" />
      </div>
   </div>
</div><!-- End Careers Section -->

<!-- ********** Partners ********** -->
<div class="container partners section-margin">
   <div class="row">
      <div class="col-12 py-5" style="z-index:9999;">

         <div class='location-subtitles text-uppercase'>
            <h2><?php the_field('partners_header'); ?></h2>
         </div>

         <div class="container py-5">
            <div class="row align-items-center">
            <?php if( get_field('our_partners') ): ?>
            <?php while( the_repeater_field('our_partners') ): ?>

               <div class="col-md-6 col-lg-3 mb-5 partner-image text-center">
                  <img src="<?php the_sub_field('partners_image'); ?>" alt="<?php the_sub_field('alt'); ?>" />
               </div>

            <?php endwhile; ?>
            <?php endif;?>
            </div>
         </div>

      </div>
   </div>
</div>

<!-- ********** Insights and Experience Section ********** -->
<div class="insights">
   <div class="container-fluid bg-blue">
      <div class="row">
         <div class="container">
            <div class="row">
               <div class="col-12 text-left insights-title">
                  <h2>DIG IN > <?php echo the_field('location_title'); ?></h2>
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
	               	if (is_page('richmond')) {
                     $the_query = new WP_Query( array(
                     //'cat' => $category->term_id,
                     //'cat' => get_cat_ID('richmond'),
                     'category_name' => 'richmond',
                     'post_type' => array('post', 'results', 'videos', 'events'),
                     'posts_per_page' => 10,
                     'order'=> 'DESC',
                     'orderby' => 'date'
                     ));
	                  }
	                  elseif (is_page('nashville')) {
	                     $the_query = new WP_Query( array(
	                     //'cat' => $category->term_id,
	                     //'cat' => get_cat_ID('nashville'),
	                     'category_name' => 'nashville',
                        'post_type' => array('post', 'results', 'videos', 'events'),
	                     'posts_per_page' => 10,
	                     'order'=> 'DESC',
						 'orderby' => 'date'
						 ));
	                  }
	                  elseif (is_page('washington-dc')) {
	                     $the_query = new WP_Query( array(
	                     //'cat' => $category->term_id,
	                     //'cat' => get_cat_ID('washington-dc'),
	                     'category_name' => 'washington-dc',
                        'post_type' => array('post', 'results', 'videos', 'events'),
	                     'posts_per_page' => 10,
	                     'order'=> 'DESC',
						 'orderby' => 'date'
	                     ));
	                  }
	                  else {
	                     // the query
	                     $the_query = new WP_Query( array(
	                     'cat' => $category->term_id,
                        'post_type' => array('post', 'results', 'videos', 'events'),
	                     'posts_per_page' => 10,
	                     'order'=> 'DESC',
						 'orderby' => 'date'
	                     ));
	                  }
                  ?>
                  <?php /*
                     // the query
                     $the_query = new WP_Query( array(
                     'cat' => $category->term_id,
                     'post_type' => array('post', 'results'),
                     'posts_per_page' => 10,
                     'order'=> 'ASC',
                     'orderby' => 'title'
                     ));
                 */ ?>
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
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-element.png" />
               </div>

            </div>
         </div>
      </div>

   </div><!-- Container -->
</div><!-- Insights -->