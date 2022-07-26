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
  <div class="container px-md-0" style="position:relative;">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/full-circle-element.png" class='full-circle-element-work' />
    <div class="row align-items-center">
      <div class="col-8 col-md-6">
        <div class="titlebar">
          <h1 class="page-title pl-3 pl-sm-0">
            <?php the_field('work_title'); ?>
          </h1>
          <div class="primary-bar-extension"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class='work-header'>
   <div class='container px-0'>
      <div class="row mx-0 no-gutters">
         <div class="offset-1 col-10 offset-sm-0 col-sm-6 col-md-5 col-lg-4">
            <?php
               $filter_array = array(
               "id" =>  "work_listing",
               "style" =>  "change",
               "date_created" =>  1604433517,
               "date_modified" =>  1604989103,
               "filters" =>  
                  array(
                     array(
                     "key" =>  "category",
                     "field_type" =>  "checkbox",
                     /**
                      * Dev Site Term ID's
                      * "exclude" => "1752,1725,1763,1770,1734,1743,1769,1779,1771,1703,1712,1750,1715,1762,1707,1726,1709,1735,1764,1775,1742,1732,1740,1746,1773,1758,1749,1741,1731,1720,1711,1710,1704,1733,1768,1699,1729,1717,1767,1738,1755,1718,1714,1772,1754,1716,1747,1739,1705,1744,1760,1766,1748,1713,1761,1728,1723,1730,1751,1724,1780,1765,1776,1701,1757,1700,1777,1708,1,1722,1778,1745,1736,1737,1759,1702",
                      */
                     "exclude" =>  "4,4484,4482,3780,3800,3785,3787,3784,3781,4382,3805,4385,1241,883,3809,672,3786,3796,3801,3815,3791,3789,3813,3806,3788,3814,3812,3799,673,3794,4388,4381,4386,3790,3816,1125,4387,3811,3797,4383,3817,3808,3798,3793,4258,856,3782,1268,3807,1267,3802,3792,3803,1,4384,3783,1224,3795,3810,4394,4395,4396,4398,4399,4400,4406,4434,4442,4438,4440,4439,4441",
                     "label" =>  "Services",
                     "title" =>  "Services",
                     "checkbox_toggle" =>  "before",
                     "checkbox_toggle_label" =>  "Select All",
                     "section_toggle" =>  "true",
                     'hide_empty' => 1,
                     ),
                  )
               );
            echo alm_filters($filter_array, 'my_alm_filters');
            ?>
         </div><!-- .col-sm-12 .col-md-3 -->

         <div class="col-sm-12 col-md-2 col-lg-4 col-xl-6">
            <?php 
            /*  Show List of Categories by ID

            if( $terms = get_terms( array( 
            'taxonomy' => 'category', 
            'orderby' => 'name', 
            //'include' => 1518, 
            ) ) ) : 

            foreach ( $terms as $term ) :
            echo '<option value="' . $term->term_id . '">' . $term->term_id . ',' . '</option>'; // ID of the category as the value of an option
            endforeach;
            endif;
            */   
            ?>
         </div><!-- .col-sm-12 .col-md-6 -->
      </div><!-- .row -->
   </div><!-- .container -->
</div><!-- .work-header -->

<div class='work-wrapper'>
   <div>
   <!-- <ul id="alm-selected-filters"></ul> -->
   </div>
   <?php echo do_shortcode('[ajax_load_more repeater="template_1" id="my_alm_filters" css_classes="container" transition_container_classes="row" post_type="results" posts_per_page="12" scroll="false" transition="fade" button_label="Load More" filters="true" target="work_listing industries_listing"]'); ?>
   <div id="response"></div>
</div><!-- .work-wrapper -->

<script>
$('.dropdown-menu').on('click', function(e) {
   e.stopPropagation();
});
</script>