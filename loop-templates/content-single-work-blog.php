<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<div class="container px-0 pt-3 pt-md-4">
   <div class="row align-items-center">
      <div class="col-12 col-md-6 mb-4 mb-md-3">
         <!-- Breadcrumbs -->
         <div class="breadcrumb blog text-primary px-3 px-md-0 mb-0">
            <a href="<?php echo get_home_url(); ?>/our-work">
               < Our Work
            </a>
         </div>
      </div>
      <div class="col-8 col-md-6 mb-5 mb-md-3 pb-4 pb-md-0">
         <!-- Title Pill -->
         <div class="category-title-bar">
            <div class="title">
               <?php echo the_field('cat_title'); ?>
            </div>
            <div class="category-title-bar-extension"></div>
         </div>
      </div>
   </div>
</div>
<div class="work-post">
   <div class="container px-3 px-md-0">
      <div class="subhead-title"><!-- Subhead Title -->
         <h2>
            <?php the_field('subhead'); ?>
         </h2>
      </div>
   </div>

   <!-- ********** Page Intro Section ********** -->
   <div class="container">
      <div class="page-intro">
         <?php echo the_field('intro_headline'); ?>
      </div>
   </div>

   <!-- ********** Let's Be Brief Section ********** -->
   <div class="container lets-be-brief">
      <div class="row">
         <div class="col-12">
            <div class="ml-0 ml-md-5 text-left"><!-- Start Left Section -->
               <h2>STRATEGIC SNAPSHOT</h2>
               <div class="descriptions">

                     <h3>Challenge</h3>
                     <span><?php echo the_field('brief_challenge'); ?></span>

                     <h3>Strategy</h3>
                     <span><?php echo the_field('brief_objective'); ?></span>

                     <h3>Outcome</h3>
                     <span><?php echo the_field('brief_solution'); ?></span>

               </div>
            </div><!-- End Left Section -->
         </div>
      </div>
      <div class="greige-side"></div>
      <!-- <img src="<?php // echo get_field('work_element') ?>" alt=""/> -->
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Services-Element.png" alt="" />

   </div>

   <!-- ********** Flex Sections ********** -->


   <div class="container py-5 px-0">
      <div class="results-flex-content">
         <?php
         // are there any rows within within our flexible content?
         if( have_rows('result_basic_flex') ):

            // loop through all the rows of flexible content
            while ( have_rows('result_basic_flex') ) : the_row();

            // QUOTE
            if( get_row_layout() == 'result_quote' )
            get_template_part('loop-templates/partials/result-quote', 'result_quote');

            endwhile; // close the loop of flexible content
            endif; // close flexible content conditional
            ?>
      </div>
      <div class="results-flex-content">
         <?php
         // are there any rows within within our flexible content?
         if( have_rows('result_basic_flex') ):

            // loop through all the rows of flexible content
            while ( have_rows('result_basic_flex') ) : the_row();

            // VIDEO
            if( get_row_layout() == 'result_video' ) {

               // echo the_sub_field('oembed_video');
               get_template_part('loop-templates/partials/single-featured-video', 'result_video');

            }

            endwhile; // close the loop of flexible content
            endif; // close flexible content conditional
            ?>
      </div>
   </div>

   <!-- ********** The Extended Version ********** -->
   <div class="container pt-3 pt-md-5 px-3 px-md-0">
      <div class="extended-version">
         <!-- ********** Challenge ********** -->
         <?php if ( get_field('challenges_text') ): ?>
         <div>
            <?php if ( get_field('challenges_title')) : ?>
               <h3><?php the_field('challenges_title'); ?></h3>
            <?php else: ?>
               <h3>Challenge</h3>
            <?php endif; ?>
            <?php echo the_field('challenges_text'); ?>
         </div>
         <?php else: ?>
         <?php endif; ?>

         <!-- ********** Strategy ********** -->
         <?php if ( get_field('strategy_text') ): ?>
         <div>
            <?php if ( get_field('strategy_title')) : ?>
               <h3><?php the_field('strategy_title'); ?></h3>
            <?php else: ?>
               <h3>Strategy</h3>
            <?php endif; ?>
            <?php echo the_field('strategy_text'); ?>
         </div>
         <?php else: ?>
         <?php endif; ?>

         <!-- ********** Solution ********** -->
         <?php if ( get_field('solution_text') ): ?>
         <div>
            <?php if ( get_field('solution_title')) : ?>
               <h3><?php the_field('solution_title'); ?></h3>
            <?php else: ?>
               <h3>Outcome</h3>
            <?php endif; ?>
            <?php echo the_field('solution_text'); ?>
         </div>
         <?php else: ?>
         <?php endif; ?>

      </div><!-- .extender-version -->
   </div><!-- .container -->

   <?php if( have_rows('solution_pills') ): ?>
      <!-- ********** What We Did ********** -->
      <div class="container pt-3 pt-md-5 px-3 px-md-0">
         <div class="what-we-did">
            <div class="title">
               <h2>How We Did It</h2>
            </div>
            <div class="row">
               <?php while( have_rows('solution_pills') ): the_row(); ?>
                  <div class="col-12 col-md-6">
                     <?php if( get_sub_field('solution_link')): ?>
                        <a href="<?php echo get_sub_field('solution_link'); ?>">
                           <?php echo get_sub_field('solution_text'); ?>
                        </a>
                     <?php else: ?>
                        <?php echo get_sub_field('solution_text'); ?>
                     <?php endif; ?>
                  </div>
               <?php endwhile; ?>
            </div>
         </div>
      </div><!-- .container -->
   <?php endif; ?>


   <!-- ********** Tech Stack ********** -->
   <?php if( get_field('intro_text_tech') ): ?>
      <div class="container py-0 px-3 px-md-0">
         <div class="tech-stack">
            <div class="title">
               <h2>Tech Stack</h2>
            </div>
            <div>
               <?php echo the_field('intro_text_tech'); ?>
            </div>
         </div>
      </div>
   <?php endif; ?>
</div>

<div class="insights" style="overflow:hidden!important">
   <div class="container-fluid bg-blue">
      <div class="row">
         <div class="container">
            <div class="row">
               <div class="col-12 text-left insights-title">
                  <h2>DIG IN >
	                  <?php /*
                        global $post;
                        $postcat = get_the_category( $post->ID );

                        // try print_r($postcat) ;

                        if ( ! empty( $postcat ) ) {
                        echo esc_html( $postcat[0]->name );
                        }
                    */
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
                  // the query
                    /*
	                 $the_query = new WP_Query( array(
                     'cat' => $category->term_id,
                     'post_type' => array('results', 'post'),
                     'posts_per_page' => 10,
                     'orderby' => 'post_date',
                     'order' => 'DESC',
                     ));
                     */

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
