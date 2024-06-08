<?php
/**
 * Theme Functions.
 */

if ( ! function_exists( 'electronics_marketplace_setup' ) ) :

/* Theme Setup */
function electronics_marketplace_setup() {

	$GLOBALS['content_width'] = apply_filters( 'electronics_marketplace_content_width', 640 );
	
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', ecommerce_solution_font_url() ) );

}
endif; 
add_action( 'after_setup_theme', 'electronics_marketplace_setup' );

add_action( 'wp_enqueue_scripts', 'electronics_marketplace_enqueue_styles' );
function electronics_marketplace_enqueue_styles() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
	$parent_style = 'ecommerce-solution-basic-style'; // Style handle of parent theme.
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'electronics-marketplace-style', get_stylesheet_uri(), array( $parent_style ) );

	require get_parent_theme_file_path( '/theme-color-option.php' );
	wp_add_inline_style( 'ecommerce-solution-basic-style',$ecommerce_solution_custom_css );
	require get_theme_file_path( '/theme-color-option.php' );
	wp_add_inline_style( 'electronics-marketplace-style',$electronics_marketplace_custom_css );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/* Theme Widgets Setup */
function electronics_marketplace_widgets_init() {
	//Footer widget areas
	$ecommerce_solution_widget_areas = get_theme_mod('ecommerce_solution_footer_widget_areas', '4');
	for ($i=1; $i<=$ecommerce_solution_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Widget ', 'electronics-marketplace' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'electronics_marketplace_widgets_init' );

function electronics_marketplace_customizer_register() { 
	global $wp_customize;
	$wp_customize->remove_section( 'ecommerce_solution_example_1' );
	$wp_customize->remove_section( 'ecommerce_solution_global_color' );

	$wp_customize->remove_section( 'ecommerce_solution_important_links' );

	$wp_customize->remove_setting( 'ecommerce_solution_slider_small_title' );
	$wp_customize->remove_control( 'ecommerce_solution_slider_small_title' );

	$wp_customize->remove_setting( 'ecommerce_solution_slider_premium_info' );
	$wp_customize->remove_control( 'ecommerce_solution_slider_premium_info' );

	$wp_customize->remove_setting( 'ecommerce_solution_product_sec_premium_info' );
	$wp_customize->remove_control( 'ecommerce_solution_product_sec_premium_info' );

	$wp_customize->remove_setting( 'ecommerce_solution_slider_content_layout' );
	$wp_customize->remove_control( 'ecommerce_solution_slider_content_layout' );
} 
add_action( 'customize_register', 'electronics_marketplace_customizer_register', 11 );

add_action( 'init', 'electronics_marketplace_remove_parent_function');
function electronics_marketplace_remove_parent_function() {
	remove_action('admin_notices', 'ecommerce_solution_notice');
	remove_action( 'admin_menu', 'ecommerce_solution_gettingstarted' );
}

// Customizer Section
function electronics_marketplace_customizer ( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/custom-control.php' );

	//Important Links
	$wp_customize->add_section( 'electronics_marketplace_important_links' , array(
    	'title' => esc_html__( 'Important Links', 'electronics-marketplace' ),
    	'priority' => 10,
	) );

	$wp_customize->add_setting('electronics_marketplace_doc_link',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_marketplace_doc_link',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(ELECTRONICS_MARKETPLACE_FREE_DOC) ." '>". esc_html('Documentation','electronics-marketplace') ."</a>",
		'section'=> 'electronics_marketplace_important_links'
	));

	$wp_customize->add_setting('electronics_marketplace_demo_links',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_marketplace_demo_links',array(
		'type'=> 'hidden',
		'description' => "<a target='_blank' href='". esc_url(ELECTRONICS_MARKETPLACE_LIVE_DEMO) ." '>". esc_html('Demo','electronics-marketplace') ."</a>",
		'section'=> 'electronics_marketplace_important_links'
	));

	$wp_customize->add_setting('electronics_marketplace_forum_links',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_marketplace_forum_links',array(
		'type'=> 'hidden',
		'section'=> 'electronics_marketplace_important_links',
		'description' => "<a target='_blank' href='". esc_url(ELECTRONICS_MARKETPLACE_FREE_SUPPORT) ." '>". esc_html('Support Forum','electronics-marketplace') ."</a>",
	));

	//Global Color
	$wp_customize->add_section('electronics_marketplace_global_color', array(
		'title'    => __('Theme Color Option', 'electronics-marketplace'),
		'panel'    => 'ecommerce_solution_panel_id',
	));

	$wp_customize->add_setting('electronics_marketplace_global_color_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_marketplace_global_color_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','electronics-marketplace'),
		'description' => "<ul><li>". esc_html('Please explore our premium theme for additional settings and features.','electronics-marketplace') ."</li><li>". esc_html('And so on...','electronics-marketplace') ."</li></ul><a target='_blank' href='". esc_url(ECOMMERCE_SOLUTION_GO_PRO) ." '>". esc_html('Upgrade to Pro','electronics-marketplace') ."</a>",
		'section'=> 'electronics_marketplace_global_color'
	));

	$wp_customize->add_setting('electronics_marketplace_first_color', array(
		'default'           => '#233A95',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_marketplace_first_color', array(
		'label'    => __('First Highlight Color', 'electronics-marketplace'),
		'section'  => 'electronics_marketplace_global_color',
		'settings' => 'electronics_marketplace_first_color',
	)));

	$wp_customize->add_setting('electronics_marketplace_second_color', array(
		'default'           => '#2BBEF9',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'electronics_marketplace_second_color', array(
		'label'    => __('Second Highlight Color', 'electronics-marketplace'),
		'section'  => 'electronics_marketplace_global_color',
		'settings' => 'electronics_marketplace_second_color',
	)));

	$wp_customize->add_setting('electronics_marketplace_slider_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_marketplace_slider_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','electronics-marketplace'),
		'description' => "<ul><li>". esc_html('You can change how many slides there are.','gym-training-coach') ."</li><li>". esc_html('You can change the font family and the colours of headings and subheadings.','gym-training-coach') ."</li><li>". esc_html('And so on...','electronics-marketplace') ."</li></ul><a target='_blank' href='". esc_url(ECOMMERCE_SOLUTION_GO_PRO) ." '>". esc_html('Upgrade to Pro','electronics-marketplace') ."</a>",
		'section'=> 'ecommerce_solution_slider_section'
	));

	$wp_customize->add_setting('electronics_marketplace_product_sec_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('electronics_marketplace_product_sec_premium_info',array(
		'type'=> 'hidden',
		'label'	=> __('Premium Features','electronics-marketplace'),
		'description' => "<ul><li>". esc_html('Includes settings to set section title.','electronics-marketplace') ."</li><li>". esc_html('Contains settings for the background colour.','electronics-marketplace') ."</li><li>". esc_html('And so on...','electronics-marketplace') ."</li></ul><a target='_blank' href='". esc_url(ECOMMERCE_SOLUTION_GO_PRO) ." '>". esc_html('Upgrade to Pro','electronics-marketplace') ."</a>",
		'section'=> 'ecommerce_solution_new_collection_section'
	));

}
add_action( 'customize_register', 'electronics_marketplace_customizer' );
 
