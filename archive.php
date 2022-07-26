<?php
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
				<main class="site-main blog" id="main" role="main">
					<div class="contact">
					  <div class="container px-md-0" style="position:relative;">
					    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/half-circle-element.png" class='half-circle-element-blog' />
					    <div class="row align-items-center">
					      <div class="col-8 col-md-6">
					        <div class="titlebar">
					          <h1 class="page-title pl-3 pl-sm-0">
					            <?php // the_field('blog_title'); ?>
					            Digging In
					          </h1>
					          <div class="primary-bar-extension"></div>
					        </div>
					      </div>
					    </div>
					  </div>
					</div>
					<div class='blog-header bg-blue'>
					  <div class='container px-0'>
					    <div class="row mx-0 no-gutters">
					      <div class="offset-1 col-10 offset-md-6 col-md-6 offset-lg-8 col-lg-4 px-4">
					        <?php // echo do_shortcode('[ajax_load_more_filters id="category_listing" filters="true" target="my_alm_filters"]'); ?>
					        <div class="category">
					          <?php
					            $filter_array = array(
					              "id" =>  "category_listing",
					              "style" =>  "change",
					              "date_created" =>  1604338035,
					              "date_modified" =>  1604349376,
					              "filters" =>  
					                array(
					                  array(
					                    "key" =>  "category",
					                    "field_type" =>  "checkbox",
					                    /**
					                     * Dev Site Term ID's
					                     * "exclude" => "3780,3800,3785,3787,3784,3781,4382,3805,4385,1241,883,3809,672,3786,3796,3801,3815,3791,3789,3813,3806,3788,3814,3812,3799,673,3794,4388,4381,4386,3790,3816,1125,4387,3811,3797,4383,3808,3798,3793,4258,856,3782,1268,3807,1267,3802,3792,3803,1,4384,3783,1224,3795,3810,4395,4394,4396,4398,4399,4400,4406",
					                     */
						                    "exclude" => "3780,3800,3785,3787,3784,3781,4382,3805,4385,1241,883,3809,672,3786,3796,3801,3815,3791,3789,3813,3806,3788,3814,3812,3799,673,3794,4388,4381,4386,3790,3816,1125,4387,3811,3797,4383,3808,3798,3793,4258,856,3782,1268,3807,1267,3802,3792,3803,1,4384,3783,1224,3795,3810,4395,4394,4396,4398,4399,4400,4406",
					                    "label" =>  "Categories",
					                    "title" =>  "Categories",
					                    "checkbox_toggle" =>  "before",
					                    "checkbox_toggle_label" =>  "Select All",
					                    "section_toggle" =>  "true",
					                  ),
					                )
					              );
					            echo alm_filters($filter_array, 'my_alm_filters');
					          ?>
					        </div>
					      </div><!-- .col-sm-12 .col-md-12 .col-lg-6 .col-xl-3 -->
					    </div><!-- .row -->
					  </div><!-- .container-fluid -->
					</div><!-- .blog-header -->
					
					<!-- <div class="blog-wrapper-background"></div> -->
					<div class='blog-wrapper bg-half-blue'>
					  <?php
					    echo do_shortcode('[ajax_load_more id="my_alm_filters" container_type="div" css_classes="container" post_type="post" transition_container_classes="row row-eq-height" posts_per_page="12" scroll="false" transition="fade" button_label="Load More" filters="true" target="category_listing"]'); 
					  ?>
					</div><!-- .wrapper -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->
<?php
get_footer();