
<!-- section-hero -->

<?php 
   $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
   global $post;
   $author_id = $post->post_author;
?>

<?php if( $backgroundImg == true ): ?>
   <section class="hero-image post" style="background-image: linear-gradient(to left, transparent, rgba(52,52,52, .85) 100%), url('<?php echo $backgroundImg[0]; ?>')">
      <div class="hero-image-wrapper">
         <div class="container">
            <div class="row animate__animated animate__fadeInLeft">
               <div class="hero-subtitle-wrapper">
                  <div class="hero-subtitle">
                     <h2><?php the_title( '<div>', '</div>' ); ?></h2>
                     <?php
                     // Author ID for Beta: 4265.
                     if ( $author_id == 2 ) : ?>
                     <?php else: ?>
                        <h3 class="text-white mt-4">By <?php // the_author_meta( 'display_name', $author_id ); ?> <?php echo do_shortcode( '[author_box layout="inline" show_title="false"]' ); ?></h3>
                     <?php endif; ?>
                  </div>
                  <div class="hero-subtitle-wrapper-extension"></div>
               </div>
            </div><!-- .row -->
         </div><!-- .container -->
      </div><!-- .hero-wrapper -->
   </section>
   
<?php endif; ?>
