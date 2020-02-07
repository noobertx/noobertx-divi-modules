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
	function enqueue_shortcode_scripts(){
		wp_enqueue_script( 'mpc_animated_text-js',  NODM_URI  . '/includes/modules/AnimatedText/animated-text.js', array( 'jquery' ), '1');
	}
	function render( $attrs, $content = null, $render_slug ) {
		$this->enqueue_shortcode_scripts();
		$content = '
<div id="mpc_animated_text-965e3b4b96c8a1a" class="mpc-animated-text-wrap mpc-typography--default mpc-transition mpc-style--rotator mpc-loaded mpc-inited" data-options="{\'style\':\'rotator\',\'duration\':\'550\',\'delay\':\'1200\',\'loop\':true,\'dynamic\':false}" style="opacity: 1;"><div class="mpc-animated-text__side mpc-animated-text__before mpc-typography--default">This is a default animated text:</div><div class="mpc-animated-text" style="height: 37px;"><div class="mpc-animated-text__block" style=""><span class="mpc-animated-text__word">Second line.</span></div><div class="mpc-animated-text__block" style=""><span class="mpc-animated-text__word">Third line.</span></div><div class="mpc-animated-text__block" style=""><span class="mpc-animated-text__word">First line.</span></div></div></div>
';
		$new_content = '<h1 class="ml1">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters">THURSDAY</span>
    <span class="line line2"></span>
  </span>
</h1>';
		return sprintf( 
			'<div class="nodm-animated-text">
				%1$s
			</div>',$new_content);
	}

}

new NODM_AnimatedText;


