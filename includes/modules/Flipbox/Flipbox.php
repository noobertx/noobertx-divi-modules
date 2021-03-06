<?php

class NODM_Flipbox extends ET_Builder_Module {

	public $slug       = 'nodm_flipbox';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'Robert Talavera',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Flipbox', 'nodm-noobertx-divi-modules' );
		$this->whitelisted_fields = array('frontview_background_color','module_class');
		$this->main_css_element = '%%order_class%% .flip-box';
		$this->fb_support       = true;
		$this->advanced_fields = array();	
	}
	public function get_advanced_fields_config() {
		return array(
			'margin_padding' => array(
				'css' => array(
					'main' => $this->main_css_element ." .flip-box-front,". $this->main_css_element ." .flip-box-back",
					'important' => 'all',
				),
			),
			'background' => false,
			'link_options' => false,
			'text' => false,
			'borders' => false,
			'box_shadow' => false,
			'button' => false,
			'transform' => false,
			'animation' => false,
			'filters' => false,
			'fonts' => false,
			'max_width' => false,
		);
	}
	public function get_fields() {
		return array(
			'front-content' => array(
				'label'           => esc_html__( 'Front Content', 'nodm-noobertx-divi-modules' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'nodm-noobertx-divi-modules' ),
				'toggle_slug'     => 'main_content',
			),
			'back-content' => array(
				'label'           => esc_html__( 'Back Content', 'nodm-noobertx-divi-modules' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'nodm-noobertx-divi-modules' ),
				'toggle_slug'     => 'main_content',
			),
			'flip_direction' => array(
				'label'            => esc_html__( 'Flip Direction', 'et_builder' ),
				'type'             => 'select',
				'option_category'  => 'configuration',
				'options'          => array(
					'horizontal'  => esc_html__( 'Horizontal', 'et_builder' ),
					'vertical' => esc_html__( 'Vertical', 'et_builder' ),
				),
				'tab_slug'        => 'Flipbox',
				'toggle_slug'      => 'main_content',
				'description'      => esc_html__( 'Here you can choose flip direction', 'et_builder' )
			),
			'frontview_background_color' => array(
				'label'             => esc_html__( 'Front View Background Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'option_category'        => 'basic_option',
				'description'       => esc_html__( 'Here you can define a custom color for the frontview of the flipcard.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'backview_background_color' => array(
				'label'             => esc_html__( 'Back View Background Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'option_category'        => 'basic_option',
				'description'       => esc_html__( 'Here you can define a custom color for the backview of the flipcard.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'module_class' => array(
 				'label' => esc_html__( 'CSS Class', 'et_builder' ),
 				'type' => 'text',
 				'option_category' => 'configuration',
 				'tab_slug' => 'custom_css',
 				'option_class' => 'et_pb_custom_css_regular',
 			),	
			
		);
	}
	function render( $attrs, $content = null, $render_slug ) {
		
		
		self::set_style( $render_slug, array(
			'selector'    => "%%order_class%%  .flip-box-front",
			'declaration' => sprintf(
				'background: %1$s;',
				esc_html( $this->props['frontview_background_color'])
			),
		) );
		self::set_style( $render_slug, array(
			'selector'    => "%%order_class%%  .flip-box-back",
			'declaration' => sprintf(
				'background: %1$s;',
				esc_html( $this->props['backview_background_color'])
			),
		) );

		$flip_direction = ($this->props['flip_direction']=="vertical") ? "flip-".$this->props['flip_direction'] : "";
						
		return sprintf( 
			'<div class="flip-box  %3$s">
			  <div class="flip-box-inner">
			    <div class="flip-box-front">
				  %1$s
				 
			    </div>
			    <div class="flip-box-back">
					 %2$s
			    </div>
			  </div>
			</div>', $this->props['front-content'], $this->props['back-content'],$flip_direction);
	}

}

new NODM_Flipbox;


