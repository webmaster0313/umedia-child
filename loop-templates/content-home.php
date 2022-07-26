<!-- ********** About Section ********** -->
<div class="about"><!-- Start Left Section -->
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-5 left-section">
            <div class="mx-auto" style="position:relative;">
               <span class="circle--element"></span>
               <div class="circular--landscape">
                  <div class="image" data-stellar-background-ratio="0.9" style="background-image: url('<?php the_field('about_image') ?>');"></div>
                  <div class="image-overlay"></div>
               </div>
            </div>
         </div><!-- End Left Section -->
         <div class="col-12 col-md-7 right-section"><!-- Start Right Section -->
            <h2><?php echo get_field('about_title') ?></h2>
            <div class="description">
               <?php echo get_field('about_description') ?>
            </div>
            <div>
               <a href="<?php echo get_field('about_link') ?>" class="btn-grad" role="button" aria-pressed="true">
                  <?php echo get_field('about_button') ?>
               </a>
            </div>
         </div><!-- End Right Section -->
      </div><!-- Row -->
   </div><!-- Container -->
</div><!-- End About Section -->

<!-- Services Section -->

<div class="container">
   <div class="services card">
      <h2><?php echo get_field('service_title') ?></h2>
      <?php if( have_rows('services_offered') ): ?>
         <?php while( have_rows('services_offered') ): the_row();
            $image = get_sub_field('service_image');
            $type = get_sub_field('service_type');
            $description = get_sub_field('service_description');
            $link = get_sub_field('service_page');
         ?>
            <?php
               if( $link ):
               $link_url = $link['url'];
               $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="d-block" style="text-decoration: none!important" href="<?php echo $link_url; ?>" target="<?php echo esc_attr($link_target); ?>" aria-label="<?php echo $aria; ?>">
               <div class="card text-blue">
                  <div class="card-body">
                     <div class="row align-items-center">
                        <div class="col-12 col-md-3 mb-3 mb-md-0">
                           <div class="service-icon text-left text-md-center <?php echo lcfirst($type); ?>" style="position:relative;">
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                           </div>
                        </div>
                        <div class="col-12 col-md-9">
                           <h5 class="service-title">
                              <?php echo $type; ?>
                           </h5>
                           <div class="service-description">
                              <?php echo $description; ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </a>
            <?php endif; ?>
         <?php endwhile; ?>
      <?php endif; ?>
   </div>
</div>

<!-- Services Section -->

<!-- ********** Careers Section ********** -->
<div class="container-fluid careers px-0 section margin" style="position:relative;z-index:0;">
   <div class="container" style="z-index:2;">
      <div class="row align-items-center">
         <div class="col-sm-12 col-md-5 py-5 mb-5" style="z-index:9999;">
            <h2><?php echo get_field('careers_title') ?></h2>
            <div class="description ml-0">
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
      <div class="image" data-stellar-background-ratio="0.9" style="background-image: url('<?php the_field('careers_image') ?>');"></div><!-- Start Right Section -->
      <div class="careers-element">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/careers-element.svg" alt="" />
      </div>
   </div>
</div>
<!-- End Careers Section -->

<!-- ********** Insights and Experience Section ********** -->
<div class="insights">
   <div class="container-fluid bg-blue">
      <div class="row">
         <div class="container">
            <div class="row">
               <div class="col-12 text-left insights-title">
                  <h2><?php echo get_field('insights_title') ?></h2>
               </div>
            </div><!-- Inner Row -->
         </div><!-- Inner Container -->
      </div><!-- Row -->
   </div>
   <div class="container-fluid bg-half-blue">
      <div class="row">
         <div class="container px-0">
            <div class="row">
               <div class="col-12 col-sm-10 offset-sm-2 col-md-11 offset-md-1 pb-4">
                  <div class="slider-group">
                  <?php
                     // the query
                     $the_query = new WP_Query( array(
                     'cat' => $category->term_id,
                     'post_type' => array('post', 'results', 'videos', 'events'),
                     'posts_per_page' => 10,
                     'orderby' => 'post_date',
                     'order' => 'DESC',
                     ));
                  ?>
                  <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                     <div class="slider-item">
                        <a href="<?php echo get_permalink(get_the_ID()); ?>" class="slider-card">
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
                           <!--<div class='category'>
                              <h3>
                                 <?php
                                 // echo $post_categories;
                                 /*
                                 $primary_selected_category = get_post_meta( $post->ID, 'select_primary_category', true );
                                 if ( $primary_selected_category == true) {
                                    echo $primary_selected_category;
                                 } else {
                                    echo $post_categories;
                                 }
                                 */?>
                              </h3>
                           </div>-->

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
                        </a><!-- .slider-card -->
                     </div><!-- End Slider Item -->
                  <?php endwhile; endif; wp_reset_postdata(); wp_reset_query(); ?>

                  </div> <!-- .slider-group -->
               </div>
            </div>
               <!-- Background Element -->
               <div class='blog-element'>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-element.png" alt="" />
               </div>
         </div>
      </div>
   </div><!-- Container -->
</div><!-- Insights -->