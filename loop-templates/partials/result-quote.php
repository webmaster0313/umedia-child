<section class="quote">
  <blockquote cite="<?php the_sub_field('citation'); ?>">
      <?php the_sub_field('quote'); ?>
  </blockquote>
  <?php if( get_sub_field('citation') ): ?>
    <div><?php the_sub_field('citation'); ?></div>
  <?php endif; ?>
</section>