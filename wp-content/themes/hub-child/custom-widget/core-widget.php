<?php

/**

 * Plugin Name: Elementor List Widget

 * Description: List widget for Elementor.

 * Plugin URI:  https://elementor.com/

 * Version:     1.0.0

 * Author:      Elementor Developer

 * Author URI:  https://developers.elementor.com/

 * Text Domain: core-widget

 *

 * Elementor tested up to: 3.7.0

 * Elementor Pro tested up to: 3.7.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}




/**

 * Register scrolltext Widget.

 *

 * Include widget file and register widget class.

 *

 * @since 1.0.0

 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.

 * @return void

 */

function register_scrolltext_widget( $widgets_manager ) {



	require_once( __DIR__ . '/widgets/scrolltext-widget.php' );



	$widgets_manager->register( new \Scrolltext_Widget() );



}

add_action( 'elementor/widgets/register', 'register_scrolltext_widget' );

/**

 * Register herosection Widget.

 *

 * Include widget file and register widget class.

 *

 * @since 1.0.0

 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.

 * @return void

 */

function register_herosection_widget( $widgets_manager ) {



	require_once( __DIR__ . '/widgets/herosection-widget.php' );



	$widgets_manager->register( new \Herosection_Widget() );



}

add_action( 'elementor/widgets/register', 'register_herosection_widget' );


/**

 * Register herosection Widget.

 *

 * Include widget file and register widget class.

 *

 * @since 1.0.0

 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.

 * @return void

 */

function register_slider_widget( $widgets_manager ) {



	require_once( __DIR__ . '/widgets/slider-widget.php' );



	$widgets_manager->register( new \Slider_Widget() );



}

add_action( 'elementor/widgets/register', 'register_slider_widget' );







#-----------------------------------------------------------------#

# Add widget category

#-----------------------------------------------------------------#

function add_elementor_widget_categories( $elements_manager ) {



	$elements_manager->add_category(

		'astudio-category',

		[

			'title' => esc_html__( 'AStudio Category', 'core-widget' ),

			'icon' => 'fa fa-plug',

		]

	);



}

add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );