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
			'content' => array(
				'label'           => esc_html__( 'Content', 'nodm-noobertx-divi-modules' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'nodm-noobertx-divi-modules' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
      <h2>Front Side</h2>
    </div>
    <div class="flip-box-back">
      <h2>Back Side</h2>
    </div>
  </div>
</div>');
		// return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new NODM_Flipbox;
