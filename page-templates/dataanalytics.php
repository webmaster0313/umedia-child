<?php
/**
 * Template Name: Data Analytics
 *
 *
 *  
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
$container = get_theme_mod( 'umedia_container_type' );
?> 
<div class="wrapper pb-0" id="full-width-page-wrapper">
	<div class="container-fluid px-0" id="content">
		<div class="row no-gutters">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
					<?php
					if ( have_posts() ) {
						// Start the Loop.
						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/content', 'data-analytics' );
						}
					} else {
						get_template_part( 'loop-templates/content', 'none' );
					}
					?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->
<?php // Get Footer
get_footer();