<?php

if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}

/**

 * Elementor Scrolltext Widget.

 *

 * Elementor widget that inserts an embbedable content into the page, from any given URL.

 *

 * @since 1.0.0

 */

class Scrolltext_Widget extends \Elementor\Widget_Base {



	/**

	 * Get widget name.

	 *

	 * Retrieve Scrolltext widget name.

	 *

	 * @since 1.0.0

	 * @access public

	 * @return string Widget name.

	 */

	public function get_name() {

		return 'Scrolltext';

	}



	/**

	 * Get widget title.

	 *

	 * Retrieve Scrolltext widget title.

	 *

	 * @since 1.0.0

	 * @access public

	 * @return string Widget title.

	 */

	public function get_title() {

		return esc_html__( 'Scroll Text', 'core-widget' );

	}



	/**

	 * Get widget icon.

	 *

	 * Retrieve Scrolltext widget icon.

	 *

	 * @since 1.0.0

	 * @access public

	 * @return string Widget icon.

	 */

	public function get_icon() {

		return 'eicon-archive-posts';

	}
	/**

	 * Get custom help URL.

	 *

	 * Retrieve a URL where the user can get more information about the widget.

	 *

	 * @since 1.0.0

	 * @access public

	 * @return string Widget help URL.

	 */

	public function get_custom_help_url() {

		return 'https://developers.elementor.com/docs/widgets/';

	}


	/**

	 * Get widget categories.

	 *

	 * Retrieve the Scrolltext of categories the Scrolltext widget belongs to.

	 *

	 * @since 1.0.0

	 * @access public

	 * @return array Widget categories.

	 */

	public function get_categories() {

		return [ 'astudio-category' ];

	}



	/**

	 * Get widget keywords.

	 *

	 * Retrieve the Scrolltext of keywords the Scrolltext widget belongs to.

	 *

	 * @since 1.0.0

	 * @access public

	 * @return array Widget keywords.

	 */

	public function get_keywords() {

		return [ 'Scrolltext', 'scrolltext' ];

	}

	/**

	 * Register Scrolltext widget controls.

	 *

	 * Add input fields to allow the user to customize the widget settings.

	 *

	 * @since 1.0.0

	 * @access protected

	 */

	protected function register_controls() {



		$this->start_controls_section(

			'content_section',

			[

				'label' => esc_html__( 'Scrolltext Content', 'core-widget' ),

				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

			]

		);
			$this->add_control(

				'firstText',

				[

					'label' => esc_html__( 'First Title', 'core-widget' ),

					'type' => \Elementor\Controls_Manager::TEXT,

					'placeholder' => esc_html__( 'Enter your First Title', 'core-widget' ),

					'dynamic' => [

						'active' => true,

					],

					'default' => 'Scrolltext',

				]

			);
			$this->add_control(

				'secondText',

				[

					'label' => esc_html__( 'Second Title', 'core-widget' ),

					'type' => \Elementor\Controls_Manager::TEXT,

					'placeholder' => esc_html__( 'Enter your Second Title', 'core-widget' ),

					'dynamic' => [

						'active' => true,

					],

					'default' => 'Scroll Text Second Text',

				]

			);
		$this->end_controls_section();


	}



	/**

	 * Render Scrolltext widget output on the frontend.

	 *

	 * Written in PHP and used to generate the final HTML.

	 *

	 * @since 1.0.0

	 * @access protected

	 */



	 

	protected function render() {

		$settings = $this->get_settings_for_display(); 

		$firstText=$settings['firstText'];
		$secondText=$settings['secondText'];
		?>

				<div class="containerslide" speed=70>
					<div class='scrolling-text'>
						<h2 class="scrolling-text-content"><?php echo $firstText ;?></h2>
					</div>
				</div>
				<div class="containerslide left-to-right" speed=100>
					<div class='scrolling-text'>
						<h2 class="scrolling-text-content"><?php echo $secondText ;?></h2>
					</div>
				</div>



	<?php		
	}


	/**

	 * Render Scrolltext widget output in the editor.

	 *

	 * Written as a Backbone JavaScript template and used to generate the live preview.

	 *

	 * @since 1.0.0

	 * @access protected

	 */

	protected function content_template() {



	}



}









?>