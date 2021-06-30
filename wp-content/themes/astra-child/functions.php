<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-vc-builder','astra-theme-css','astra-contact-form-7' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

/**
 * Register widget area.
 */
if ( ! function_exists( 'astra_widgets_init' ) ) :

	/**
	 * Register widget area.
	 *
	 * @see https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	 */
	function astra_widgets_init() {
        /**
		 * Register Main Sidebar
		 */
		register_sidebar(
			apply_filters(
				'astra_widgets_init',
				array(
					'name'          => esc_html__( 'Main Sidebar', 'astra' ),
					'id'            => 'sidebar-1',
					'description'   => '',
					'before_widget' => '<aside id="%1$s" class="widget %2$s">',
					'after_widget'  => '</aside>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

		/**
		 * Register Header Widgets area
		 */
		register_sidebar(
			apply_filters(
				'astra_header_widgets_init',
				array(
					'name'          => esc_html__( 'Header', 'astra' ),
					'id'            => 'header-widget',
					'description'   => '',
					'before_widget' => '<aside id="%1$s" class="widget %2$s">',
					'after_widget'  => '</aside>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

		/**
		 * Register Footer Bar Widgets area
		 */
		register_sidebar(
			apply_filters(
				'astra_footer_1_widgets_init',
				array(
					'name'          => esc_html__( 'Footer Bar Section 1', 'astra' ),
					'id'            => 'footer-widget-1',
					'description'   => '',
					'before_widget' => '<aside id="%1$s" class="widget %2$s">',
					'after_widget'  => '</aside>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

		register_sidebar(
			apply_filters(
				'astra_footer_2_widgets_init',
				array(
					'name'          => esc_html__( 'Footer Bar Section 2', 'astra' ),
					'id'            => 'footer-widget-2',
					'description'   => '',
					'before_widget' => '<aside id="%1$s" class="widget %2$s">',
					'after_widget'  => '</aside>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

		/**
		 * Register Footer Widgets area
		 */
		register_sidebar(
			apply_filters(
				'astra_advanced_footer_widget_1_args',
				array(
					'name'          => esc_html__( 'Footer Widget Area 1', 'astra' ),
					'id'            => 'advanced-footer-widget-1',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

		register_sidebar(
			apply_filters(
				'astra_advanced_footer_widget_2_args',
				array(
					'name'          => esc_html__( 'Footer Widget Area 2', 'astra' ),
					'id'            => 'advanced-footer-widget-2',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

		register_sidebar(
			apply_filters(
				'astra_advanced_footer_widget_3_args',
				array(
					'name'          => esc_html__( 'Footer Widget Area 3', 'astra' ),
					'id'            => 'advanced-footer-widget-3',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

		register_sidebar(
			apply_filters(
				'astra_advanced_footer_widget_4_args',
				array(
					'name'          => esc_html__( 'Footer Widget Area 4', 'astra' ),
					'id'            => 'advanced-footer-widget-4',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);
        /**
		 * Register Breadcrumb Sidebar
		 */
        register_sidebar(
			apply_filters(
				'astra_advanced_breadcrumb',
				array(
					'name'          => esc_html__( 'Breadcrumb Area', 'astra' ),
					'id'            => 'advanced-breadcrumb-widget',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

        register_sidebar(
			apply_filters(
				'astra_advanced_courses_sto_dgo',
				array(
					'name'          => esc_html__( 'Courses Santo Domingo Area', 'astra' ),
					'id'            => 'advanced-courses_sto_dgo-widget',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

        register_sidebar(
			apply_filters(
				'astra_advanced_diplomant_sto_dgo',
				array(
					'name'          => esc_html__( 'Diplomant Santo Domingo Area', 'astra' ),
					'id'            => 'advanced-diplomant_sto_dgo-widget',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

        register_sidebar(
			apply_filters(
				'astra_advanced_courses_stgo',
				array(
					'name'          => esc_html__( 'Courses Santiago Area', 'astra' ),
					'id'            => 'advanced-courses_stgo-widget',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

        register_sidebar(
			apply_filters(
				'astra_advanced_diplomant_stgo',
				array(
					'name'          => esc_html__( 'Diplomant Santiago Area', 'astra' ),
					'id'            => 'advanced-diplomant_stgo-widget',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

        register_sidebar(
			apply_filters(
				'astra_advanced_courses_san_juan',
				array(
					'name'          => esc_html__( 'Courses San Juan Area', 'astra' ),
					'id'            => 'advanced-courses_san_juan-widget',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);

        register_sidebar(
			apply_filters(
				'astra_advanced_diplomant_san_juan',
				array(
					'name'          => esc_html__( 'Diplomant San Juan Area', 'astra' ),
					'id'            => 'advanced-diplomant_san_juan-widget',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				)
			)
		);
    }
    add_action( 'widgets_init', 'astra_widgets_init' );

endif;
