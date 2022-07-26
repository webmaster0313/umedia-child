<?php
/**
 * The template for displaying search results pages
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
					<div class="search-page">
						<div class="container px-0">
							<div class="row align-items-center">
								<div class="col-8 col-md-6">
									<div class="titlebar">
										<h1 class="page-title pl-3 pl-sm-0">
											<?php single_cat_title(); ?>
											</h1>
										<div class="primary-bar-extension"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="container mobile-wrapper">
							<header class="page-header">
								<h2>
								<!--<div class="alm-results-text"></div>-->
									<?php 
									/* translators: %s: query term */
									/*
										global $wp_query;
										echo $wp_query->found_posts;
										printf(
											esc_html__( ' results found for: %s', 'umedia' ),
											'<span>' . get_search_query() . '</span>'
										);
									*/	?>
								</h2>
							</header><!-- .page-header -->
							<div class="row">
								<?php /*
								if ( have_posts() ) {
									// Start the Loop.
									while ( have_posts() ) {
										the_post();
										
										get_template_part( 'loop-templates/content', 'search' );
									}
								} else {
									// get_template_part( 'loop-templates/content', 'none' );
								}
							*/
							$term = (isset($_GET['s'])) ? $_GET['s'] : ''; // Get 's' querystring param
							
							echo do_shortcode('[ajax_load_more archive="true" post_type="post, page, results, capabilities, events, videos" repeater="template_4" posts_per_page="12" scroll="false"  button_label="Load More"]');
							?>
							</div>
						</div><!-- .container -->
						<div class="container">
							<div class="row">
								<?php //	umedia_pagination(); ?>
							</div>
						</div>
					</div><!-- .search-page -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->
<?php
get_footer();