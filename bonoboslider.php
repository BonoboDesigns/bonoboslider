<?php /*
Plugin Name: Bonobo Slider
Plugin URI: http://unscene.us/portfolio/
Description: Use Award Winning Bonobo Slider from Unscene in your Wordpress and enjoy the benefits of a responsive clean slider.
Author: Abraham Perez
Version: 1.0
Author URI: http://unscene.us/about
*/
// #1. - Create Post Type
// #1.1 - technical options
// #1.1 initialize bvsPostType
// #2 - create meta box app_url
// #2.1 - Content for the app_url box
// #2.2 - save app_url meta box
// #3 - Create Options Page
// #3.1 - Register Options
// #4 - Define Image Sizes
// #5 - create slider loop
// #5.1 - add loop scripts in footer
// #5.2 - add loop styles in head
// #6 - wrap create shortcode


// Derive the current path and load up Sanity
$plugin_path = plugin_dir_path(__FILE__).'/';
if(class_exists('SanityPluginFramework') != true)
    include($plugin_path.'framework/sanity.php');

/*
*		Define your plugin class which extends the SanityPluginFramework
*		Make sure you skip down to the end of this file, as there are a few
*		lines of code that are very important.
*/ 
class bvs extends SanityPluginFramework {
	
	/*
	*	Some required plugin information
	*/
	var $version = '1.0';
	
	/*
	*		Required __construct() function that initalizes the Sanity Framework
	*/
	function __construct() {
      parent::__construct(__FILE__);
       /*
		* #1 - Create Post Type
		*/
		function bvsPostType() {
		// Set UI labels
			$labels = array(
				'name'                => _x( 'Sliders', 'Post Type General Name', 'twentythirteen' ),
				'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'twentythirteen' ),
				'menu_name'           => __( 'Sliders', 'twentythirteen' ),
				'parent_item_colon'   => __( 'Parent Slider', 'twentythirteen' ),
				'all_items'           => __( 'All Sliders', 'twentythirteen' ),
				'view_item'           => __( 'View Slider', 'twentythirteen' ),
				'add_new_item'        => __( 'Add New Slider', 'twentythirteen' ),
				'add_new'             => __( 'Add New', 'twentythirteen' ),
				'edit_item'           => __( 'Edit Slider', 'twentythirteen' ),
				'update_item'         => __( 'Update Slider', 'twentythirteen' ),
				'search_items'        => __( 'Search Slider', 'twentythirteen' ),
				'not_found'           => __( 'Not Found', 'twentythirteen' ),
				'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
			);

		// #1.1 - technical options
			$args = array(
				'label'               => __( 'sliders', 'twentythirteen' ),
				'description'         => __( 'Slider news and reviews', 'twentythirteen' ),
				'labels'              => $labels,
				// Features this CPT supports in Post Editor
				'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'custom-fields' ),
				// You can associate this CPT with a taxonomy or custom taxonomy. 
				'taxonomies'          => array( 'genres', 'category'),
				/* A hierarchical CPT is like Pages and can have
				* Parent and child items. A non-hierarchical CPT
				* is like Posts.
				*/	
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => true,
				'show_in_admin_bar'   => true,
				'menu_position'       => 5,
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'capability_type'     => 'page',
			);
			// Registering your Custom Post Type
			register_post_type( 'sliders', $args );

		}
		// #1.1 initialize bvsPostType
		add_action( 'init', 'bvsPostType', 0 );

		// #2 - create meta box app_url
		add_action( 'add_meta_boxes', 'bvs_meta_box_post' );
		function bvs_meta_box_post( $post ) {
		    add_meta_box(
		            'app_url', // ID, should be a string
		            'Slider URL', // Meta Box Title
		            'bvs_meta_box_post_content', // Your call back function, this is where your form field will go
		            'sliders', // The post type you want this to show up on, can be post, page, or custom post type
		            'normal', // The placement of your meta box, can be normal or side
		            'high' // The priority in which this will be displayed
		        );
		}
		// #2.1 - Content for the app_url box
		function bvs_meta_box_post_content() {
			// info current post
		    global $post;		    
		    //metabox value if is saved
		    $app_url = get_post_meta($post->ID, 'app_url', true);
		    // ADD here more custom field 	    
		    // security check
		    wp_nonce_field(__FILE__, 'bvs_nonce');
		    ?>
		    <p>URL you want the slider to point to. <br/><input name="app_url" id="app_url" value="<?php echo $app_url; ?>" style="border: 1px solid #ccc; margin: 10px 10px 0 0"/> <small>Example: ---> <strong>http://unscene.us/</strong></small></p>
		    <!-- *** ADD here more custom field  *** -->	    
		    <?php
			
		}
		// #2.2 - save app_url meta box
		add_action('save_post', 'bvsSaveResource');
		function bvsSaveResource(){
		    global $post;
		    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
		        return;
		    }
		    if ($_POST && wp_verify_nonce($_POST['bvs_nonce'], __FILE__) ) {
		        if ( isset($_POST['app_url']) ) {
		            update_post_meta($post->ID, 'app_url', $_POST['app_url']);
		            //ADD here more custom field 
		        }
		    }  
		}

