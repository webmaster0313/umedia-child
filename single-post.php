<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'global-templates/hero-post' );
?>

<div class="wrapper mt-0 pt-3" id="single-wrapper">

	<div class="px-0 container-fluid" id="content" tabindex="-1">

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single-blog' );
					// umedia_post_nav();
				}
				?>

			</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
