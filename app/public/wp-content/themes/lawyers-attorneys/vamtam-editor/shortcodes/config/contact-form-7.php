<?php
return array(
	'name' => __('Contact Form 7', 'lawyers-attorneys') ,
	'desc' => __('Please note that the theme uses the Contact Form 7 plugin for building forms and its option panel is found in the WordPress navigation menu on the left. ' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('pencil1'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'contact-form-7',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Choose By ID', 'lawyers-attorneys') ,
			'id' => 'id',
			'default' => '',
			'prompt' => '',
			'options' => WPV_Editor::get_wpcf7_posts('ID'),
			'type' => 'select',
		) ,

		array(
			'name' => __('Choose By Title', 'lawyers-attorneys') ,
			'id' => 'title',
			'default' => '',
			'prompt' => '',
			'options' => WPV_Editor::get_wpcf7_posts('post_title'),
			'type' => 'select',
		) ,

		array(
			'name' => __('Title (optional)', 'lawyers-attorneys') ,
			'desc' => __('The title is placed just above the element.', 'lawyers-attorneys'),
			'id' => 'column_title',
			'default' => '',
			'type' => 'text'
		) ,
		array(
			'name' => __('Title Type (optional)', 'lawyers-attorneys') ,
			'id' => 'column_title_type',
			'default' => 'single',
			'type' => 'select',
			'options' => array(
				'single' => __('Title with divider next to it', 'lawyers-attorneys'),
				'double' => __('Title with divider under it ', 'lawyers-attorneys'),
				'no-divider' => __('No Divider', 'lawyers-attorneys'),
			),
		) ,
		array(
			'name'    => __('Element Animation (optional)', 'lawyers-attorneys') ,
			'id'      => 'column_animation',
			'default' => 'none',
			'type'    => 'select',
			'options' => array(
				'none'        => __('No animation', 'lawyers-attorneys'),
				'from-left'   => __('Appear from left', 'lawyers-attorneys'),
				'from-right'  => __('Appear from right', 'lawyers-attorneys'),
				'from-top'    => __('Appear from top', 'lawyers-attorneys'),
				'from-bottom' => __('Appear from bottom', 'lawyers-attorneys'),
				'fade-in'     => __('Fade in', 'lawyers-attorneys'),
				'zoom-in'     => __('Zoom in', 'lawyers-attorneys'),
			),
		) ,
	) ,
);