      // #3 - Create Options Page
		add_action( 'admin_menu', 'bvsCreatePage' );
		function bvsCreatePage(){
			global $bvsPage;
			$file = dirname(__FILE__) . '/bonoboslider/';
			$plugin_url = plugin_dir_url($file);
			$bvsPage = add_menu_page( 'bvs', 'bvs', 'manage_options', 'bvs', 'bvsConfigPage', $plugin_url . 'templates/assets/images/icon-backend.png', 62);
		}

		add_action( 'admin_init', 'bvsRegisterSettings' );
		// #3.1 - Register Options
		function bvsRegisterSettings() {
			register_setting( 'bvsStart', 'bvsjQuery');
		}

		function bvsConfigPage(){
			require_once($plugin_path.'templates/admin/page.php');
		}


		// #4 - Define Image Sizes
		if ( function_exists( 'add_image_size' ) ) {
			add_image_size( 'bvs-image', 650, 290, true );
		}
		
	
		function bvs_functionCorrection() {
			wp_enqueue_style( 'style-name', get_stylesheet_uri() );
			wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
		}
		add_action( 'wp_footer', 'bvs_JS', 99999999999999 , 1 );


		// #5 - create slider loop
		function show_featured_posts($numbers,$category,$post_type,$orderby,$type) {
			global $post;
			//get $numbers of featured posts
			$featured_posts_array = get_posts( 'post_type='.$post_type.'&orderby='.$orderby.'&category_name='.$category.'&numberposts='.$numbers.'&post_status=publish');
			$instance = 'swipe-'.uniqid();
			$output .= '<!-- Swiper -->';
		    $output .= '<div class="swiper-container" id="'.$instance.'">';
		    $output .= '<div class="swiper-wrapper">';
			foreach ($featured_posts_array as $post) :  setup_postdata($post); 
				$slider_title = "swiper_title".get_the_ID(); //assign the postID as title of the image
				$slider_attribute =  the_title_attribute( 'echo=0' );
				if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { 
						$bvsImage = get_the_post_thumbnail(get_the_ID(), 'full', array( "class" => "post_thumbnail", 'title' => $slider_attribute ));
				}
				$output .= "<div class='swiper-slide'"." style='background-image: url()'>";
				if ( get_post_meta($post->ID, 'app_url', true) !== "") {
					$slider_url = get_post_meta($post->ID, 'app_url', true); } else { 
					$slider_url = get_the_permalink(get_the_ID()); }; //assign the postID as title of the image
				$output .= "<a href='".$slider_url."' target='_new'>".$bvsImage."</a><div id='swipe".get_the_ID()."' class='html-caption'>";
				$output .= "<h2><a href='".$slider_url."' title='".$slider_attribute."'>".get_the_title()."</a></h2>".get_the_excerpt()."</div></div>";
			endforeach;
			$output .= '</div>';
			$output .= '<!-- Add Pagination --><div class="swiper-pagination"></div>';
			$output .= '<!-- Add Arrows --><div class="swiper-button-next"></div><div class="swiper-button-prev"></div></div>';
			return $output;
			//reset WP query
			wp_reset_query();
		}
		
		// #5.2 - add loop styles in head
		add_action('wp_print_styles', 'add_bvsCSS');
		function add_bvsCSS() {
			 wp_register_style('bvs_theme_style', plugins_url( 'bonoboslider/templates/assets/css/swiper.min.css', dirname(__FILE__) ) );
	         wp_enqueue_style( 'bvs_theme_style');
	    }
	    // #5.3 - option add jquery to footer
		if ( get_option('bvsjQuery') == '1') { 
			function include_bvs_scripts() {
				wp_deregister_script( 'jquery' );
				wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
				wp_enqueue_script( 'jquery' );
			}
			 
			add_action('wp_enqueue_scripts', 'include_bvs_scripts');
		}
		
		// 5.4 - add more variables
		$type = "centeredAuto";

