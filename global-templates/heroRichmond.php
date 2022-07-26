<div class="hero-image" style="background-image: linear-gradient(to left, transparent, rgba(52,52,52, .85) 100%), url('<?php the_field('hero_image') ?>')">
	<div class="hero-wrapper">
		<div class="container-fluid">
			<div class="row animate__animated animate__fadeIn animate__slower">
				<div class="col-lg-6 col-md-8 col-sm-12 hero-description">
						<h1 class="mb-5"><?php the_field('hero_title') ?></h1>
						<span class="mb-5">
							<?php the_field('hero_info') ?>
						</span>
				</div>
			</div>
			<div class="row animate__animated animate__fadeInLeft animate__slower">
				<div class="hero-subtitle-wrapper">
						<div class="col-lg-12 col-sm-12 hero-subtitle">
							<h2><?php the_field('hero_subtitle') ?></h2>
						</div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .hero-wrapper -->
</div>