<?php

class wpv_contactinfo extends WP_Widget {
	private $fields = array();

	function __construct() {
		$widget_ops = array(
			'classname' => 'wpv_contactinfo',
			'description' => __('Display contact information.', 'lawyers-attorneys')
		);
		parent::__construct('wpv_contactinfo', __('Vamtam - Contact Info', 'lawyers-attorneys') , $widget_ops);

		$this->fields = array(
			'title' => array('description' => __('Title:', 'lawyers-attorneys')),
			'name' => array('description' => __('Name:', 'lawyers-attorneys')),
			// 'text' => array('description' => __('Introduction text:', 'lawyers-attorneys')),
			'phone' => array('description' => __('Phone:', 'lawyers-attorneys')),
			'cellphone' => array('description' => __('Cell phone:', 'lawyers-attorneys')),
			'mail' => array('description' => __('Email:', 'lawyers-attorneys')),
			'address' => array('description' => __('Address:', 'lawyers-attorneys')),
		);
	}

	public function widget($args, $instance) {
		extract($args);
		foreach($this->fields as $name=>&$field)
			$field['value'] = isset($instance[$name]) ? $instance[$name] : '';
		unset($field);

		$title = apply_filters('widget_title', $instance['title'], $instance, $this->id_base);
		$color = $instance['color'];

		include(locate_template('templates/widgets/front/contactinfo.php'));
	}

	public function update($new_instance, $old_instance) {
		$instance = $old_instance;
		foreach($this->fields as $name=>$field)
			$instance[$name] = strip_tags($new_instance[$name]);

		$instance['color'] = $new_instance['color'];

		return $instance;
	}

	public function form($instance) {
		foreach($this->fields as $name=>&$field)
			$field['value'] = isset($instance[$name]) ? esc_attr($instance[$name]) : '';
		unset($field);

		$color = $instance['color'];

		include(locate_template('templates/widgets/conf/contactinfo.php'));
	}
}
register_widget('wpv_contactinfo');
