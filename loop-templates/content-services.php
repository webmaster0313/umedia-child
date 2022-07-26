<?php
/**
 * Partial template for content in services.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="services-page">
  <div class="container px-md-0">
    <div class="row align-items-center">
      <div class="col-8 col-md-6">
        <div class="titlebar">
          <h1 class="page-title pl-0"><?php the_field('header_copy'); ?></h1>
          <div class="primary-bar-extension"></div>
        </div>
      </div>
    </div>
  <!-- ***** Super Body Description ***** -->
    <div class="super-body section-margin">
      <div class="row">
        <div class="col-12">
          <?php the_field('service_super_body_left'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** SERVICES ***** -->
  <div class="container section-margin px-md-0">
    <div class="service-title">
      <h2>SERVICES</h2>
    </div>
  </div>

  <!-- ***** Strategy ***** -->
  <span id="strategy"></span>
  <div class="section-margin service-card strategy mt-0">
    <div class="container">
      <div class="row service-title-line">
        <div class="offset-4 col-8 offset-sm-3 col-sm-9">
          <h2><?php the_field('strategy_title'); ?></h2>
        </div>
      </div>
      <div class="row section-margin service">
        <div class="col-4 col-sm-3 service-icon">
          <img src="<?php the_field('strategy_image'); ?>" alt="" />
        </div>
        <div class="col-8 col-sm-9">
          <div class="section-copy my-3">
            <h3><?php the_field('strategy_subhead'); ?></h3>
          </div>
        </div>
        <div class="service-extension"></div>
      </div>
      <div class="row capabilities">
        <div class="col-sm-12 col-md-6 description"><?php the_field('strategy_description'); ?></div>
        <div class="col-sm-12 col-md-5 px-md-0 capability-types">
            <h4>Capabilities</h4>
          <?php if( have_rows('strategy_capabilities') ): ?>
            <?php while( have_rows('strategy_capabilities') ): the_row();
            $capability = get_sub_field('strategy_capability');
            ?>
              <h3><?php echo $capability; ?></h3>
            <?php endwhile; ?>
          <?php endif; ?>

          <?php if ( get_field( 'strategy_cta' ) ): ?>
            <div style="margin-top: 1.7rem">
                <a href="<?php echo the_field('strategy_cta_url') ?>" class="btn-grad" role="button" aria-pressed="true">
                  <?php echo the_field('strategy_cta') ?>
                </a>
            </div>
            <?php else: // field_name returned false ?>
            <?php endif; // end of if field_name logic ?>

        </div>
      </div>
    </div>
  </div>

  <!-- ***** Transformation ***** -->
  <span id="transformation"></span>
  <div class="section-margin service-card transformation">
    <div class="container">
      <div class="row service-title-line">
        <div class="offset-4 col-8 offset-sm-3 col-sm-9">
          <h2><?php the_field('transformation_title'); ?></h2>
        </div>
      </div>
      <div class="row section-margin service">
        <div class="col-4 col-sm-3 service-icon">
          <img src="<?php the_field('transformation_image'); ?>" alt="" />
        </div>
        <div class="col-8 col-sm-9">
          <div class="section-copy my-3">
            <h3><?php the_field('transformation_subhead'); ?></h3>
          </div>
        </div>
        <div class="service-extension"></div>
      </div>
      <div class="row capabilities">
        <div class="col-sm-12 col-md-6 description"><?php the_field('transformation_description'); ?></div>
        <div class="col-sm-12 col-md-5 px-md-0 capability-types">
          <h4>Capabilities</h4>
          <?php if( have_rows('transformation_capabilities') ): ?>
          <?php while( have_rows('transformation_capabilities') ): the_row();
          $capability = get_sub_field('transformation_capability');
          $capability_link = get_sub_field('transformation_capability_link');
          ?>
          <?php
          if (get_sub_field('transformation_capability_link')) { ?>
            <h3>
              <a href="<?php the_sub_field('transformation_capability_link'); ?>">
                <?php echo $capability; ?>
              </a>
            </h3>
          <?php 
          }
          else {
            echo '<h3>' . $capability . '</h3>' ;
          }
          ?>

           <!-- <h3><?php // echo $capability; ?></h3> -->
            <?php endwhile; ?>
          <?php endif; ?>

          <?php if ( get_field( 'transformation_cta' ) ): ?>
              <div style="margin-top: 1.7rem">
                <a href="<?php echo the_field('transformation_cta_url') ?>" class="btn-grad" role="button" aria-pressed="true">
                  <?php echo the_field('transformation_cta') ?>
                </a>
            </div>
            <?php else: // field_name returned false ?>
            <?php endif; // end of if field_name logic ?>

        </div>
      </div>
    </div>
  </div>

  <!-- ***** Software ***** -->
  <span id="software"></span>
  <div class="section-margin service-card software">
    <div class="container">
      <div class="row service-title-line">
        <div class="offset-4 col-8 offset-sm-3 col-sm-9">
          <h2><?php the_field('software_title'); ?></h2>
        </div>
      </div>
      <div class="row section-margin service">
        <div class="col-4 col-sm-3 service-icon">
          <img src="<?php the_field('software_image'); ?>" alt="" />
        </div>
        <div class="col-8 col-sm-9">
          <div class="section-copy my-3">
            <h3><?php the_field('software_subhead'); ?></h3>
          </div>
        </div>
        <div class="service-extension"></div>
      </div>
      <div class="row capabilities">
        <div class="col-sm-12 col-md-6 description"><?php the_field('software_description'); ?></div>
        <div class="col-sm-12 col-md-5 px-md-0 capability-types">
          <h4>Capabilities</h4>
          <?php if( have_rows('software_capabilities') ): ?>
          <?php while( have_rows('software_capabilities') ): the_row();
          $capability = get_sub_field('software_capability');
          ?>
            <h3><?php echo $capability; ?></h3>
            <?php endwhile; ?>
          <?php endif; ?>

          <?php if ( get_field( 'software_cta' ) ): ?>
            <div style="margin-top: 1.7rem">
                <a href="<?php echo the_field('software_cta_url') ?>" class="btn-grad" role="button" aria-pressed="true">
                  <?php echo the_field('software_cta') ?>
                </a>
            </div>
            <?php else: // field_name returned false ?>
            <?php endif; // end of if field_name logic ?>

        </div>
      </div>
    </div>
  </div>
  
  <!-- ***** Data ***** -->
  <span id="data"></span>
  <div class="section-margin service-card data">
    <div class="container">
      <div class="row service-title-line">
        <div class="offset-4 col-8 offset-sm-3 col-sm-9">
          <h2><?php the_field('data_title'); ?></h2>
        </div>
      </div>
      <div class="row section-margin service">
        <div class="col-4 col-sm-3 service-icon">
          <img src="<?php the_field('data_image'); ?>" alt="" />
        </div>
        <div class="col-8 col-sm-9">
          <div class="section-copy my-3">
            <h3><?php the_field('data_subhead'); ?></h3>
          </div>
        </div>
        <div class="service-extension"></div>
      </div>
      <div class="row capabilities">
        <div class="col-sm-12 col-md-6 description"><?php the_field('data_description'); ?></div>
        <div class="col-sm-12 col-md-5 px-md-0 capability-types">
          <h4>Capabilities</h4>
           <?php if( have_rows('data_capabilities') ): ?>
          <?php while( have_rows('data_capabilities') ): the_row();
          $capability = get_sub_field('data_capability');
          $capability_link = get_sub_field('data_capability_link');
          ?>
          <?php
          if (get_sub_field('data_capability_link')) { ?>
            <h3>
              <a href="<?php the_sub_field('data_capability_link'); ?>">
                <?php echo $capability; ?>
              </a>
            </h3>
          <?php 
          }
          else {
            echo '<h3>' . $capability . '</h3>' ;
          }
          ?>

           <!-- <h3><?php // echo $capability; ?></h3> -->
            <?php endwhile; ?>
          <?php endif; ?>

            <?php if ( get_field( 'data_cta' ) ): ?>
              <div style="margin-top: 1.7rem">
                <a href="<?php echo the_field('data_cta_url') ?>" class="btn-grad" role="button" aria-pressed="true">
                  <?php echo the_field('data_cta') ?>
                </a>
            </div>
            <?php else: // field_name returned false ?>
            <?php endif; // end of if field_name logic ?>

        </div>
      </div>
    </div>
  </div>

  <!-- ********** Partners ********** -->
  <div class="container partners pb-5">
    <div class="row">
        <div class="col-12">
          <div class='location-subtitles'>
            <div class="partners-title">
              <h2>PARTNERS</h2>
            </div>
          </div>
          <div class="container py-5">
              <div class="row justify-content-md-center">
              <?php if( get_field('service_our_partners') ): ?>
              <?php while( the_repeater_field('service_our_partners') ): ?>
                <div class="col-6 col-md-4 p-4 mb-5 partner-logo">
                    <img src="<?php the_sub_field('service_partners_image'); ?>" alt="<?php the_sub_field('alt'); ?>" />
                </div>
              <?php endwhile; ?>
              <?php endif;?>
              </div>
          </div> 
        </div>
    </div>
  </div>
</div><!-- end .about-page -->