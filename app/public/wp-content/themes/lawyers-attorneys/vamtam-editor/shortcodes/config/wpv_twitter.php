<?php
return array(
	"name" => __("Twitter Timeline", 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('twitter'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	"value" => "wpv_tribe_events",
	'controls' => 'size name clone edit delete',
	"options" => array(

		array(
			'name' => __('Type', 'lawyers-attorneys') ,
			'id' => 'type',
			'default' => 'user',
			'type' => 'select',
			'options' => array(
				'user' => __('Single user', 'lawyers-attorneys'),
				'search' => __('Search results ', 'lawyers-attorneys'),
			),
		) ,

		array(
			'name' => __('Username or Search Terms', 'lawyers-attorneys') ,
			'id' => 'param',
			'default' => '',
			'type' => 'text',
		) ,

		array(
			'name' => __('Number of Tweets', 'lawyers-attorneys') ,
			'id' => 'limit',
			'default' => 5,
			'type' => 'range',
			'min' => 1,
			'max' => 20,
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
	),
);
