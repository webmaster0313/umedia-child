<?php
/**
 * Partial template for content in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="careers-page">
    <div class="hero-image post" style="background-image:url('<?php the_field("hero_image"); ?>');">
        <div class="hero-image-wrapper">
            <div class="container">
                <div class="row animate__animated animate__fadeInLeft">
                    <div class="hero-subtitle-wrapper col-8 col-md-6">
                        <div class="hero-subtitle">
                            <h2>
                                <div><?php the_field('header_title'); ?></div>
                            </h2>
                        </div>

                        <div class="hero-subtitle-wrapper-extension"></div>
                    </div>
                    <!-- <div class="col-8 col-md-6">
                        <div class="titlebar">
                            <h1 class="page-title pl-3 pl-sm-0"><?php the_field('header_title'); ?></h1>
                            <div class="primary-bar-extension"></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="mt-0 pt-3">
        <div class="px-0 container-fluid">
            <main class="site-main" id="main">
                <!-------------------  Breadcrumb Section ------------------->
                <div class="container">
                    <div class="breadcrumb blog text-primary px-0 justify-content-end">
                        <div class="postings-cta d-flex" id="postings-cta">
                            Join Our Team
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                width="16px" style="enable-background:new 0 0 512 512;" xml:space="preserve"
                                fill="#E97101" class="ml-2">
                                <g>
                                    <path d="M374.108,373.328c-7.829-7.792-20.492-7.762-28.284,0.067L276,443.557V20c0-11.046-8.954-20-20-20
									c-11.046,0-20,8.954-20,20v423.558l-69.824-70.164c-7.792-7.829-20.455-7.859-28.284-0.067c-7.83,7.793-7.859,20.456-0.068,28.285
									l104,104.504c0.006,0.007,0.013,0.012,0.019,0.018c7.792,7.809,20.496,7.834,28.314,0.001c0.006-0.007,0.013-0.012,0.019-0.018
									l104-104.504C381.966,393.785,381.939,381.121,374.108,373.328z" />
                                </g>
                            </svg>
                        </div>
                    </div>

                    <div class="super-body mx-4 mx-sm-0">
                        <div class="mid-title mt-4 mb-5">
                            <h2><?php the_field('mid_header'); ?></h2>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <?php the_field('super_body_left'); ?>
                            </div>
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <?php the_field('super_body_right'); ?>
                            </div>
                        </div>
                    </div>
                </div>


                <!-------------------  Team Section ------------------->
                <div class="team-section section-margin mx-sm-0">
                    <div class="mx-4">
                        <div class="container pb-5">
                            <div class="mid-title mt-4 mb-5">
                                <h2><?php the_field('team_section_header'); ?></h2>
                            </div>

                            <?php the_field('team_section_text'); ?>
                        </div>
                    </div>

                    <div class="reviews mt-4 container">
                        <div class="bg-blue" style="border-radius:4rem 4rem 0 0;">
                            <div class="row large-padding">
                                <div class="container">

                                    <div class="review-slider-group pt-0">
                                        <?php if( have_rows('team_section_reviews') ): ?>
                                        <?php while( have_rows('team_section_reviews') ): the_row(); 
													$quotes = get_sub_field('quotes');
												?>
                                        <div class="slider-item">
                                            <div class="reviews-logo">
                                                <img src="<?php echo get_sub_field('author_avatars')['url']; ?>"
                                                    alt="avatar">
                                                <p class="mb-0 mt-4">
                                                    <strong
                                                        class="text-white text-nowrap"><?php the_sub_field('author_names')?></strong>
                                                </p>

                                                <p class="text-white mb-0 text-nowrap">
                                                    <?php the_sub_field('author_titles')?>
                                                </p>
                                            </div>

                                            <div class="reviews-text">
                                                <?php echo $quotes; ?>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="team-sliders">
                            <div class="review-slider-group p-0 w-100 m-0">
                                <?php if( have_rows('team_section_slider') ): ?>
                                <?php while(have_rows('team_section_slider')): the_row(); $image = get_sub_field('images')['url']; ?>
                                <div class="slider-item p-0">
                                    <div style="background-image:url('<?php echo $image; ?>');" alt="slider"></div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-------------------  Award Section ------------------->
            <div class="container awards pt-5">
                <div class="mid-title m-0 pt-5">
                    <h2><?php the_field('award_title')?></h2>
                </div>
            </div>
            <div class="container section-margin awards-items">
                <div class="row">
                    <?php if( have_rows('awards') ): ?>
                    <?php while( have_rows('awards') ): the_row(); 
					$awardLogo = get_sub_field('award_logo');
					$companyName = get_sub_field('company_name');
					$awardYears = get_sub_field('award_yrs');
					?>
                    <div class="col-sm-12 col-md-6 awards-card">
                        <div class="container">
                            <div class="row"><img src="<?php echo $awardLogo; ?>" alt="" /></div>
                            <div class="row">
                                <h2><?php echo $companyName; ?></h2>
                            </div>
                            <div class="row">
                                <h3><?php echo $awardYears; ?></h3>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="divider"></div>
            </div>

            <!-------------------  Life Section ------------------->
            <div class="container-fluid px-0 section-margin my-0 my-sm-4">
                <div class="life-at-udig">
                    <div class="section-header bg-blue px-4 px-md-0">
                        <div class="container px-0">
                            <h2><?php the_field('life_at_udig_header'); ?></h2>
                            <div class="section-copy">
                                <?php the_field('life_at_udig_description'); ?>
                            </div>
                            <div class="section-element"></div>
                        </div>
                    </div>
                    <div class="bg-half-blue px-4 px-md-0">
                        <div class="container px-0">
                            <div class="row card-stack row-eq-height">
                                <?php if( have_rows('life_cards') ): ?>
                                <?php while( have_rows('life_cards') ): the_row(); 
								$image = get_sub_field('image');
								$header = get_sub_field('header');
								$description = get_sub_field('description');
								?>
                                <div class="col-6 col-sm-6 col-md-4 mb-4">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="<?php echo $image['url']; ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>">
                                        </div>
                                        <div class="card-header">
                                            <?php echo $header; ?>
                                        </div>
                                        <div class="card-body">
                                            <?php echo $description; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pt-4">
                <div class="divider"></div>
            </div>

            <!-------------------  Intern Section ------------------->
            <div class="container-fluid left-content px-0 section-margin" style="position:relative;z-index:0;">
                <div class="container" style="z-index:2;">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-6 py-3" style="z-index:9999;">
                            <h2><?php the_field('interns_header') ?></h2>
                            <div class="description">
                                <?php the_field('interns_description') ?>
                            </div>
                            <?php if( !empty(get_field("interns_cta")) ): ?>
                            <div class="button">
                                <a href="<?php the_field("interns_cta"); ?>" class="btn-grad mb-5 mb-md-0" role="button"
                                    aria-pressed="true">
                                    <?php the_field("interns_cta_text"); ?>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="left-content-image">
                    <div class="image" style="background-image:url('<?php the_field("intern_image"); ?>');"></div>
                    <!-- Start Right Section -->
                    <div class="careers-element">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/careers-element.svg"
                            alt="" />
                    </div>
                </div>
            </div>

            <!-------------------  Graduates Section ------------------->
            <div class="container-fluid right-content px-0 section-margin" style="position:relative;z-index:0;">
                <div class="right-content-image d-none d-md-block">
                    <div class="image" style="background-image:url('<?php the_field("graduate_image"); ?>');"></div>
                    <!-- Start Left Section -->
                </div>
                <div class="container" style="z-index:2;">
                    <div class="row align-items-center">
                        <div class="col-sm-12 offset-md-7 col-md-6 offset-lg-7 py-5 py-md-3" style="z-index:9999;">
                            <h2><?php the_field('graduate_header') ?></h2>
                            <div class="description">
                                <?php the_field('graduate_description') ?>
                            </div>
                            <?php if( !empty(get_field("graduate_cta")) ): ?>
                            <div class="button">
                                <a href="<?php the_field("graduate_cta"); ?>" class="btn-grad mb-4 mb-md-0"
                                    role="button" aria-pressed="true">
                                    <?php the_field("graduate_cta_text"); ?>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-------------------  Listing Section ------------------->
            <div class="px-0 ml-auto" id="listings">
                <div class="container">
                    <div class="listings">
                        <?php the_field('greenhouse_config'); ?>
                        <div class="listings-extension"></div>
                    </div>
                </div>
            </div>

            <!-------------------  Element Section ------------------->
            <div class="d-block d-md-none right-content-image-mobile">
                <div class="image" style="background-image:url('<?php the_field("graduate_image"); ?>');"></div>
            </div>

            <!-------------------  Blog Section ------------------->
            <div class="insights">
                <div class="container-fluid bg-blue">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-left insights-title">
                                    <h2><?php the_field('insights_title') ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid bg-half-blue">
                    <div class="row">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-12 col-sm-10 offset-sm-2 col-md-11 offset-md-1 pb-4">
                                    <!-- Background Element -->
                                    <div class='blog-element'>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-element.png"
                                            alt="" />
                                    </div>

                                    <div class="slider-group">
                                        <?php
                     // the query
                     $the_query = new WP_Query( array(
                     'cat' => $category->term_id,
                     'post_type' => array('post', 'results', 'people'),
                     'posts_per_page' => 10,
                     'orderby' => 'post_date',
                     'order' => 'DESC',
                     ));
                  ?>
                                        <?php if ( $the_query->have_posts() ) : ?>
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        <div class="slider-item">
                                            <a href="<?php echo get_permalink(get_the_ID()); ?>" class="slider-card">
                                                <?php $backgroundImg = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                                                <div class="img"
                                                    style="background-image: url('<?php echo $backgroundImg; ?>');">
                                                </div>
                                                <div class='slider-wrapper'>
                                                    <?php
                              $cats = array();
                              foreach (get_the_category($post_id) as $c) {
                              $cat = get_category($c);
                              array_push($cats, $cat->name);
                              }

                              if (sizeOf($cats) > 0) {
                              $post_categories = implode(', ', $cats);
                              } else {
                              $post_categories = 'Not Assigned';
                              }
                              ?>
                                                    <!--<div class='category'>
                              <h3>
                                 <?php
                                 // echo $post_categories;
                                 /*
                                 $primary_selected_category = get_post_meta( $post->ID, 'select_primary_category', true );
                                 if ( $primary_selected_category == true) {
                                    echo $primary_selected_category;
                                 } else {
                                    echo $post_categories;
                                 }
                                 */?>
                              </h3>
                           </div>-->

                                                    <div class='category'>
                                                        <h3>
                                                            <?php
                              $post_type = get_post_type( $post->ID );
                              if ($post_type == 'results') {
                                 echo 'Work';
                              }
                              elseif ($post_type == 'videos') {
                                 echo 'Video';
                              }
                              elseif ($post_type == 'events') {
                                 echo 'Event';
                              }
                              else {
                                 echo'People';
                              }
                              ?>
                                                        </h3>
                                                    </div>

                                                    <div class='title'>
                                                        <?php
                              $post_type = get_post_type( $post->ID );
                              if ($post_type == 'results') : ?>
                                                        <h2><?php the_field('subhead'); ?></h2>

                                                        <?php elseif ($post_type == 'post') : ?>
                                                        <h2><?php the_title(); ?></h2>

                                                        <?php elseif ($post_type == 'events') : ?>
                                                        <h2><?php echo the_field('event_title'); ?></h2>

                                                        <?php elseif ($post_type == 'videos') : ?>
                                                        <h2><?php the_field('video_title'); ?></h2>

                                                        <?php else : ?>

                                                        <h2><?php the_title(); ?></h2>

                                                        <?php endif; ?>
                                                    </div>

                                                </div><!-- .slider-wrapper -->
                                            </a><!-- .slider-card -->
                                        </div><!-- End Slider Item -->
                                        <?php endwhile; endif; wp_reset_postdata(); wp_reset_query(); ?>

                                    </div> <!-- .slider-group -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>