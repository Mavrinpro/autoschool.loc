<?php
/**
 * autoschool functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package autoschool
 */
define('PATH_TO_THEME', '/wp-content/themes/autoschool/');
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}



function dump($data)
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function autoschool_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on autoschool, use a find and replace
		* to change 'autoschool' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'autoschool', get_template_directory() . '/languages' );

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
		array(
			'menu-1' => esc_html__( 'Primary', 'autoschool' ),
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
			'autoschool_custom_background_args',
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
add_action( 'after_setup_theme', 'autoschool_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function autoschool_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'autoschool_content_width', 640 );
}
add_action( 'after_setup_theme', 'autoschool_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function autoschool_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'autoschool' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'autoschool' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'autoschool_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function autoschool_scripts() {
	wp_enqueue_script( 'wow_js', get_template_directory_uri() . '/src/js/free/wow.js', array(), _S_VERSION, true );
	wp_enqueue_style( 'autoschool-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'autoschool-style', 'rtl', 'replace' );
	if (is_page(82)) {
		wp_enqueue_style( 'autoschool-fancybox-css', get_template_directory_uri() . '/css/fancybox.min.css', array(), _S_VERSION );
	}
	wp_enqueue_script( 'autoschool-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if (is_page(82)){
		wp_enqueue_script( 'autoschool-fancybox', get_template_directory_uri() . '/js/fancybox.min.js', array(), _S_VERSION, true );

	}
	if (is_page(74)){
		wp_enqueue_script( 'autoschool-apimap', get_template_directory_uri() . '/js/modules/apimap.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'autoschool-map', get_template_directory_uri() . '/js/modules/map.js', array(), _S_VERSION, true );

	}


	wp_enqueue_script( 'customizer_js', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'autoschool_scripts' );





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

add_filter( 'upload_mimes', 'svg_upload_allow' );

# ?????????????????? SVG ?? ???????????? ?????????????????????? ?????? ???????????????? ????????????.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# ?????????????????????? MIME ???????? ?????? SVG ????????????.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime ?????? ?????? ??????????????, ???????????????? ??????
	// ?? ?????????? ???????????????? ?????????? ????????????????????????
	if( $dosvg ){

		// ????????????????
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// ????????????????
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}
// li class menu
function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// a class menu
function add_menu_link_class( $atts, $item, $args ) {
	if (property_exists($args, 'link_class')) {
		$atts['class'] = $args->link_class;
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


function my_nav_menu_submenu_css_class( $classes ) {
	$classes[] = 'dropdown-menu dropdown-primary';
	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class' );


## ?????????????? "??????????????: ", "??????????: " ?? ??.??. ???? ?????????????????? ????????????
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});


// Send form
add_action( 'wp_ajax_send_form', 'send_form' );
add_action( 'wp_ajax_nopriv_send_form', 'send_form' );
function send_form() {
	$name          = sanitize_text_field( $_POST['name'] );
	$phone         = sanitize_text_field( $_POST['phone'] );
	$agent         = $_SERVER['HTTP_USER_AGENT'];
	$ip            = $_SERVER['REMOTE_ADDR'];
	$arr           = [];
	$flag          = 0;
	$form_position = $_POST['form_position'];
	$pattern_phone = '/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/';
	//global $comment;


		if ( empty( $name ) ) {
			$arr['name'] = 1;
		$flag        = 1;
	}
		if ( empty( $phone ) ) {
			$arr['phone'] = 1;
			$flag = 1;
		}

		if ( ! preg_match( $pattern_phone, $phone ) ) {
			$arr['phone'] = 1;
		$flag       = 1;
	}

//	if ( empty( $name ) ) {
//		$arr['name'] = 1;
//		$flag        = 1;
//	}
//
//	if ( empty( $phone ) ) {
//		$arr['phone'] = 1;
//
//		$flag = 1;
//	}
//	if ( ! preg_match( $pattern_phone, $phone ) ) {
//		$arr['phone'] = 1;
//		$flag         = 1;
//	}
//	if ( empty($card) && $form_position == 'reviews' ) {
//		$arr['card'] = 1;
//		$flag        = 1;
//	}
//	if (  empty($comments) && $form_position == 'reviews' ) {
//		$arr['comments'] = 1;
//		$flag            = 1;
//	}

	if ( $flag == 0 ) {
		//$arr['success'] = '???????????? ?????????????? ????????????????????!';
		//$arr['form_position'] = $form_position;


		$arr = [
			'name' => $name,
			'phone' => $phone,
			'ip' => $ip,
			'iserAgent' => $agent,
			'success' => true
		];
//$arr['form_position'] = 555;
	}

	echo json_encode( $arr );
	file_put_contents(__DIR__ . '/array.txt', json_encode($arr, JSON_UNESCAPED_UNICODE), FILE_APPEND | LOCK_EX);
	die;
}

//-----------------
