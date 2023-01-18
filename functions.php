<?php
/**
 * hotbot functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hotbot
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'hotbot_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hotbot_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hotbot, use a find and replace
		 * to change 'hotbot' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hotbot', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			// array(
			// 	'menu-1' => esc_html__( 'Primary', 'hotbot' ),
			// )
			array(
				'Top-menu' => __('Top menu', 'hotbot'),
				'Footer-menu1' => __('Footer Explore HotBotVPN', 'hotbot'),
				'Footer-menu2' => __('Footer Help & Support', 'hotbot'),
				'Footer-menu3' => __('Footer Legal', 'hotbot'),
				'Language' => __('Language', 'hotbot'),
				'Affiliate' => __('Affiliate', 'hotbot'),

				//new menus for footer
				'Footer-menu-hotbotvpn' => __('Footer HotBotVPN', 'hotbot'),
				'Footer-menu-apps' => __('Footer VPN Apps', 'hotbot'),
				'Footer-menu-resources' => __('Footer VPN Resources', 'hotbot'),
				'Footer-menu-help' => __('Footer Help', 'hotbot'),
				'Footer-menu-social-media' => __('Footer Social Media', 'hotbot'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'hotbot_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'hotbot_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hotbot_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hotbot_content_width', 640 );
}
add_action( 'after_setup_theme', 'hotbot_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hotbot_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hotbot' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hotbot' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hotbot_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

function hotbot_scripts() {
	wp_enqueue_style( 'hotbot-style', get_stylesheet_uri(), array(), _S_VERSION );
	//wp_style_add_data( 'hotbot-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'hotbot-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hotbot-navigation', get_template_directory_uri() . '/assets/js/common.min.js', array(), null, true );
	wp_deregister_script('jquery');
	wp_deregister_script( 'wp-embed' );
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, false);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hotbot_scripts' );

// GTM
add_action('wp_head', 'google_tag_manager_head', 20);
function google_tag_manager_head() { ?>
    
<script>
window.dataLayer = window.dataLayer || [];
</script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MTR73FB');</script>
  <!-- End Google Tag Manager -->
<?php }

add_action('wp_body_open', 'google_tag_manager_body');
function google_tag_manager_body() { ?>
 
 <!-- Google Tag Manager (ns) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTR73FB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (ns) -->
<?php }

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function smartwp_remove_wp_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'style.min' );
   }
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

// category
   add_action( 'parse_query','changept' );
   function changept() {
	   if( is_category() && !is_admin() )
		   set_query_var( 'post_type', array( 'post', 'blog' ) );
	   return;
   }

   // author
   add_action( 'parse_query','changepta' );
   function changepta() {
	   if( is_author() && !is_admin() )
		   set_query_var( 'post_type', array( 'post', 'blog' ) );
	   return;
   }



   function register_custom_widget_area() {
		register_sidebar(
			array(
			'id' => 'footer-widget-area',
			'name' => esc_html__( 'Footer', 'hotbot' ),
			'description' => esc_html__( 'Add widgets here', 'hotbot' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-title-holder"><h5 class="header mt-3 mt-md-5 widget-title">',
			'after_title' => '</h5></div>'
			)
		);
	}
	add_action( 'widgets_init', 'register_custom_widget_area' );

include_once 'inc/inc-cj.php';
function collectCJCookies() {
    checkCJQueryParams();
}
add_action('init', 'collectCJCookies');

/* ---------------------------------------------------------------------------
 * Set hreflang="x-default" with WPML
 * --------------------------------------------------------------------------- */
add_filter('wpml_alternate_hreflang', 'wps_head_hreflang_xdefault', 10, 2);
function wps_head_hreflang_xdefault($url, $lang_code) {
      
    if($lang_code == apply_filters('wpml_default_language', NULL )) {
          
        echo '<link rel="alternate" href="' . $url . '" hreflang="x-default" />'.PHP_EOL;
    }
      
    return $url;
}


//option page

if (function_exists('acf_add_options_page')) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Top Ribbon',
		'menu_title'	=> 'Top Ribbon',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


/* function hb_ensure_nats_cookies() {
	if ($ncode = filter_input(INPUT_GET, "ncode", FILTER_DEFAULT) ?? $_GET["ncode"] ?? null) {
		setcookie("ncode", $ncode, time() + 86400, "/");
	}
} */


function hb_get_realip() {
	return $_SERVER["HTTP_X_REAL_IP"] ?? $_SERVER["REMOTE_ADDR"] ?? null;
}


