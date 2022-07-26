<?php
/**
 * Partial template for content in iaquickstart.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="ia-quickstart"><!-- .intelligent-automation -->
    <div class="container px-md-0">
      <div class="row align-items-center">
        <div class="col-auto col-md-6">
          <div class="titlebar">
            <h1 class="page-title pl-3 pl-sm-0"><?php the_field('approach_header_title'); ?></h1>
            <div class="primary-bar-extension"></div>
          </div>
        </div>
      </div>
      <div class="container mt-3">
        <div class="row">
          <div class="breadcrumb breadcrumb-mobile text-primary px-3 px-md-2">
            <a href="<?php echo get_home_url(); ?>/what-we-do/#data">
            < Data Platforms
            </a>
          </div>
        </div>
      </div>
    <!-- ***** Super Body Description ***** -->
      <div class="super-body section-margin mx-4 mx-sm-0">
        <div class="row">
          <div class="col-12">
            <?php the_field('approach_super_body'); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Middle Section: Approach ***** -->
    <div class="container-fluid px-0 section-margin my-0 my-sm-4">
      <div class="approach">
        <div class="section-header bg-blue px-4 px-md-0">
          <div class="container px-0">
            <div class="section-copy">

              <?php the_field('approach_description'); ?>
            </div>
            <div class="section-element"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Project Outline: Timeline -->
    <div class="container section-margin mb-0">
      <div class="d-flex flex-row-reverse">
        <div class="col-auto col-md-4 align-self-end">
          <div class="titlebar-right">
            <div class="timeline">
              <span class="subhead-title pl-md-5 pl-sm-0">TIMELINE</span>
              <h2 class="page-title pl-md-5 pl-sm-0"><?php the_field('timeline_header_title'); ?></h2>
            </div>
            <div class="primary-bar-extension"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container project-outline pt-0">
    <div class="row">
        <div class="col-12 mb-4">
        <h2>Project Outline</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <?php the_field('project_outline_info'); ?>
        </div>
      </div>
    </div>



    <!-- ***** Audience Section ***** -->
    <div class="container section-margin">
      <div class="audience-tite">
        <h2>Business Value</h2>
</div>
    </div>

    <!-- ***** Left Content Right Image - Automation Education Session ***** -->
    <div class="container-fluid left-content px-0 mt-0 section-margin" style="position:relative;z-index:0;">
      <div class="container px-0" style="z-index:2;">
        <div class="col-sm-12 col-md-6  py-0 pr-md-5" style="z-index:9999;">
          <div class="description">
              <?php echo get_field('audience_desc') ?>
          </div>
        </div>
      </div>
      <div class="left-content-image">
        <div class="image" style="background-image:url('<?php the_field("audience_image"); ?>');"></div><!-- Start Right Section -->
        <div class="automation-element">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/careers-element.svg" alt=""/>
        </div>
      </div>
    </div>

    <!-- ***** Outcome Section ***** -->
    <div class="container section-margin mb-0">
      <div class="outcome-tite">
        <h2>Outcome</h2>
      </div>
    </div>

    <div class="container section-margin my-5">
      <div class="row">
        <div class="col-12 outcome-story">
          <?php the_field('outcome_story'); ?>
        </div>
      </div>
    </div>

    <div class="container px-md-0">
      <div class="outcome-disclaimer mx-4 my-2 mx-sm-0">
        <div class="row">
          <div class="col-12">
            <?php the_field('outcome_disclaimer'); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- ***** Contact Form ***** -->
<div class="quickstart-contact">
  <div class="container px-md-0">
    <div class="row form section-margin">
      <div class="col-12 greige-section">
        <div class="p-5">
          <?php the_field('contact_form'); ?>
        </div>
        <div class="greige-section-extension"></div>
      </div>
    </div>
  </div>
</div>