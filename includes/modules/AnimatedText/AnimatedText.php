<?php

class NODM_AnimatedText extends ET_Builder_Module {

	public $slug       = 'nodm_animated_text';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'Robert Talavera',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Animated Text', 'nodm-noobertx-divi-modules' );
		$this->main_css_element = '%%order_class%% .animated-text';
		$this->fb_support       = true;
		$this->advanced_fields = array();	
	}
	public function get_advanced_fields_config() {
		return array(
			'margin_padding' => false,
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
			'effect' => array(
				'label'            => esc_html__( 'Effect', 'et_builder' ),
				'type'             => 'select',
				'option_category'  => 'basic_option',
				'options'          => array(
					' '  => esc_html__( 'None', 'et_builder' ),
					'effect-1'  => esc_html__( 'Effect 1', 'et_builder' ),
					'effect-2'  => esc_html__( 'Effect 2', 'et_builder' ),
					'effect-3'  => esc_html__( 'Effect 3', 'et_builder' ),
					'effect-4'  => esc_html__( 'Effect 4', 'et_builder' ),
					'effect-5'  => esc_html__( 'Effect 5', 'et_builder' ),
					'effect-6'  => esc_html__( 'Effect 6', 'et_builder' ),
					'effect-7'  => esc_html__( 'Effect 7', 'et_builder' ),
					'effect-8'  => esc_html__( 'Effect 8', 'et_builder' ),
					'effect-9'  => esc_html__( 'Effect 9', 'et_builder' ),
					'effect-10'  => esc_html__( 'Effect 10', 'et_builder' ),
					'effect-11'  => esc_html__( 'Effect 11', 'et_builder' ),
					'effect-12'  => esc_html__( 'Effect 12', 'et_builder' ),
					'effect-13'  => esc_html__( 'Effect 13', 'et_builder' ),
					'effect-14'  => esc_html__( 'Effect 14', 'et_builder' ),
					'effect-15'  => esc_html__( 'Effect 15', 'et_builder' ),
					'effect-16'  => esc_html__( 'Effect 16', 'et_builder' ),
				),				
				'toggle_slug'      => 'main_content',
				'description'      => esc_html__( '', 'et_builder' )
			),
			'content' => array(
				'label'           => esc_html__( 'Content', 'nodm-noobertx-divi-modules' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'nodm-noobertx-divi-modules' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}
	function enqueue_shortcode_scripts(){
		wp_enqueue_script( 'mpc_animated_text-js',  NODM_URI  . 'includes/modules/AnimatedText/animated-text.js', array( 'jquery' ), '1');
	}
	function render( $attrs, $content = null, $render_slug ) {
		$this->enqueue_shortcode_scripts();
		$effect = $this->props['effect'];
		$content = $this->props['content'];

		$new_content = '<h1 class="ml1 text-center"><span class="text-wrapper"><span class="line line1"></span><span class="letters">THURSDAY</span><span class="line line2"></span></span></h1>';
		return sprintf( 
			'<div class="nodm-animated-text %2$s">
				%1$s
			</div>',$content,$effect);
	}

}

new NODM_AnimatedText;


