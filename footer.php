<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<?php get_template_part( 'loop-templates/content', 'footer' ); ?>

<div class="wrapper-footer container-fluid" id="wrapper-footer">
	<div class="container px-0 footer-bottom-bar">
		<div class="row">

			<div class="col-sm-12 col-md-7">

				<footer class="site-footer" id="colophon">
					<div class="footer-bottom-bar-menu">
					<?php
						wp_nav_menu( array( 
							'theme_location' => 'Footer_Bottom_Bar', 
							'container_class' => 'menu',
							) ); 
          ?>
           <?php // the_field('phone_number', 'option'); ?>
					</div><!-- footer-bottom-bar-menu -->
				</footer><!-- #colophon -->
			</div><!--col end -->

			<div class="col-sm-12 col-md-5 text-left text-md-right">
				<footer class="site-footer" id="colophon">
					<div class="site-info">
						&copy 2022 UDig LLC. All rights reserved.
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div>

		</div><!-- row end -->
	</div><!-- container-fluid end -->
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<script type="text/javascript">

(function(){

vtid = 111216;var a = document.createElement('script'); a.async=true;

a.src=('https:'==document.location.protocol ? 'https://' : 'http://') + 'code.visitor-track.com/VisitorTrack2.js';

var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(a,s);

})();

</script>
<script> (function(){ window.ldfdr = window.ldfdr || {}; (function(d, s, ss, fs){ fs = d.getElementsByTagName(s)[0]; function ce(src){ var cs = d.createElement(s); cs.src = src; setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1); } ce(ss); })(document, 'script', 'https://lftracker.leadfeeder.com/lftracker_v1_Yn8J1xYRlopgW0Rk.js'); })(); </script>
<script>
$(window).scroll(function(){
    $(".scroll-hint").css("opacity", 1 - $(window).scrollTop() / 360);
  });
</script>


<?php wp_footer(); ?>
<script type="text/javascript"> _linkedin_partner_id = "3196089"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(){var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3196089&fmt=gif" /> </noscript>
<script type="text/javascript"> 

  $( window ).resize(function() {
    $('.slider-group').not('.slick-initialized').slick('resize');
  });

  $('.review-slider-group').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<span class="prev_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chevron-left.svg" alt=""/></span>',
    nextArrow: '<span class="next_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chevron-right.svg" alt=""/></span>',
  });

  $('.values-slider-group').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<span class="prev_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chevron-left.svg" alt=""/></span>',
    nextArrow: '<span class="next_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chevron-right.svg" alt=""/></span>',
  });

  $('.slider-group').slick({
    dots: false,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<span class="prev_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chevron-left.svg" alt=""/></span>',
    nextArrow: '<span class="next_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/chevron-right.svg" alt=""/></span>',
    responsive: [
      {
        breakpoint: 1920,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
});
</script>
<script>
  jQuery(function($){
    $('.filterselect').change(function(){ // Load on change 
	  // AJAX request
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
      }

		});
		return false;
	});
});

// Set Toggle Close to Work and Blog Category filter.
$('.alm-filter--inner').hide(); // HIDE ALL INITIALLY
$('.alm-filter div').click(function(){
  $('.alm-filter--inner').eq(  $(this).index()  ).toggle();
});
</script>
<script>
  // Jquery toggle div, allow clicking outside of div to close, also allow everything inside the div clickable
  $('.alm-filter').click(function(event) {
  $(".alm-filter--inner").show();
  disabledEventPropagation(event);
  //console.log('2nd event');
});
$('.alm-filter--inner').click(function(event) {
  disabledEventPropagation(event);
  //console.log('3rd event');
});
$(document).click(function() {
  $(".alm-filter--inner").hide();
  //console.log('1st event');
});

function disabledEventPropagation(event) {
  if (event.stopPropagation) {
    event.stopPropagation();
  } else if (window.event) {
    window.event.cancelBubble = true;
  }
}
</script>
</body>
</html>