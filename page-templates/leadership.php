<?php
/**
 * Template Name: Leadership Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'umedia_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="container-fluid px-0" id="content">
			<div class="row no-gutters">
				<div class="col-md-12 content-area" id="primary">
					<main class="site-main" id="main" role="main">

						<?php
						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/content', 'leadership' );						
						}
						?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .row end -->
		</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
