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
			'frontview_background_color' => array(
				'label'             => esc_html__( 'Front View Background Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'css'     => array(
					'main' => "{$this->main_css_element}, {$this->main_css_element}.flip-box-front",
				),
				'option_category'        => 'basic_option',
				'description'       => esc_html__( 'Here you can define a custom color for the frontview of the flipcard.', 'et_builder' ),
			),
			'backview_background_color' => array(
				'label'             => esc_html__( 'Back View Background Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'option_category'        => 'basic_option',
				'description'       => esc_html__( 'Here you can define a custom color for the backview of the flipcard.', 'et_builder' ),
			),	
			
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		$frontview_background_color                = $this->props['frontview_background_color'];

		ET_Builder_Module::set_style( ".".$render_slug, array(
					'selector'    => '.flip-box-front',
					'declaration' => sprintf(
						'background-color: %1$s;',
						 $frontview_background_color 
					),
				) );
		return sprintf( 
			'<div class="flip-box">
			  <div class="flip-box-inner">
			    <div class="flip-box-front">
				  %1$s
				  <br>
					%3$s
			    </div>
			    <div class="flip-box-back">
			   	  %2$s
			    </div>
			  </div>
			</div>', $this->props['front-content'], $this->props['back-content'],json_encode($render_slug));
		// return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new NODM_Flipbox;
