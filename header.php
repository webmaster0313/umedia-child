<?php
	/**
	 * The header for our theme
	 *
	 * Displays all of the <head> section and everything up till <div id="content">
	 *
	 * @package UnderStrap
	 */
	// Exit if accessed directly.
	defined( 'ABSPATH' ) || exit;
	$container = get_theme_mod( 'umedia_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php get_stylesheet_directory_uri() . '/css/greenhouse.css' ?>"/>
	
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.1/jquery.stellar.js"></script>

	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38516124-4"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	
	gtag('config', 'UA-38516124-4');
	</script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TK7MPWM');</script>
	<!-- End Google Tag Manager -->

	<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/19922643.js"></script>
	<!-- End of HubSpot Embed Code -->
	
	<!-- NEW 6/14/201 Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-5C0X3KZVX3"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'G-5C0X3KZVX3');
	</script>

<script type="text/javascript">
	piAId = '982832';
	piCId = '91434';
	piHostname = 'pi.pardot.com';

	(function() {
	function async_load(){
	var s = document.createElement('script'); s.type = 'text/javascript';
	s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
	var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
	}
	if(window.attachEvent) { window.attachEvent('onload', async_load); }
	else { window.addEventListener('load', async_load, false); }
	})();
</script>
	
	</head>
	
<body <?php body_class(); ?> <?php umedia_body_attributes(); ?>>	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TK7MPWM"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">	
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
		<?php if ( is_front_page() ) : ?>
		<div class="sticky">
		<?php else : ?>
		<div class="stickynavbar">
		<?php endif; ?>
			<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary fixed-top px-0" aria-label="Main Navigation">
				<div class="container px-0">
					<div class="row d-none d-md-flex align-items-center no-gutters" style="width:100%;">
						<div class="col-auto">
							<!-- Your site title as branding in the menu -->
							<a rel="home" class="d-block" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/UDigLogo.svg" alt="UDig" />
							</a>
						</div>
						<div id="desktop-nav-links" class="col text-center px-0">
							<!-- Desktop Menu -->
							<?php
								wp_nav_menu(
									array(
									'theme_location'  => 'primary',
									'container_class' => '',
									'container_id'    => 'main-nav',
									'menu_class'      => 'navbar-nav d-block mx-auto text-center',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 2,
									'walker'          => new Umedia_WP_Bootstrap_Navwalker(),
									)
								);
							?>
							<!-- End Menus -->
						</div>
						<div class="col-auto px-0">
							<button class="contact-btn" onclick="window.location.href='<?php echo get_home_url(); ?>/contact'">Contact Us</button>
							<form id="desktop-search" role="search" method="get" class="search-form d-inline float-right" action="/">
								<input 
									type="search"
									autocomplete="on"
									class="search-field"
									placeholder="Search"
									value="" 
									name="s"
									title="Search"
									id="search-input"
								>
								<!-- <i class="fa fa-times"></i> --> <!-- THIS IS WHERE IT'S SUPPOSED TO BE GONE. -->
								<input type="submit" class="search-submit" value="Search">
							</form>
							<div class="clear"></div>
						</div>
					</div>
					<div class="d-flex d-md-none w-100 align-items-center">
						<div class="col">
							<!-- Your site title as branding in the menu -->
							<a class="d-block" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/UDigLogo.svg" alt="UDig"/>
							</a>
						</div>
						<div class="col text-right">
							<!-- Mobile Hamburger Menu -->
							<button class="navbar-toggler ml-auto text-white border-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'umedia' ); ?>">
								<span class="navbar-toggler-icon"></span>
							</button>
						</div>
					</div>
				</div><!-- .container -->
			</nav><!-- .site-navigation -->
			<!-- Desktop Menu -->
			<div id="navbarNavDropdown" class="collapse navbar-collapse mobile-nav">
				<?php
					wp_nav_menu(
						array(
						'theme_location'  => 'primary',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'navbar-nav pb-0',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Umedia_WP_Bootstrap_Navwalker(),
						)
					);
				?>
				<ul class="navbar-nav py-0">
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41 nav-item">
						<a class="nav-link" href="<?php echo get_home_url(); ?>/contact">Contact Us</a>
					</li>
				</ul>
				<form id="mobile-search" role="search" method="get" class="search-form pt-3 pb-4" action="/">
					<input 
						type="search"
						autocomplete="off"
						class="mobile-search-field"
						placeholder="Search"
						value="" 
						name="s"
						title="Search"
					>
					<input type="submit" class="search-submit" value="Search">
				</form>
			</div>
			<!-- End Menus -->
		</div><!-- .sticky -->
	</div><!-- #wrapper-navbar end -->
	