function hb_is_debug() {
	static $debug;
	if ($debug === null) {
		// $_GET array is broken in this wordpress, so look at request URI
		$debug = preg_match("#[?&]showerrors(?=&|=|$)#", $_SERVER["REQUEST_URI"] ?? "") > 0;
	}
	return $debug;
}

function hb_get_geoinfo($ip = null) {
	if (!func_num_args()) {
		$ip = hb_get_realip();
	}
	
	$geo = geoip_record_by_name($ip) ?: ["country_code" => null, "country_name" => null];
	$geo["isp"] = geoip_isp_by_name($ip);
	$geo["ip"] = $ip;
	
	if (hb_is_debug()) {
		echo "<!-- ";
		var_dump($geo);
		echo " -->\n";
	}
	
	return $geo;
}


function hb_get_tracking_params() {
	$params = [];

	if (filter_has_var(INPUT_GET, "matchtype") && filter_has_var(INPUT_GET, "adgroupid") && filter_has_var(INPUT_GET, "campaignid")) {
		$params["source"] = "adwords";
		setcookie("trSource", "adwords", 0, "/");
	} else if (preg_match("#^/order-free\b#", $_SERVER["REQUEST_URI"])) { // TODO: && filter_input(INPUT_GET, "source") === "whale"
		$params["source"] = "whale";
	} else if (filter_input(INPUT_COOKIE, "cjData") && filter_input(INPUT_COOKIE, "cjEvent")) {
		$params["source"] = "cj";
	} else if (($temp = filter_input(INPUT_COOKIE, "trSource")) && preg_match("#^[a-z0-9_]+$#i", $temp)) {
		$params["source"] = $temp;
	} else if ($temp = $_SERVER["HTTP_REFERER"] ?? null) {
		$temp = parse_url(strtolower($temp), PHP_URL_HOST);
		if ($temp && !preg_match("#\b(boxedsand|hotbot|hotbotvpn)\.#", $temp)) {
			setcookie("trSource", $temp, 0, "/");
			$params["source"] = $temp;
		}
	}

	return $params;
}


