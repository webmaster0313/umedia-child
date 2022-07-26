<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );


function umedia_remove_scripts() {
    wp_dequeue_style( 'umedia-styles' );
    wp_deregister_style( 'umedia-styles' );

    wp_dequeue_script( 'umedia-scripts' );
    wp_deregister_script( 'umedia-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'umedia_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-umedia-styles', get_stylesheet_directory_uri() . '/css/child-theme.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-umedia-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array(), $the_theme->get( 'Version' ), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'umedia-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );


/* ADD EXPANDING SEARCH BAR TO NAV */
/*function add_last_nav_item($items, $args) {
    if( $args->theme_location == 'primary' ){
    $items .= '<li><div><form role="search" method="get" class="search-form" action="https://beta.udigstudio.com">
          <label>
                <input type="search"
                autocomplete="off"
                class="search-field"
                placeholder="Search"
                value="" 
                name="s"
                title="Search">
          </label>
          <input type="submit" class="search-submit" value="Search">
      </form></div></li>';
  }
  return $items;
}
  add_filter('wp_nav_menu_items','add_last_nav_item', 10, 2);
  */

/* Add Theme Settings */
  if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/* Add Custom Footer Menu */
function footer_menu() {
    register_nav_menus(
      array(
        'Footer_Bottom_Bar' => __( 'Bottom Footer Menu' ),
        'Footer_Menu' => __( 'Footer Menu' ),
       // 'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'footer_menu' );

  // Limit Word count in the_excerpt and the_content
  // Now, in every place where you use the_excerpt() or the_content() in your loop, 
  // use excerpt($limit) or content($limit).
  // For example if you want to limit your excerpt length to 30 words use echo excerpt(30) and for content.


  function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    }	
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
  }
   
  function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
      array_pop($content);
      $content = implode(" ",$content).'...';
    } else {
      $content = implode(" ",$content);
    }	
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]>', $content);
    return $content;
  }

  // Limit Word count in the_excerpt and the_content
  // You can change the length 50 to your desired character length. 
  //And also ‘more’ to what text you want to display. 
  //Then call your function <?php echo get_excerpt();  wherever you are planning on getting your posts.

  function get_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 34);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    //$excerpt = $excerpt.'... <a href="'.get_the_permalink().'">more</a>';
    $excerpt = $excerpt.'...';
    return $excerpt;
    }

/*
** Generate breadcrumbs
*/
function get_breadcrumb() {
  echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
  if (is_category() || is_single()) {
      echo "&nbsp;&nbsp;>&nbsp;&nbsp;";
      the_category(' &bull; ');
          if (is_single()) {
              echo " &nbsp;&nbsp;>&nbsp;&nbsp; ";
              the_title();
          }
  } elseif (is_page()) {
      echo "&nbsp;&nbsp;>&nbsp;&nbsp;";
      echo the_title();
  } elseif (is_search()) {
      echo "&nbsp;&nbsp;>&nbsp;&nbsp;Search Results for... ";
      echo '"<em>';
      echo the_search_query();
      echo '</em>"';
  }
}

// Redefine Posts to have custom prefix URL. ie. digging-in

function add_rewrite_rules( $wp_rewrite )
{
    $new_rules = array(
        'digging-in/(.+?)/?$' => 'index.php?post_type=post&name='. $wp_rewrite->preg_index(1),
    );

    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'add_rewrite_rules'); 

function change_blog_links($post_link, $id=0){

    $post = get_post($id);

    if( is_object($post) && $post->post_type == 'post'){
        return home_url('/digging-in/'. $post->post_name.'/');
    }

    return $post_link;
}
add_filter('post_link', 'change_blog_links', 1, 3);



