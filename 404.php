<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'umedia_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

  <div class="px-0 container-fluid" id="content" tabindex="-1">

    <main class="site-main" id="main">

      <div class="error-page">
        <div class="container px-0">
          <div class="row align-items-center">
            <div class="col-8 col-md-6">
              <div class="titlebar">
                <h1 class="page-title pl-3 pl-sm-0">OOPS!</h1>
                <div class="primary-bar-extension"></div>
              </div>
            </div>
          </div>
        
          <div class="super-body section-margin mx-4 mx-sm-0">
            <div class="row">
              <div class="col-12">
               <h2>This page no longer exists.</h2> 
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 error-subtitle">
              <h2>Maybe Try</h2>
            </div>
          </div>
          
          <div class="row" style="margin-bottom: 4rem;">
            <div class="col-sm-12 col-md-6 error-menu-links">
              <ul class="mb-0">
                <li><a href="<?php echo get_home_url(); ?>/">Home</a></li>
                <li><a href="<?php echo get_home_url(); ?>/what-we-do">What We Do</a></li>
                <li><a href="<?php echo get_home_url(); ?>/our-work">Our Work</a></li>
                <li><a href="<?php echo get_home_url(); ?>/who-we-are">Who We Are</a></li>
                <li><a href="<?php echo get_home_url(); ?>/digging-in">Digging In</a></li>
                <li><a href="<?php echo get_home_url(); ?>/careers">Careers</a></li>
              </ul>
            </div>
            <div class="col-sm-12 col-md-6 error-menu-links">
              <ul class="mb-0">
                <li><a href="<?php echo get_home_url(); ?>/contact">Contact Us</a></li>
                <li><a href="<?php echo get_home_url(); ?>/richmond">Richmond</a></li>
                <li><a href="<?php echo get_home_url(); ?>/nashville">Nashville</a></li>
                <li><a href="<?php echo get_home_url(); ?>/washington-dc">Washington, DC</a></li>
              </ul>
            </div>
          </div>
            
        </div>	<!-- .container -->
        
			</div><!-- .error-page -->
      
    </main><!-- #main -->

  </div><!-- #content -->

</div><!-- #wrapper -->

<?php
get_footer();