function ht_get_geo_currency($code) {
	$map = [
		'BD' => 'BDT', 'BE' => 'EUR',
		'BF' => 'XOF', 'BG' => 'BGN',
		'BA' => 'BAM', 'BB' => 'BBD',
		'WF' => 'XPF', 'BL' => 'EUR',
		'BM' => 'BMD', 'BN' => 'BND',
		'BO' => 'BOB', 'BI' => 'BIF',
		'BJ' => 'XOF', 'JM' => 'JMD',
		'BV' => 'NOK', 'BW' => 'BWP',
		'WS' => 'WST', 'BQ' => 'USD',
		'BR' => 'BRL', 'BS' => 'BSD',
		'JE' => 'GBP', 'BZ' => 'BZD',
		'RU' => 'RUB', 'RW' => 'RWF',
		'RS' => 'RSD', 'TL' => 'USD',
		'RE' => 'EUR', 'TJ' => 'TJS',
		'RO' => 'RON', 'TK' => 'NZD',
		'GW' => 'XOF', 'GU' => 'USD',
		'GT' => 'GTQ', 'GS' => 'GBP',
		'GR' => 'EUR', 'GQ' => 'XAF',
		'GP' => 'EUR', 'JP' => 'JPY',
		'GY' => 'GYD', 'GG' => 'GBP',
		'GF' => 'EUR', 'GE' => 'GEL',
		'GD' => 'XCD', 'GB' => 'GBP',
		'GA' => 'XAF', 'SV' => 'USD',
		'GN' => 'GNF', 'GM' => 'GMD',
		'GL' => 'DKK', 'GI' => 'GIP',
		'HR' => 'HRK', 'HT' => 'HTG',
		'HU' => 'HUF', 'HK' => 'HKD',
		'HN' => 'HNL', 'HM' => 'AUD',
		'PR' => 'USD', 'PS' => 'ILS',
		'PW' => 'USD', 'PT' => 'EUR',
		'SJ' => 'NOK', 'PY' => 'PYG',
		'PA' => 'PAB', 'PF' => 'XPF',
		'PG' => 'PGK', 'PE' => 'PEN',
		'PK' => 'PKR', 'PH' => 'PHP',
		'PN' => 'NZD', 'PL' => 'PLN',
		'PM' => 'EUR', 'EH' => 'MAD',
		'EE' => 'EUR', 'EG' => 'EGP',
		'ZA' => 'ZAR', 'EC' => 'USD',
		'IT' => 'EUR', 'VN' => 'VND',
		'SB' => 'SBD', 'ET' => 'ETB',
		'SO' => 'SOS', 'SA' => 'SAR',
		'ES' => 'EUR', 'ME' => 'EUR',
		'MD' => 'MDL', 'MG' => 'MGA',
		'MF' => 'EUR', 'MA' => 'MAD',
		'MC' => 'EUR', 'UZ' => 'UZS',
		'MM' => 'MMK', 'ML' => 'XOF',
		'MO' => 'MOP', 'MN' => 'MNT',
		'MH' => 'USD', 'MK' => 'MKD',
		'MU' => 'MUR', 'MT' => 'EUR',
		'MW' => 'MWK', 'MV' => 'MVR',
		'MQ' => 'EUR', 'MP' => 'USD',
		'MS' => 'XCD', 'IM' => 'GBP',
		'UG' => 'UGX', 'TZ' => 'TZS',
		'MY' => 'MYR', 'MX' => 'MXN',
		'IL' => 'ILS', 'FR' => 'EUR',
		'IO' => 'USD', 'SH' => 'SHP',
		'FI' => 'EUR', 'FJ' => 'FJD',
		'FK' => 'FKP', 'FM' => 'USD',
		'FO' => 'DKK', 'NI' => 'NIO',
		'NL' => 'EUR', 'NO' => 'NOK',
		'NA' => 'NAD', 'VU' => 'VUV',
		'NC' => 'XPF', 'NE' => 'XOF',
		'NF' => 'AUD', 'NG' => 'NGN',
		'NZ' => 'NZD', 'NP' => 'NPR',
		'NR' => 'AUD', 'NU' => 'NZD',
		'CK' => 'NZD', 'XK' => 'EUR',
		'CI' => 'XOF', 'CH' => 'CHF',
		'CO' => 'COP', 'CN' => 'CNY',
		'CM' => 'XAF', 'CL' => 'CLP',
		'CC' => 'AUD', 'CA' => 'CAD',
		'CG' => 'XAF', 'CF' => 'XAF',
		'CD' => 'CDF', 'CZ' => 'CZK',
		'CY' => 'EUR', 'CX' => 'AUD',
		'CR' => 'CRC', 'CW' => 'ANG',
		'CV' => 'CVE', 'SZ' => 'SZL',
		'SX' => 'ANG', 'KG' => 'KGS',
		'KE' => 'KES', 'SR' => 'SRD',
		'KI' => 'AUD', 'KH' => 'KHR',
		'KN' => 'XCD', 'KM' => 'KMF',
		'SK' => 'EUR', 'KR' => 'KRW',
		'SI' => 'EUR', 'SN' => 'XOF',
		'SM' => 'EUR', 'SL' => 'SLL',
		'SC' => 'SCR', 'KZ' => 'KZT',
		'KY' => 'KYD', 'SG' => 'SGD',
		'SE' => 'SEK', 'DO' => 'DOP',
		'DM' => 'XCD', 'DJ' => 'DJF',
		'DK' => 'DKK', 'VG' => 'USD',
		'DE' => 'EUR', 'YE' => 'YER',
		'DZ' => 'DZD', 'US' => 'USD',
		'UY' => 'UYU', 'YT' => 'EUR',
		'UM' => 'USD', 'LB' => 'LBP',
		'LC' => 'XCD', 'LA' => 'LAK',
		'TV' => 'AUD', 'TW' => 'TWD',
		'TT' => 'TTD', 'TR' => 'TRY',
		'LK' => 'LKR', 'LI' => 'CHF',
		'LV' => 'EUR', 'TO' => 'TOP',
		'LU' => 'EUR', 'LR' => 'LRD',
		'LS' => 'LSL', 'TH' => 'THB',
		'TF' => 'EUR', 'TG' => 'XOF',
		'TD' => 'XAF', 'TC' => 'USD',
		'VA' => 'EUR', 'VC' => 'XCD',
		'AE' => 'AED', 'AD' => 'EUR',
		'AG' => 'XCD', 'AF' => 'AFN',
		'AI' => 'XCD', 'VI' => 'USD',
		'IS' => 'ISK', 'AM' => 'AMD',
		'AL' => 'ALL', 'AO' => 'AOA',
		'AS' => 'USD', 'AR' => 'ARS',
		'AU' => 'AUD', 'AT' => 'EUR',
		'AW' => 'AWG', 'IN' => 'INR',
		'AX' => 'EUR', 'AZ' => 'AZN',
		'IE' => 'EUR', 'ID' => 'IDR',
		'UA' => 'UAH', 'QA' => 'QAR',
		'MZ' => 'MZN'];
	return $map[$code] ?? "USD";
}


/* function hb_is_office() {
	return hb_get_realip() === "216.8.153.121";
} */