/*CUSTOM POST TYPE - RESULTS */
function my_custom_post_results() {
  $labels = array(
    'name'               => _x( 'Work', 'post type general name' ),
    'singular_name'      => _x( 'Work', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Work' ),
    'edit_item'          => __( 'Edit Work' ),
    'new_item'           => __( 'New Work' ),
    'all_items'          => __( 'All Work' ),
    'view_item'          => __( 'View Work' ),
    'search_items'       => __( 'Search Work' ),
    'not_found'          => __( 'No results found' ),
    'not_found_in_trash' => __( 'No results found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Work'
  );
  $args = array(
    'labels'        => $labels,
		'taxonomies' => array('category', 'post_tag'),
    'description'   => 'Contains our results',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'rewrite' => array('slug' => 'work'),
    'has_archive'   => false,
  );
  register_post_type( 'results', $args );
}
add_action( 'init', 'my_custom_post_results' );

/*CUSTOM POST TYPE - CAPABILITIES */
function my_custom_post_capability() {
  $labels = array(
    'name'               => _x( 'Capabilities', 'post type general name' ),
    'singular_name'      => _x( 'Capability', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Capability' ),
    'edit_item'          => __( 'Edit Capability' ),
    'new_item'           => __( 'New Capability' ),
    'all_items'          => __( 'All Capabilities' ),
    'view_item'          => __( 'View Capability' ),
    'search_items'       => __( 'Search Capabilities' ),
    'not_found'          => __( 'No results found' ),
    'not_found_in_trash' => __( 'No results found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Capabilities'
  );
  $args = array(
    'labels'        => $labels,
		'taxonomies' => array('category', 'post_tag'),
    'description'   => 'Contains our Capabilities',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'capabilities', $args );
}
add_action( 'init', 'my_custom_post_capability' );

/*CUSTOM POST TYPE - Videos */
function my_custom_post_videos() {
  $labels = array(
    'name'               => _x( 'Videos', 'post type general name' ),
    'singular_name'      => _x( 'Video', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'video' ),
    'add_new_item'       => __( 'Add New Video' ),
    'edit_item'          => __( 'Edit Video' ),
    'new_item'           => __( 'New Video' ),
    'all_items'          => __( 'All Videos' ),
    'view_item'          => __( 'View Vidoes' ),
    'search_items'       => __( 'Search Videos' ),
    'not_found'          => __( 'No results found' ),
    'not_found_in_trash' => __( 'No results found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Videos'
  );
  $args = array(
    'labels'        => $labels,
	  'taxonomies' => array('category', 'post_tag'),
    'description'   => 'Video Posts',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'videos', $args );
}
add_action( 'init', 'my_custom_post_videos' );

/*CUSTOM POST TYPE - EVENTS */

function my_custom_post_events() {
  $labels = array(
    'name'               => _x( 'Events', 'post type general name' ),
    'singular_name'      => _x( 'Event', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Event' ),
    'add_new_item'       => __( 'Add New Event' ),
    'edit_item'          => __( 'Edit Event' ),
    'new_item'           => __( 'New Event' ),
    'all_items'          => __( 'All Events' ),
    'view_item'          => __( 'View Events' ),
    'search_items'       => __( 'Search Events' ),
    'not_found'          => __( 'No results found' ),
    'not_found_in_trash' => __( 'No results found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Events'
  );
  $args = array(
    'labels'        => $labels,
	  'taxonomies' => array('category', 'post_tag'),
    'description'   => 'Events',
    'public'        => true,
    'menu_position' => 6,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
    'has_archive'   => true,
  );
  register_post_type( 'events', $args );
}
add_action( 'init', 'my_custom_post_events' );


//PAGINATION

if ( ! function_exists( 'pagination' ) ) :
  function pagination( $paged = '', $max_page = '' )
  {
      $big = 999999999; // need an unlikely integer
      if( ! $paged )
          $paged = get_query_var('paged');
      if( ! $max_page )
          $max_page = $wp_query->max_num_pages;

      echo paginate_links( array(
          'base'       => str_replace($big, '%#%', esc_url(get_pagenum_link( $big ))),
          'format'     => '?paged=%#%',
          'current'    => max( 1, $paged ),
          'total'      => $max_page,
          'mid_size'   => 1,
          'prev_text'  => __('«'),
          'next_text'  => __('»'),
          'type'       => 'list'
      ) );
  }
endif;


// AJAX Filter Tax Post Type
/*
add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');
 
function misha_filter_function(){
	$args = array(
    'post_type' => 'results',
		'orderby' => 'date', // we will sort posts by date
    'order'	=> $_POST['date'] ,// ASC or DESC
    'posts_per_page' => -1

	);
 
	// for taxonomies / categories
	if( isset( $_POST['categoryfilter'] ) )
		$args['tax_query'] = array(
			array(
        'taxonomy' => 'category',
        "key" =>  "category",
				'field' => 'id',
        'terms' => $_POST['categoryfilter'],
        
			)
		);
 
	$query = new WP_Query( $args );
 
	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post(); ?>
     <?php // echo '<h2>' . $query->post->post_title . '</h2>'; ?>
     <div class="work-card">
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="work-image">
                <?php $backgroundImg = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
                  <a href="<?php echo get_permalink(get_the_ID()); ?>">
                    <img src="<?php echo $backgroundImg;  ?>" />
                  </a>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-8">
              <div class="work-title">
                <a href="<?php echo get_permalink(get_the_ID()); ?>">
                  <h2>
                    <?php the_title(); ?>
                  </h2>
                </a>
              </div>
              <div class="category">
                <?php 
                  $cats = array();
                  foreach ((get_the_category())  as $category) {
                  $cat = get_category($category);
                  array_push($cats, $cat->name);
                  }
                  if (sizeOf($cats) > 0) {
                  $post_categories = implode(', ', $cats);
                  } else {
                  $post_categories = 'Not Assigned';
                  }
                  echo $post_categories; 
                ?>
              </div>
            </div>
        </div>
      </div>
    </div>
	<?php	endwhile;
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;
 
	die();
}*/


// Yoast Get Primary Category

function get_primary_category($category){
  $useCatLink = true;
  // If post has a category assigned.
  if ($category){
    $category_display = '';
    $category_link = '';
    if ( class_exists('WPSEO_Primary_Term') )
    {
      // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
      $wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
      $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
      $term = get_term( $wpseo_primary_term );
      if (is_wp_error($term)) {
        // Default to first category (not Yoast) if an error is returned
        $category_display = $category[0]->name;
        $category_link = get_category_link( $category[0]->term_id );
      } else {
        // Yoast Primary category
        $category_display = $term->name;
        $category_link = get_category_link( $term->term_id );
      }
    }
    else {
      // Default, display the first category in WP's list of assigned categories
      $category_display = $category[0]->name;
      $category_link = get_category_link( $category[0]->term_id );
    }
    // Display category
    if ( !empty($category_display) ){
      if ( $useCatLink == true && !empty($category_link) ){
      return ''.htmlspecialchars($category_display).'';
      } else {
      return ''.htmlspecialchars($category_display).'';
      }
    }
  }
}

// extension add on for relevanssi and ajax load more
function my_alm_query_args_relevanssi($args){
  $args = apply_filters('alm_relevanssi', $args);
  return $args;
}
add_filter( 'alm_query_args_relevanssi', 'my_alm_query_args_relevanssi');


// add button to excerpt undrerstrap
/*
function all_excerpts_get_more_link( $post_excerpt ) {

$post_excerpt = $post_excerpt . ' <p><a class="btn-readmore umedia-read-more-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __(
    'Read More',
    'umedia'
) . '</a></p>';
return $post_excerpt;
}

add_filter( 'wp_trim_excerpt', 'all_excerpts_get_more_link' );
*/



// exclude Private from search count
add_filter( 'asl_results', 'asl_exclude_passw_protected', 10, 1 );
function asl_exclude_passw_protected($results) {
	foreach ( $results as $k => &$r ) {
		$post = get_post( $r->id );
		if ( !empty( $post->post_password ) ) {
			unset($results[$k]);
		}
	}
    return $results;
}

add_filter( 'relevanssi_modify_wp_query', 'rlv_sort_by_title' );
function rlv_sort_by_title($q) {
	$q->set( 'orderby', array( 'post_title' => 'asc' ) );
	return $q;
}



add_filter( 'pre_get_posts', 'rlv_block_search' );
function rlv_block_search( $query ) {
    if ( ! empty( $query->query_vars['s'] ) ) {
        $blacklist = array( '大奖', 'q82', '.cn' ); // add blacklist entries here; no need for whole words, use the smallest part you can
        foreach ( $blacklist as $term ) {
            if ( mb_stripos( $query->query_vars['s'], $term ) !== false ) {
                exit();
            }
        }
     }
}