/*--------------section-pro.php part------------------------------*/
require_once( ABSPATH . WPINC . '/class-wp-customize-section.php' );

class Electronics_Marketplace_Customize_Section_Pro extends WP_Customize_Section {

	/**
	 * The type of customize section being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'electronics-marketplace';

	/**
	 * Custom button text to output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_text = '';

	/**
	 * Custom pro button URL.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_url = '';

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function json() {
		$json = parent::json();

		$json['pro_text'] = $this->pro_text;
		$json['pro_url']  = esc_url( $this->pro_url );

		return $json;
	}

	/**
	 * Outputs the Underscore.js template.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	protected function render_template() { ?>

		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
			<h3 class="accordion-section-title">
				{{ data.title }}

				<# if ( data.pro_text && data.pro_url ) { #>
					<a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}

/*---------------customizer.php part--------------------------*/
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Electronics_Marketplace_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Register custom section types.
		$manager->register_section_type( 'Electronics_Marketplace_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Electronics_Marketplace_Customize_Section_Pro(
				$manager,
				'electronics_marketplace_example',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Electronics Pro', 'electronics-marketplace' ),
					'pro_text' => esc_html__( 'Go Pro', 'electronics-marketplace' ),
					'pro_url'  => esc_url('https://www.buywptemplates.com/products/electronics-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */

	public function enqueue_control_scripts() {

		wp_enqueue_script( 'electronics-marketplace-customize-controls', get_stylesheet_directory_uri() . '/js/customize-controls-child.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'electronics-marketplace-customize-controls', get_stylesheet_directory_uri() . '/css/customize-controls-child.css' );
	}
}

// Doing this customizer thang!
Electronics_Marketplace_Customize::get_instance();

define('ELECTRONICS_MARKETPLACE_LIVE_DEMO',__('https://demos.buywptemplates.com/electronics-marketplace-pro/', 'electronics-marketplace'));
define('ELECTRONICS_MARKETPLACE_BUY_PRO',__('https://www.buywptemplates.com/products/electronics-wordpress-theme/', 'electronics-marketplace'));
define('ELECTRONICS_MARKETPLACE_PRO_DOC',__('https://demos.buywptemplates.com/demo/docs/bwt-electronics-marketplace-pro/', 'electronics-marketplace'));
define('ELECTRONICS_MARKETPLACE_FREE_DOC',__('https://demos.buywptemplates.com/demo/docs/free-electronics-marketplace/', 'electronics-marketplace'));
define('ELECTRONICS_MARKETPLACE_PRO_SUPPORT',__('https://buywptemplates.com/pages/community', 'electronics-marketplace'));
define('ELECTRONICS_MARKETPLACE_FREE_SUPPORT',__('https://wordpress.org/support/theme/electronics-marketplace/', 'electronics-marketplace'));

define('ELECTRONICS_MARKETPLACE_CREDIT',__('https://www.buywptemplates.com/products/free-marketplace-wordpress-theme/', 'electronics-marketplace'));

if ( ! function_exists( 'electronics_marketplace_credit' ) ) {
	function electronics_marketplace_credit(){
		echo "<a href=".esc_url(ELECTRONICS_MARKETPLACE_CREDIT)." target='_blank'>".esc_html__('Marketplace WordPress Theme','electronics-marketplace')."</a>";
	}
}

if ( ! defined( 'ECOMMERCE_SOLUTION_GO_PRO' ) ) {
    define( 'ECOMMERCE_SOLUTION_GO_PRO', 'https://www.buywptemplates.com/products/electronics-wordpress-theme/');
}

/** Load welcome message.*/
require get_theme_file_path() . '/inc/dashboard/get_started_info.php';