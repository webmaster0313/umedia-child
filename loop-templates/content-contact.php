<?php
/**
 * Partial template for content in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="contact">
    <div class="container px-md-0">
        <div class="row align-items-center">
            <div class="col-8 col-md-6">
                <div class="titlebar">
                    <h1 class="page-title pl-3 pl-sm-0"><?php the_field('header_copy'); ?></h1>
                    <div class="primary-bar-extension"></div>
                </div>
            </div>
            <div class="col-12 col-md-6 text-left text-md-right careers-language mt-3 mt-md-0 ml-3 ml-sm-0">
                <?php the_field('career_cta_language'); ?>
                <?php
                    $link = get_field('careers_link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="text-primary" href="<?php echo $link_url; ?>" target="<?php echo esc_attr($link_target); ?>" aria-label="<?php echo $aria; ?>">
                        <?php echo $link_title; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="row form section-margin">
            <div class="col-12 greige-section">
                <div class="p-5"><?php the_field('contact_form'); ?></div>
                <div class="greige-section-extension"></div>
            </div>
        </div>
        <div class="px-5 px-sm-0">
            <h2 class="mb-5"><?php the_field('locations_header'); ?></h2>
            <div class="row">
                <?php if( have_rows('locations') ): ?>
                    <?php while( have_rows('locations') ): the_row();
                        // vars
                        $name = get_sub_field('location_name');
                        $headquarters = get_sub_field('headquarters');
                        $address1 = get_sub_field('address_line_1');
                        $address2 = get_sub_field('address_line_2');
                        $telephone = get_sub_field('telephone');
                        $moreinfo = get_sub_field('more_info_button');
                        $directions = get_sub_field('directions');
                    ?>
                        <div class="col-12 col-sm-6 location">
                            <div class="row align-items-end mb-3 no-gutters" style="height:2rem;">
                                <div class="col-auto">
                                    <h3 class="text-uppercase"><?php echo $name; ?></h3>
                                </div>
                                <?php if( !empty($headquarters) ): ?>
                                    <div class="col-auto">
                                        <div class="hq-marker ml-3">HQ</div>
                                    </div>
                                <?php endif; ?>
                                <div class="col-auto">
                                    <img style="height:1.5rem;" class="ml-3" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/careers-element.svg" />
                                </div>
                            </div> 
                            <div class="address description">
                                <?php
                                    if( $directions ): 
                                        $link_url = $directions['url'];
                                        $link_title = $directions['title'];
                                        $link_target = $directions['target'] ? $directions['target'] : '_self';
                                ?>
                                    <a class="directions" href="<?php echo $link_url; ?>" target="<?php echo esc_attr($link_target); ?>" rel="noopener">
                                        <?php if( !empty($address1) ): ?><div><?php echo $address1; ?></div><?php endif; ?>
                                        <?php if( !empty($address2) ): ?><div><?php echo $address2; ?></div><?php endif; ?>
                                    </a>
                                <?php endif; ?>
                                <?php if( !empty($telephone) ): ?><div><a href="tel:<?php echo $telephone; ?>"><?php echo $telephone; ?></a></div><?php endif; ?>
                            </div>
                            <div class="more-info mb-5">
                                <?php
                                    if( $moreinfo ): 
                                        $link_url = $moreinfo['url'];
                                        $link_title = $moreinfo['title'];
                                        $link_target = $moreinfo['target'] ? $moreinfo['target'] : '_self';
                                ?>
                                    <a class="btn-grad" href="<?php echo $link_url; ?>" target="<?php echo esc_attr($link_target); ?>">
                                        <?php echo $link_title; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>