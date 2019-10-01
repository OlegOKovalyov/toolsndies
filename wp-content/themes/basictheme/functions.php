<?php
/**
 * Basic functions and definitions
 */
if ( ! function_exists( 'basic_setup' ) ) :
	function basic_setup() {
		load_theme_textdomain( 'basic', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'basic' ),
			'menu-2' => esc_html__( 'Footer', 'basic' ),
		) );


		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

        add_theme_support( 'custom-background' );
	}
endif;
add_action( 'after_setup_theme', 'basic_setup' );

/**
 * Register widget area.
 */
function basic_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'basic' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'basic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'basic_widgets_init' );

function basic_footer1_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer-1', 'basic' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'basic' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'basic_footer1_widgets_init' );

function basic_footer2_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer-2', 'basic' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'basic' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'basic_footer2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function basic_scripts() {
	wp_enqueue_style( 'basic-style', get_stylesheet_uri() );

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
}
add_action( 'wp_enqueue_scripts', 'basic_scripts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add code in mobile Menu-1.
 */
add_filter( 'wp_nav_menu_items', 'logo_email_menu_item', 10, 2 );
function logo_email_menu_item ( $items, $args ) {
    if ($args->theme_location == 'menu-1') {
        $logo_menu_url = get_field('mobile_logo');
        $items .= '<li class="logo_mobile_menu"><a href="http://toolsndies.loc"><img src="'. $logo_menu_url . '" alt=""></a></li>';
        $mailto_mobile = get_field('mobile_email');
        $items .= '<li class="mobile_menu_email"><a href="'. 'mailto:' . $mailto_mobile . '">' . $mailto_mobile . '</a></li>';
    }
    return $items;
}

/**
 * Trim pages titles.
 */
function trim_title_chars($count, $after) {
    $title = get_the_title();
    if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
    else $after = '';
    echo $title . $after;
}