<?php
defined( 'ABSPATH' ) || exit;
get_header();
$container = get_theme_mod( 'umedia_container_type' );
?>

<div class="wrapper author-page" id="full-width-page-wrapper">
	<div class="container-fluid px-0" id="content">
			<div class="row no-gutters">
				<div class="col-md-12 content-area" id="primary">
					<main class="site-main blog" id="main" role="main">

						<div class="container px-md-0">
								<div class="row align-items-center">
									<div class="col-8 col-md-6">
											<div class="titlebar">
												<h1 class="page-title pl-3 pl-sm-0">
													<?php
													$name = get_the_author_meta('display_name');
													echo 'By ' . $name;
													?>
												</h1>
												<div class="primary-bar-extension"></div>
											</div>
									</div>
								</div>
						</div>

						<div class="container px-md-0">
							<div class="breadcrumb blog text-primary px-0">
								<a href="<?php echo get_home_url(); ?>/digging-in"><&nbsp;&nbsp;Digging In</a>
							</div><!-- Breadcrumbs -->
						</div>

						<!-- ********** Check to see if author is UDig. If so, hide author box. ********** -->
						<div class="container author-box my-5">
							<div class="row text-center text-sm-left">
								<div class="col-12 col-sm-auto">
									<div class="image">
										<?php 
											$author_id = get_the_author_meta('ID');
											$author_desc = get_the_author_meta('description');
											$author_avatar = get_avatar( get_the_author_meta( 'ID' ), 150 );
										?>
										<div class="image">
												<?php echo $author_avatar; ?>
										</div>
									</div>
								</div>

								<div class="col-12 col-sm mt-5 mt-sm-0">
									<h4 class="text-uppercase pt-3" style="font-size: 1.2rem!important;">About The Author</h4>
									<p><?php echo $author_desc; ?></p>
								</div>
							</div>
							<div class="greige-side"></div>
						</div>
						<!-- ********** End Author Section ********** -->

						<div class="container px-0">
						<div class='blog-wrapper authors'>
						<?php
							if(is_author()){
								$author_id = get_the_author_meta('ID');
							//	$name = get_the_author_meta('display_name');
							//	echo '<h1>'.$name.'</h1>';
								echo do_shortcode('[ajax_load_more repeater="template_5" author="'.$author_id.'" container_type="div" css_classes="container px-md-0" transition_container_classes="row row-eq-height" posts_per_page="12" scroll="false" transition="fade" button_label="Load More"]');

							} 
						?>
						</div>
						</div>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .row end -->
		</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
?>