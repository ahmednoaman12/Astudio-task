<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor List Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Slider_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve list widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'list';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve list widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'List new', 'core-widget' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve list widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-bullet-list';
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
	 * Retrieve the list of categories the list widget belongs to.
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
	 * Retrieve the list of keywords the list widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'slider', 'sliders', 'carsoul' ];
	}

	/**
	 * Register list widget controls.
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
				'label' => esc_html__( 'List Content', 'core-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		/* Start repeater */

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'core-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter your title', 'core-widget' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'core-widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],

			]
		);


		$repeater->add_control(
			'item_description',
			[
				'label' => esc_html__( 'Description', 'core-widget' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default description', 'core-widget' ),
				'placeholder' => esc_html__( 'Type your description here', 'core-widget' ),
				'dynamic' => [
					'active' => true,
				],
				'selectors' => [
					'{{WRAPPER}} .item_description' => 'color: {{VALUE}};',
				],
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_SECONDARY,
				],
			]
		);

		$repeater->add_control(
			'title2',
			[
				'label' => esc_html__( 'Title 2', 'core-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Enter your title 2', 'core-widget' ),
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$repeater->add_control(
			'image2',
			[
				'label' => esc_html__( 'Choose Image 2', 'core-widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'dynamic' => [
					'active' => true,
				],
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],

			]
		);


		$repeater->add_control(
			'item_description2',
			[
				'label' => esc_html__( 'Description 2', 'core-widget' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default description', 'core-widget' ),
				'placeholder' => esc_html__( 'Type your description here', 'core-widget' ),
				'dynamic' => [
					'active' => true,
				],
				'selectors' => [
					'{{WRAPPER}} .item_description' => 'color: {{VALUE}};',
				],
				'global' => [
					'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_SECONDARY,
				],
			]
		);


		// $repeater->add_control(
		// 	'title',
		// 	[
		// 		'label' => esc_html__( 'Title', 'core-widget' ),
		// 		'type' => \Elementor\Controls_Manager::TEXT,
		// 		'placeholder' => esc_html__( 'Title Item', 'core-widget' ),
		// 		'default' => esc_html__( 'Title Item', 'core-widget' ),
		// 		'label_block' => true,
		// 		'dynamic' => [
		// 			'active' => true,
		// 		],
		// 	]
		// );


		/* End repeater */

		$this->add_control(
			'list_items',
			[
				'label' => esc_html__( 'List Items', 'core-widget' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),           /* Use our repeater */
				'default' => [
					[
						'text' => esc_html__( 'List Item #1', 'core-widget' ),
						'link' => '',
					],
					[
						'text' => esc_html__( 'List Item #2', 'core-widget' ),
						'link' => '',
					],
					[
						'text' => esc_html__( 'List Item #3', 'core-widget' ),
						'link' => '',
					],
				],
				'title_field' => '{{{ title }}}',
			]
		);

		$this->end_controls_section();






	}

	/**
	 * Render list widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */

	 
	protected function render() {
		$settings = $this->get_settings_for_display();
	?>


    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

			<?php
					// $selected = 'selected ';
			foreach ( $settings['list_items'] as $index => $item ) {
			$title =$settings['list_items'][$index]['title'] ;
			$image = $settings['list_items'][$index]['image']['url'];
			$item_description =$settings['list_items'][$index]['item_description'] ;
			$title2 =$settings['list_items'][$index]['title2'] ;
			$image2 = $settings['list_items'][$index]['image2']['url'];
			$item_description2 =$settings['list_items'][$index]['item_description2'] ;
			$repeater_setting_key = $this->get_repeater_setting_key( 'text', 'list_items', $index );
			$this->add_inline_editing_attributes( $repeater_setting_key );
			?>


            <div class="swiper-slide">
                <div class="h-1000">
					<div class="container-fluid">

					
                    <div class="row mb-5">
                        <div class="col-6 text-left">
							<div class="text-left p-5">
									<?php  echo $item_description; ?>
                            <p class="author">
								<?php echo $title ; ?>
                            </p>
							</div>
                        </div>
                        <div class="col-6">
							<div class="pl-5">

								<img src="<?php echo $image ; ?>" alt="">
							</div>
                        </div>
                    </div>
					</div>
                    <div class="row mb-5">
                        <div class="col-6 pr-5">
							<div class="pr-5">

								<img src="<?php echo $image2 ; ?>" alt="">
							</div>
                        </div>
						<div class="col-6 text-left">
							<div class="text-left p-5">
							<?php  echo $item_description2 ; ?>
                            <p class="author">
							<?php echo $title2 ; ?>
                            </p>
							</div>
                        </div>
                        
                    </div>
                </div>
            </div>

			<?php
				
			}
			?>
          

			




        </div>

		<div class="swiper-pagi">

			<div class="swiper-button-next0">&rarr;</div>
			<div class="swiper-button-prev0">&larr;</div>
			<div class="swiper-pagination"></div>
		</div>


    </div>


<?php
	}

	/**
	 * Render list widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function content_template() {
		?>

	<?php
	}

}




?>