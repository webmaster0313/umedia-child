
<!-- section-hero -->
<?php
$image_value = get_field('hero_image');
?>

<?php if( $image_value == true ): ?>
   <section class="hero-image" style="background-image: linear-gradient(to left, transparent, rgba(52,52,52, .85) 100%), url('<?php the_field('hero_image') ?>')">
      <div class="hero-image-wrapper">
         <div class="container">
            <div class="row animate__animated animate__fadeIn">
               <div class="col-lg-6 col-md-7 col-sm-12 hero-description">
                  <h1><?php the_field('hero_title') ?></h1>
                  <span>
                     <?php the_field('hero_info') ?>
                  </span>
               </div>
            </div>
            <div class="animate__animated animate__fadeInLeft">
               <div class="hero-subtitle-wrapper d-inline-block">
                  <div class="hero-subtitle">
                     <h2><?php the_field('hero_subtitle') ?></h2>
                  </div>
                  <div class="hero-subtitle-wrapper-extension"></div>
               </div>
            </div><!-- .row -->
         </div><!-- .container -->
      </div><!-- .hero-wrapper -->
   </section>

<?php
$video_value = get_field('hero_video');
?>

<?php else : ?>
   <section id="hero-video-parent" class="hero-video">
   <div class="section-hero__decoration-start"></div>
      <video  class="video-background video-background__file" autoplay loop muted playsinline>
      <?php
         $mp4 = get_field('hero_video');
         if($mp4) : ?>
               <source src="<?php echo $mp4; ?>" type="video/mp4" class="video-file">
         <?php endif; ?>

      </video>
      <div id="hero-video-child" class="hero-video-wrapper">
         <div class="container">
            <div class="row animate__animated animate__fadeIn">
               <div class="col-lg-6 col-md-7 col-sm-12 hero-description">
                  <h1><?php the_field('hero_title') ?></h1>
                  <span>
                     <?php the_field('hero_info') ?>
                  </span>
               </div>
            </div>
            <div class="animate__animated animate__fadeInLeft">
               <div class="hero-subtitle-wrapper d-inline-block">
                  <div class="hero-subtitle">
                     <h2><?php the_field('hero_subtitle') ?></h2>
                  </div>
                  <div class="hero-subtitle-wrapper-extension"></div>
               </div>
            </div><!-- .row -->
         </div><!-- .container -->
      </div><!-- .hero-wrapper -->
   </section>
<?php endif; ?>