		// #6 - wrap create shortcode
		function tg_featured_posts($atts, $content = null) {
			global $type;
			ob_start();
			extract(shortcode_atts(array(
				"numbers" => '5',
				"category" => '',
				"post_type" => 'any',
				"orderby" => 'date',
				"type" => "centeredAuto",			
			), $atts));
			echo show_featured_posts($numbers,$category,$post_type,$orderby,$type);
		 	$result = ob_get_contents(); // get everything in to $result variable
		    ob_end_clean();
		    return $result;
		}
		add_shortcode('featured', 'tg_featured_posts');


	    // #5.1 - add loop scripts in footer
		// add_action('wp_footer', 'bvs_JS', 999999999999, 1 );
		function bvs_JS() {
			global $type;
			echo '<script src="'.plugins_url( 'bonoboslider/templates/assets/js/swiper.min.js', dirname(__FILE__) ).'"></script>';
	        if ($type == "centeredAuto") {
		        echo "\n".'<!-- Initialize Swiper -->
			    <script>

				    var mySwiper = new Swiper(".swiper-container", {
				        autoplay: 5000,
				        autoplayDisableOnInteraction: false,
				        centeredSlides: true,
				        nextButton: ".swiper-button-next",
				        pagination: ".swiper-pagination",
				        paginationClickable: true,
				        prevButton: ".swiper-button-prev",
				        slidesPerView: 1,
				        spaceBetween: 30,
				        speed: 1000
				    });
							
					mySwiper.update();
					mySwiper.startAutoplay(); //just in case
			    </script>'."\n";
				echo '<link rel="stylesheet" href="'.plugins_url( 'bonoboslider/templates/assets/css/centeredAuto.css', dirname(__FILE__) ).'">';

	        } elseif ($type == "coverflow") {
		        echo "\n".'<!-- Initialize Swiper -->
			    <script>
				    var mySwiper = new Swiper(".swiper-container", {
				        autoplay: 7000,
				        autoplayDisableOnInteraction: false,
				        centeredSlides: true,
				        effect: "coverflow",
				        grabCursor: true,
				        lazyLoading:true,
				        loop:true,
				        nextButton: ".swiper-button-next",
				        pagination: ".swiper-pagination",
				        paginationClickable: true,
				        preloadImages: true,
				        prevButton: ".swiper-button-prev",
				        slidesPerView: 1,
				        speed: 600,
				        coverflow: {
				            rotate: 50,
				            stretch: 0,
				            depth: 100,
				            modifier: 1,
				            slideShadows : true
				        }
			    	});
					mySwiper.update();
					mySwiper.startAutoplay(); //just in case
			    </script>'."\n";
				echo '<link rel="stylesheet" href="'.plugins_url( 'bonoboslider/templates/assets/css/coverflow.css', dirname(__FILE__) ).'">';
	        } elseif ($type == "fade") {
			  echo "\n".'<!-- Initialize Swiper -->
			    <script>
				    var mySwiper = new Swiper(".swiper-container", {
				        autoplay: 4000,
				        autoplayDisableOnInteraction: false,
				        centeredSlides: true,
				        effect: "fade",
				        loop:true,
				        grabCursor: true,
				        nextButton: ".swiper-button-next",
				        pagination: ".swiper-pagination",
				        paginationClickable: true,
				        prevButton: ".swiper-button-prev",
				        slidesPerView: 1,
				        spaceBetween: 30,
				        speed: 1000
				    });
					mySwiper.update();
			    </script>'."\n";
				echo '<link rel="stylesheet" href="'.plugins_url( 'bonoboslider/templates/assets/css/fade.css', dirname(__FILE__) ).'">';
	        }
		    echo '<script>
			    jQSwipe = jQuery.noConflict();
			      jQSwipe(document).ready(function() {
						jQSwipe(window).load(function() {
	  							mySwiper.update();
	  							// mySwiper.swipeNext(true, true);
								mySwiper.startAutoplay(); //just in case
							});
				});
	
 				</script>';
		}


}
	/*
	*		Run during the activation of the plugin
	*/
	function activated() {
		add_option("bvsjQuery", '1', '', 'yes');
	}
	/*
	*		Run during the initialization of Wordpress
	*/
	function initialized() {
		
	}
	
	// abedit
    
	    var $admin_css = array('style' , 'fonts');
		// var $admin_js = array('script');
}


// Initalize the your plugin
$bvs = new bvs();

// Add an activation hook
register_activation_hook(__FILE__, array(&$bvs, 'activated'));

// Run the plugins initialization method
add_action('admin_init', __FILE__, array(&$bvs, 'initialized')); ?>