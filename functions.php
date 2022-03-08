<?php

/**
 * tabula-rasa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tabula-rasa
 */

// var_dump($_COOKIE['modal-cookie']);
if ($_GET['modal']) :
	setcookie("modal-cookie", 'is_modal', 0, "/", "fizbankrot46.ru");

endif;
if (!function_exists('rasa_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rasa_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tabula-rasa, use a find and replace
		 * to change 'rasa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('rasa', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'rasa'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('rasa_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'rasa_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rasa_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('rasa_content_width', 640);
}
add_action('after_setup_theme', 'rasa_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rasa_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'rasa'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'rasa'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'rasa_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function rasa_scripts()
{
	wp_enqueue_style('rasa-style', get_stylesheet_uri(), array(), "1.0.12");
	
	wp_enqueue_script('jquery');

	wp_enqueue_script('rasa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('rasa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	wp_enqueue_script('rasa-libs', get_template_directory_uri() . '/js/scripts.min.js', array(), null, true);
	wp_enqueue_script('q-libs', get_template_directory_uri() . '/js/q.js', array(), null, true);

	//wp_enqueue_script( 'snowfall', get_template_directory_uri() . '/js/snowfall.js', array(), null, true);

	wp_enqueue_script('main', get_template_directory_uri() . '/js/common.js', array(), null, true);


	wp_localize_script('main', 'allAjax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce'   => wp_create_nonce('NEHERTUTLAZIT')
	));

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'rasa_scripts');

add_action('wp_ajax_universal_send', 'universal_send');
add_action('wp_ajax_nopriv_universal_send', 'universal_send');

function universal_send()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {

		$headers = array(
			'From: Сайт Tabula Rasa <noreply@fizbankrot46.ru>',
			'content-type: text/html',
		);

		$message_telegram = 'Сообщение с формы ' . $_REQUEST["msg"] . " c сайта " . $_SERVER['SERVER_NAME'] . "\nИмя: " . $_REQUEST["name"] . " \nТелефон: " . $_REQUEST["tel"] . "\nEmail: " . $_REQUEST["mail"] . ' ' . $page;
		message_to_telegram($message_telegram);
		add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
		//'grohotov@grand-kg.ru, asmi046@gmail.com'
		if (wp_mail('grohotov@grand-kg.ru, asmi046@gmail.com', 'Заказ с сайта', '<strong>С какой формы:</strong> ' . $_REQUEST["msg"] . '<br/> <strong>Имя:</strong> ' . $_REQUEST["name"] . ' <br/> <strong>Телефон:</strong> ' . $_REQUEST["tel"] . ' <br/> <strong>Email:</strong> ' . $_REQUEST["mail"], $headers))
			wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
		else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}


add_action('wp_ajax_q_send', 'q_send');
add_action('wp_ajax_nopriv_q_send', 'q_send');

function q_send()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {

		$headers = array(
			'From: Сайт Tabula Rasa <noreply@fizbankrot46.ru>',
			'content-type: text/html',
		);

		$message = 'Сообщение с Квиза <br/>'. 
			"<strong>Имя: </strong>". $_REQUEST["name"] . "<br/>". 
			"<strong>Телефон: </strong>". $_REQUEST["tel"] . "<br/>". 
			"<h4>Данные о задолженности:</h4><br/>". 
			"<strong>Непогашенные задолженности: </strong>". implode ($_REQUEST["dolg"]) . "<br/>". 
			"<strong>Количество кредитов: </strong>". $_REQUEST["count"] . "<br/>". 
			"<strong>Сумма кредитов: </strong>". $_REQUEST["summ"] . "<br/>". 
			"<strong>Наличие ипотеки: </strong>". $_REQUEST["ipot"] . "<br/>". 
			"<strong>Официальный доход: </strong>". $_REQUEST["dohod"] . "<br/>". 
			"<strong>Собственность: </strong>". $_REQUEST["sobst"];
		
			$message_tg = str_replace("<br/>", "\n", $message);
			$message_tg = str_replace(array("<strong>", "</strong>"), "", $message_tg);
			$message_tg = str_replace(array("<h4>", "</h4>"), "", $message_tg);
			
		message_to_telegram($message_tg);
		add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
		
		if (wp_mail('grohotov@grand-kg.ru, asmi046@gmail.com', 'Заявка с квиза', $message, $headers))
			wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
		else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");

	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}


define('TELEGRAM_TOKEN', '938251436:AAEGSIJWTeSKkrGNDf1xt_C_Y8YhTUROkwU');
define('TELEGRAM_CHATID', '86447923');
function message_to_telegram($text)
{
	$arr_chat = array('86447923', '185681960', '381762556, 57815731');
	if ($arr_chat) {

		$ch = curl_init();
		foreach ($arr_chat as $item) {
			curl_setopt_array(
				$ch,
				array(
					CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
					CURLOPT_POST => TRUE,
					CURLOPT_RETURNTRANSFER => TRUE,
					CURLOPT_TIMEOUT => 10,
					CURLOPT_POSTFIELDS => array(
						'chat_id' => $item,
						'text' => $text,
					),
				)
			);
			$output = curl_exec($ch);
		}
	}
}


function season_action()
{
	$current_date = time();
	$current_month = date('n');
	$season = explode(",", 'Зимняя,Весенняя,Летняя,Осенняя');
	if ($current_month == 12 || $current_month <= 2) {
		echo $season[0];
	} elseif ($current_month >= 3 && $current_month <= 5) {
		echo $season[1];
	} elseif ($current_month >= 6 && $current_month <= 8) {
		echo $season[2];
	} elseif ($current_month >= 9 && $current_month <= 11) {
		echo $season[3];
	}
}

function date_action()
{
	$current_date = time();
	$current_day = date('j', $current_date);
	$months = explode("|", '|января|февраля|марта|апреля|мая|июня|июля|августа|сентября|октября|ноября|декабря');
	$format = '%e&nbsp;%bg&nbsp;%Y&nbsp;г.';
	if ($current_day < 15) {
		echo $months[date('n')];
	} else {
		if (date('n') < 12) {
			echo $months[date('n') + 1];
		} else {
			echo $months[1];
		}
	}
}
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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
