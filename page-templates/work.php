<?php
/**
 * Template Name: Work
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'umedia_container_type' );

// if ( is_front_page() ) {
	// get_template_part( 'global-templates/hero' );
// }
?>
<div class="wrapper" id="full-width-page-wrapper">
	<div class="container-fluid px-0" id="content">
		<div class="row no-gutters">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
					<?php
					if ( have_posts() ) {
						// Start the Loop.
						while ( have_posts() ) {
							the_post();
							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'loop-templates/content', 'work' );
						}
					} else {
						//get_template_part( 'loop-templates/content', 'none' );
					}
					?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->
<?php
get_footer();