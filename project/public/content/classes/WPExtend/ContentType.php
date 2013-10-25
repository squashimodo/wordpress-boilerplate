<?php

namespace WPPlugins\WPExtend;

class ContentType {
	public $type;
	public $options = array();
	public $labels 	= array();

	public $plural_name_field 	= 'plural_name';
	public $singular_name_field = 'singular_name';

	public function __construct($type, $options = array(), $labels = array()) {

		$this->type = $type;

		$default_options = array(
			'public'		=> true,
			'supports'	=> array('title', 'editor', 'revisions', 'thumbnail')
		);

		$required_labels = array(
			'singular_name'	=> ucwords($this->type),
			'plural_name'		=> ucwords($this->type)
		);

		$this->options 						= $options 	 		+ $default_options;

		$this->labels 						= $labels 	 		+ $required_labels;

		$this->options['labels'] 	= $this->labels + $this->default_labels();

		add_action('init', array($this, 'register'));
	}

	public function register()
	{
		register_post_type( $this->type, $this->options );
	}
	public function default_labels()
	{
		return array(
			'name'								=> __($this->labels[$this->plural_name_field]),
			'singular_name'				=> __($this->labels[$this->singular_name_field]),
			'add_new'							=> __('Add New ' . 	$this->labels[$this->singular_name_field]),
			'add_new_item'				=> __('Add New ' . 	$this->labels[$this->singular_name_field]),
			'edit_item'						=> __('Edit ' . 		$this->labels[$this->singular_name_field]),
			'all_items'						=> __('All ' . 			$this->labels[$this->plural_name_field]),
			'view_items'					=> __('View ' . 		$this->labels[$this->plural_name_field]),
			'search_items'				=> __('Search ' . 	$this->labels[$this->plural_name_field]),
			'not_found'						=> __('No ' . 			strtolower($this->labels[$this->plural_name_field]) . ' found'),
			'not_found_in_trash'	=> __('No ' . 			strtolower($this->labels[$this->plural_name_field]) . ' found in trash'),
			'parent_item_colon'		=> 'Parent' . 			$this->labels[$this->singular_name_field],
			'menu_name'						=> $this->labels[$this->plural_name_field]
		);
	}
}
