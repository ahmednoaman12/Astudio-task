<?php

if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}

/**

 * Elementor herosection Widget.

 *

 * Elementor widget that inserts an embbedable content into the page, from any given URL.

 *

 * @since 1.0.0

 */

class Herosection_Widget extends \Elementor\Widget_Base {



	/**

	 * Get widget name.

	 *

	 * Retrieve herosection widget name.

	 *

	 * @since 1.0.0

	 * @access public

	 * @return string Widget name.

	 */

	public function get_name() {

		return 'herosection';

	}



	/**

	 * Get widget title.

	 *

	 * Retrieve herosection widget title.

	 *

	 * @since 1.0.0

	 * @access public

	 * @return string Widget title.

	 */

	public function get_title() {

		return esc_html__( 'Hero Section About Us', 'core-widget' );

	}



	/**

	 * Get widget icon.

	 *

	 * Retrieve herosection widget icon.

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

	 * Retrieve the herosection of categories the herosection widget belongs to.

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

	 * Retrieve the herosection of keywords the herosection widget belongs to.

	 *

	 * @since 1.0.0

	 * @access public

	 * @return array Widget keywords.

	 */

	public function get_keywords() {

		return [ 'herosection', 'hero section' ];

	}

	/**

	 * Register herosection widget controls.

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

				'label' => esc_html__( 'herosection Content', 'core-widget' ),

				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

			]

		);
		$this->add_control(

			'left_image',

			[

				'label' => esc_html__( 'Choose Left Image ', 'textdomain' ),

				'type' => \Elementor\Controls_Manager::MEDIA,

				'default' => [

					'url' => \Elementor\Utils::get_placeholder_image_src(),

				],

			]

	);
		$this->add_control(

			'right_image',

			[

				'label' => esc_html__( 'Choose Right Image ', 'textdomain' ),

				'type' => \Elementor\Controls_Manager::MEDIA,

				'default' => [

					'url' => \Elementor\Utils::get_placeholder_image_src(),

				],

			]

	);

		$this->end_controls_section();


	}



	/**

	 * Render herosection widget output on the frontend.

	 *

	 * Written in PHP and used to generate the final HTML.

	 *

	 * @since 1.0.0

	 * @access protected

	 */



	 

	protected function render() {

		$settings = $this->get_settings_for_display(); 

		$left_image=$settings['left_image']['url'];
		$right_image=$settings['right_image']['url'];
		?>

				<div class="containere herosection-widget">
					<div class="row m-0 p-0 d-flex">
						<div class="inherit">

							<img src="<?php echo $left_image;  ?>" class="first-img img-fluid">
						</div>
						<div id="skew" class="sec-img">
							<img  src="<?php echo $right_image;  ?>" class=" img-fluid">
						</div>
					</div>
				</div>



	<?php		
	}


	/**

	 * Render herosection widget output in the editor.

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