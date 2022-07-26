<?php
/**
 * Partial template for content in about.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="about-page">
    <div class="container px-md-0">
      <div class="row align-items-center">
        <div class="col-8 col-md-6">
          <div class="titlebar">
            <h1 class="page-title pl-3 pl-sm-0"><?php the_field('header_copy'); ?></h1>
            <div class="primary-bar-extension"></div>
          </div>
        </div>
      </div>
    <!-- ***** Super Body Description ***** -->
      <div class="super-body section-margin mx-4 mx-sm-0">
        <div class="row">
          <div class="col-12">
            <?php the_field('super_body'); ?>
          </div>
        </div>
      </div>
    <!-- ***** Middle Header "Then We Leave You Better ***** -->
      <div class="mid-title text-left text-md-center">
        <h2><?php the_field('mid_header'); ?></h2>
      </div>
    </div>
    <!-- ***** Middle Section: Everything We Do... ***** -->
    <div class="container-fluid px-0 section-margin my-0 my-sm-4">
      <div class="everything_we_do">
        <div class="section-header bg-blue px-4 px-md-0">
          <div class="container px-0">
            <div class="section-copy">
              <?php the_field('everything_we_do_description'); ?>
            </div>
            <div class="section-element"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Leadership ***** -->
    <div class="container-fluid left-content px-0 section-margin" style="position:relative;z-index:0;">
      <div class="container px-0" style="z-index:2;">
        <div class="col-sm-12 col-md-6  py-3" style="z-index:9999;">
          <h2><?php echo get_field('leadership_header') ?></h2>
          <div class="description">
              <?php echo get_field('leadership_description') ?>
          </div>
          <div class="button">
              <a href="<?php the_field("leadership_cta"); ?>" class="btn-grad mb-5 mb-md-0" role="button" aria-pressed="true">
                  <?php the_field("leadership_cta_text"); ?>
              </a>
          </div>
        </div>
      </div>
      <div class="left-content-image">
        <div class="image" data-stellar-background-ratio="0.9" style="background-image:url('<?php the_field("leadership_image"); ?>');"></div><!-- Start Right Section -->
        <div class="about-element">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/careers-element.svg" alt=""/>
        </div>
      </div>
    </div>   
    <!-- ***** Where We Work ***** -->
    <div class="container section-margin where_we_work">
      <div class="row">
        <div class="col-sm-10 col-md-8">
            <h2><?php the_field('where_we_work_header'); ?></h2>
            <div class="section-copy my-3">
              <?php the_field('where_we_work_description'); ?>
            </div>
        </div>
      </div>
        <div class="where-we-work-element d-none d-sm-block"></div>
        <div class="where_we_work-extension"></div>
    </div>
    <!-- ***** What We Believe ***** -->
    <div class="container what-we-believe section-margin">
      <div class="row">
          <div class="col-12 col-md-6 col-lg-5 mb-3 mb-lg-0 mt-lg-5">
            <div class="mx-auto">
              <span class="circle--element"></span>
              <div class="circular--landscape d-inline-block">
                <div class="image" data-stellar-background-ratio="0.9" style="background-image: url('<?php the_field('what_we_believe_image') ?>');"></div>
                <div class="image-overlay"></div>
              </div>
            </div>
          </div><!-- End Left Section -->
          <div class="col-12 col-md-6 col-lg-7 mb-3 mb-lg-0 mt-4 mt-lg-0">
            <div class="ml-0 ml-lg-4">
              <h2><?php the_field('what_we_believe_header') ?></h2>
              <div class="description">
                <?php the_field('what_we_believe_description') ?>
              </div>
            </div>
          </div><!-- End Right Section -->
      </div>
    </div>
    <!-- ***** Mission ***** -->
    <div class="container">
      <div class="mission-title">
        <h2>Mission</h2>
      </div>
    </div>
    <div class="container px-3 section-margin mission-group">
      <div class="row">
        <div class="col-12 pl-5 pl-md-3">
          <div class="mission section-copy text-left">
            <h2><?php the_field('mission_statement'); ?></h2>
          </div>
        </div>
      </div>
        <div class="mission-extension"></div>
    </div>
    
    <div class="container super-body-mission pb-5">
      <div class="row">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
            <?php the_field('super_body_left'); ?>
        </div>
        <div class="col-12 col-md-6 mb-3 mb-md-0">
            <?php the_field('super_body_right'); ?>
        </div>
      </div>
    </div>
    <!-- ***** Slide Show ***** -->
    <div class="values">
        <div class="container-fluid bg-blue" style="border-radius:4rem 4rem 0 0;">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-12  values-title">
                            <h2><?php echo get_field('values_header') ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row large-padding">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 text-left text-sm-center">
                            <div class="values-slider-group">
                                <?php if( have_rows('value_slider') ): ?>
                                    <?php while( have_rows('value_slider') ): the_row(); 
                                        $sliderImg = get_sub_field('slider_img');
                                        $quotes = get_sub_field('caption');
                                    ?>
                                        <div class="slider-item">
                                          <?php echo $quotes; ?>
                                          <img src="<?php echo $sliderImg; ?>" alt=""/>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Brand Promises ***** -->
    <div class="container">
      <div class="brand-header">
        <h2>BRAND PROMISES</h2>
      </div>
    </div>
    <div class="container section-margin brand-promises">
    <?php if( have_rows('brand_promises') ): ?>
      <?php while( have_rows('brand_promises') ): the_row(); 
        $brandImg = get_sub_field('brand_img');
        $brandTitle = get_sub_field('brand_title');
        $brandDesc = get_sub_field('brand_description');
      ?>
      <div class="row py-3">
        <div class="col-4 col-sm-4 col-md-3">
          <div class="brand-image text-center">
            <img src="<?php echo $brandImg; ?>" alt=""/>
          </div>
        </div>
        <div class="col-8 col-sm-8 col-md-9">
          <div class="brand-title">
            <h2><?php echo $brandTitle; ?></h2>
          </div>
          <div class="brand-desc">
            <?php echo $brandDesc; ?>
          </div>
        </div>
      </div> 
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  <!-- ***** Awards ***** -->
  <div class="container awards py-5">
    <div class="header pt-5">
      <h2>Awards</h2>
    </div>
  </div>
  <div class="container section-margin">
    <div class="row">
      <?php if( have_rows('awards') ): ?>
      <?php while( have_rows('awards') ): the_row(); 
        $awardLogo = get_sub_field('award_logo');
        $companyName = get_sub_field('company_name');
        $awardYears = get_sub_field('award_yrs');
      ?>
        <div class="col-sm-12 col-md-6 awards-card">
          <div class="container">
            <div class="row"><img src="<?php echo $awardLogo; ?>" alt=""/></div>
            <div class="row"><h2><?php echo $companyName; ?></h2></div>
            <div class="row"><h3><?php echo $awardYears; ?></h3></div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div> 
  </div>

</div><!-- end .about-page -->