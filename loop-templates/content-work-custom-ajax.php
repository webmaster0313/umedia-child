<?php
/**
 * Partial template for content in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="titlebar">
  <h1 class="page-title"><?php echo the_field('work_title'); ?></h1>
</div><!-- .titlebar -->
<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/full-circle-element.png" class='full-circle-element-work' />

<div class='work-header'>
  <div class='container-fluid'>
    <div class="row">
      <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
      <?php /*
      $filter_array = array(
         "id" =>  "work_listing",
         "style" =>  "change",
         "date_created" =>  1604433517,
         "date_modified" =>  1604989103,
         "filters" =>  array(
            array(
               "key" =>  "category__and",
               "field_type" =>  "checkbox",
               
               // Dev Site Term ID's
               // "exclude" =>  "3780,3800,3785,3787,3784,3781,4382,3805,4385,1241,883,3809,4,672,3786,3796,3801,3815,3791,3789,3813,3806,3788,3814,3812,3799,673,3794,4388,4381,4386,3790,3816,1125,4387,3811,3797,4383,3817,3808,3798,3793,4258,856,3782,1268,3807,1267,3802,3792,3803,1,4384,3783,1224,3795,3810,",
               "exclude" =>  "1752, 1725, 1763, 1770, 1771, 1734, 1743, 1769, 1779, 1703, 1712, 1750, 1715, 1762, 1707, 1698, 1726, 1709, 1735, 1764, 1775, 1742, 1732, 1740, 1746, 1773, 1758, 1749, 1741, 1731, 1720, 1711, 1710, 1704, 1733, 1767, 1768, 1699, 1729, 1717, 1738, 1755, 1718, 1714, 1772, 1754, 1716, 1747, 1739, 1705, 1744, 1760, 1727, 1766, 1748, 1713, 1761, 1728, 1723, 1730, 1751, 1724, 1780, 1765, 1776, 1701, 1757, 1700, 1777, 1708, 1, 1722, 1778, 1745, 1736, 1737, 1759, 1702",
               "label" =>  "Services",
               "title" =>  "Services",
               "checkbox_toggle" =>  "before",
               "checkbox_toggle_label" =>  "Select All",
               "section_toggle" =>  "true",
            // 'hide_empty' => 1,
               
            ),
            array(
               "key" =>  "category",
               "field_type" =>  "checkbox",
               
               // Dev Site Term ID's
               // "exclude" =>  "3780,3800,3785,3787,3784,3781,3805,1241,883,3809,4,672,3786,3796,3801,3815,3791,3779,3789,3813,3806,3788,3814,3812,3799,673,3794,3790,3816,1125,3811,3797,3817,3808,3798,3793,4258,856,3782,3807,3802,4389,3778,4390,3792,4391,3803,1,3783,1224,3795,3810,",
               
               "exclude" =>  "1752, 1725, 1763, 1770, 1734, 1743, 1779, 1703, 1712, 1750, 1715, 1762, 1707, 1698, 1726, 1709, 1735, 1764, 1775, 1742, 1732, 1721, 1740, 1746, 1773, 1758, 1749, 1741, 1731, 1720, 1711, 1710, 1704, 1733, 1699, 1729, 1717, 1738, 1755, 1718, 1714, 1754, 1716, 1747, 1739, 1705, 1760, 1727, 1766, 1748, 1713, 1761, 1728, 1723, 1730, 1724, 1780, 1776, 1719, 1753, 1701, 1757, 1700, 1756, 1777, 1708, 1, 1722, 1745, 1736, 1737, 1759, 1702",
               "label" =>  "Industries",
               "title" =>  "Industries",
               "checkbox_toggle" =>  "before",
               "checkbox_toggle_label" =>  "Select All",
               "section_toggle" =>  "true",
               //'hide_empty' => 1,
            )
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

  
      <!-- .col-sm-12 .col-md-6 -->
        

    </div><!-- .row -->
  </div><!-- .container-fluid -->
</div><!-- .blog-header -->
<div class='work-wrapper'>
<div>
  <!-- <ul id="alm-selected-filters"></ul> -->
</div>

   <?php
     // echo do_shortcode('[ajax_load_more repeater="template_1" id="my_alm_filters" container_type="div" css_classes="container-fluid" post_type="results" transition_container_classes="row" posts_per_page="9" scroll="false" transition="fade" button_label="Load More" filters="true" target="work_listing industries_listing"]'); 
   ?>
   <?php
      global $wpdb;
      $results = $wpdb->get_results( 
      "select
         t.term_id,
         t.name,
         tt.description
      from
         wp_term_taxonomy tt inner join wp_terms t on tt.term_id = t.term_id
      where
         tt.taxonomy='category'
         and tt.parent=1781", OBJECT );
                                       
  // foreach($results as $service) {
      // echo $service->term_id;
  // }
                  
    ?>


<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
	<?php
    //  if( $results = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'ID', 'order' => 'ASC', ) ) ) :  
        
         foreach($results as $service) :
         echo '<li>';
         echo '<input class="filterselect" type="checkbox" name="categoryfilter" value="' . $service->term_id . '">';
         echo ' <label>' . $service->name . '</label>';
         echo '</li>';
         endforeach;
        
     // endif;

	?>
	<input type="hidden" name="action" value="myfilter">
</form>
<div id="response"></div>

</div><!-- .wrapper -->

<script>
$('.dropdown-menu').on('click', function(e) {
e.stopPropagation();
});
</script>