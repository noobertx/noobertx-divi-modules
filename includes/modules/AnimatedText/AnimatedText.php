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
			
		);
	}
	function render( $attrs, $content = null, $render_slug ) {
		
		$content = '<h1 class="ml1">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">THURSDAY</span>
    <span class="line line2"></span>
  </span>
</h1>
';
		return sprintf( 
			'<div class="nodm-animated-text">
				%1$s
			</div>',$content);
	}

}

new NODM_AnimatedText;


