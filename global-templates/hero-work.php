
<!-- section-hero -->

<?php 
   $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
   global $post;
   $author_id = $post->post_author;
?>

<?php if( $backgroundImg == true ): ?>
   <section class="hero-work" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
      <div class="hero-image-wrapper">
         <div class="container-fluid">
            <div class="row animate__animated animate__fadeInLeft">
               
            </div><!-- .row -->
         </div><!-- .container -->
      </div><!-- .hero-wrapper -->
   </section>

<?php endif; ?>
