
<!-- section-hero -->

<?php 
   $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
   global $post;
   $author_id = $post->post_author;
?>

<?php if( $backgroundImg == true ): ?>
   <section class="hero-image work" style="background-image: url('<?php echo $backgroundImg[0]; ?>');  background-position: center center;">
      <div class="hero-image-wrapper location">
         <div class="container px-0">
            <div class="row no-gutters">
               <div class="col-9 col-md-5 my-3">
                  <div class="hero-subtitle-wrapper location w-100">
                     <div class="hero-subtitle">
                        <?php $hq = get_field('hq_indicator');?>
                        <?php if( !empty($hq) ): ?>
                           <div class="hq-location">
                              <div class="hq-marker">HQ</div>
                           </div>
                        <?php endif; ?>
                        <h2><?php echo the_field('location_title'); ?></h2>
                     </div><!-- .hero-subtitle -->
                     <div class="hero-subtitle-wrapper-extension"></div>
                  </div>
               </div><!-- .hero-subtitle-wrapper .location -->
               <div class="col-12 col-md-2">&nbsp;</div>
               <div class="offset-3 col-9 offset-md-0 col-md-5 mb-3 location-wrapper">
                  <div class="location-wrapper-wrapper-extension"></div>
                  <div class="location-element">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/careers-element.svg" />
                  </div>
                  <div class="location-address">
                  <?php
                     if (is_page('richmond')) : ?>
                     <div>
                        <a href="https://www.google.com/maps/place/8000+Franklin+Farms+Dr+%23200,+Richmond,+VA+23229/@37.6019742,-77.5479642,17z/data=!3m1!4b1!4m5!3m4!1s0x89b114c4b15b489b:0xf7b4e0fa168a3858!8m2!3d37.60197!4d-77.5457755" target="_blank" title="<?php echo the_field('location_address'); ?>">
                        <?php echo the_field('location_address'); ?>
                        </a>
                     </div>
                  <?php 
                     elseif (is_page('nashville')) : ?>
                     <div>
                        <a href="https://www.google.com/maps/place/3401+Mallory+Ln,+Franklin,+TN+37067/@35.9406862,-86.8213555,17z/data=!4m13!1m7!3m6!1s0x88647eb52e534c8f:0x47993141809fc69f!2s3401+Mallory+Ln,+Franklin,+TN+37067!3b1!8m2!3d35.940841!4d-86.8224852!3m4!1s0x88647eb52e534c8f:0x47993141809fc69f!8m2!3d35.940841!4d-86.8224852" target="_blank" title="<?php echo the_field('location_address'); ?>">
                        <?php echo the_field('location_address'); ?>
                        </a>
                     </div>
                     <?php endif; ?>
                     
                     <div><a style="color:#4c4c4c;" href="tel:<?php echo the_field('location_phone_link'); ?>" aria-label="Call UDig Toay!"><?php echo the_field('location_phone'); ?></a></div>
                     <div class="email"><a href='mailto:<?php echo the_field('contact_email'); ?>' aria-label="Contact UDig Toay!"><?php echo the_field('contact_email'); ?></a></div>
                  </div>
               </div>
            </div><!-- .row -->
         </div><!-- .container -->
      </div><!-- .hero-wrapper -->
   </section>
<?php endif; ?>
