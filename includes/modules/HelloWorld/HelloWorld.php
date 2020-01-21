<?php

class NODM_HelloWorld extends ET_Builder_Module {

	public $slug       = 'nodm_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'Robert Talavera',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'nodm-noobertx-divi-modules' );
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
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new NODM_HelloWorld;
