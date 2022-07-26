<?php
/**
 * Single video post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<div class="container px-0 pt-3 pt-md-4">
   <div class="row align-items-center">
      <div class="col-8-auto col-6-auto mb-5 mb-md-3 pb-4 pb-md-0">
         <!-- Title Pill -->
            <div class="titlebar">
               <h1 class="page-title pl-3 pl-sm-0">
                  <?php the_field('video_title'); ?>
               </h1>
               <div class="primary-bar-extension"></div>
            </div>
         </div>
   </div>
</div>
<div class="video-post">
   <div class="container px-3 px-md-0">
      <div class="video-description"><!-- Subhead Title -->
         <?php the_field('video_description'); ?>
      </div>
   </div>
   <div class="container px-3 px-md-0">
      <div class="video">
         <div class="flex-content">
            <!-- YOUTUBE VIDEO -->
            <div class="ytvideo" data-video="<?php the_field('video_url'); ?>"  style="width: 100%; height: 600px; background-position: center; background-size: cover; background-image: linear-gradient(transparent, rgba(0,0,0, .31) 100%), url(<?php the_field('video_image'); ?>)" >
            <div class="seo"><!-- Have a meaningful description of the video here --></div>
            <span class="playbutton">
            <?xml version="1.0" encoding="UTF-8"?>
            <svg width="175px" height="200px" viewBox="0 0 175 200" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>PLAY</title>
            <defs>
            <rect x="0" y="136" width="1241" height="699" id="rect-1"></rect>
            </defs>
            <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="WORK-Post-3" transform="translate(-689.000000, -4050.000000)">
            <g id="VIDEO" transform="translate(162.000000, 3664.000000)">
            <g id="PLAY" transform="translate(527.000000, 386.000000)" fill="#FFFFFF">
            <path d="M167.405729,86.7288073 L23.0683659,2.12448993 C12.8477472,-3.86626113 0,3.52462715 0,15.3948416 L0,184.604868 C0,196.475082 12.8477472,203.866666 23.0683659,197.875219 L167.406423,113.269511 C177.531308,107.335099 177.531308,92.6639146 167.405729,86.7288073" id="Fill-1"></path>
            </g>
            </g>
            </g>
            </g>
            </svg>
            </span>
            </div>
         </div><!-- .flex-content -->
      </div><!-- .video -->
   </div>
</div>

<!-- Slider -->

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
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-element.png" alt="" />
               </div>

            </div>
         </div>
      </div>

   </div><!-- Container -->
</div><!-- Insights -->
