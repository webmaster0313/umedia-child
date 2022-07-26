<?php
/**
 * Partial template for content in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="contact">
   <div class="container px-md-0">
      <div class="row align-items-center">
         <div class="col-8 col-md-6">
            <div class="titlebar">
               <h1 class="page-title pl-3 pl-sm-0"><?php the_field('title_bar_title'); ?></h1>
               <div class="primary-bar-extension"></div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="breadcrumb blog text-primary px-0"><a href="<?php echo get_home_url(); ?>/about"><&nbsp;&nbsp;Who We Are</a></div><!-- Breadcrumbs -->
</div>
<div class='leadership'>
   <div class="container">
      <div class='row row-eq-height'>
         <?php if( have_rows('team') ): ?>
         <?php while( have_rows('team') ): the_row(); 
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
            <div class='d-none d-md-flex col-md-4 px-3 leadership-empty'></div>
         <?php endif; ?>
         <?php endwhile; endif; ?>
      </div><!-- .row -->
   </div><!-- .container-fluid -->
</div><!-- .leadership -->