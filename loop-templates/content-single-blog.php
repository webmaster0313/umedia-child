<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="container">
   <div class="breadcrumb blog text-primary px-0"><a href="<?php echo get_home_url(); ?>/digging-in-blog">< Digging In</a></div><!-- Breadcrumbs -->
</div>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="container blog-post px-4">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

<!-- ********** Check to see if author is UDig. If so, hide author box. ********** -->
<?php
global $authordata;
$username = $authordata->user_login;
if ( $username == 'UDig' ) : ?>

<?php else: ?>

<?php echo do_shortcode( '[author_box layout="inline_avatar" show_title="false"]' ); ?>

<?php endif;
// End Author Section
?>
<!-- ********** End Author Section ********** -->

<?php
   $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
   remove_all_filters('posts_orderby'); // ADDED
   $current_cat = get_primary_category($post->ID);

   if ($current_cat){
   $the_query = new WP_Query( array (
         'post_type' => array('post', 'results', 'videos', 'events'),
         'category_name' => $current_cat,
         'post_status' => 'publish',
         'posts_per_page' => 10,
         'orderby' => 'date',
         'order' => 'DESC',
         'offset' => 0,
         'post__not_in' => array( $post->ID ),
         'paged' => $paged
      ));
   }
   else {
   $the_query = new WP_Query( array (
      'post_type' => array('post', 'results', 'videos', 'events'),
      'post_status' => 'publish',
         'posts_per_page' => 10,
         'orderby' => 'date',
         'order' => 'DESC',
         'offset' => 0,
         'post__not_in' => array( $post->ID ),
         'paged' => $paged
      ));
   }

?>

<?php
$posts = get_posts(array('category_name' => $current_cat));
 if (count($posts) <= 4 ){

 }
 else {  ?>

<!-- ********** Insights and Experience Section ********** -->
<div class="insights" style="overflow:hidden!important">
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
               </div><!-- col-sm-12 col-md-10 offset-md-2 col-lg-11 offset-lg-1 pb-4 -->
               <!-- Background Element -->
               <div class='blog-element'>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-element.png" alt="" />
               </div>

            </div><!-- ROW -->
         </div><!-- container px-0 -->
      </div><!-- ROW -->

   </div><!-- Container -->
</div><!-- Insights -->
<?php
 }
?>