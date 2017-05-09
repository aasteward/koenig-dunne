<?php
return array(
	"name" => __("Accordion", 'lawyers-attorneys'),
	'desc' => __('Adding panes, changing the name of the pane and adding content into the panes is done when the accordion element is toggled.' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('menu1'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	"value" => "accordion",
	'controls' => 'size name clone edit delete always-expanded',
	'callbacks' => array(
		'init' => 'init-accordion',
		'generated-shortcode' => 'generate-accordion',
	),
	"options" => array(

		array(
			'name' => __('Allow All Panes to be Closed', 'lawyers-attorneys') ,
			'desc' => __('If enabled, the accordion will load with collapsed panes. Clicking on the title of the currently active pane will close it. Clicking on the title of an inactive pane will change the active pane.', 'lawyers-attorneys'),
			'id' => 'collapsible',
			'default' => true,
			'type' => 'toggle'
		) ,

		array(
			'name' => __('Pane Background', 'lawyers-attorneys') ,
			'id' => 'closed_bg',
			'default' => 'accent1',
			'type' => 'color'
		) ,

		array(
			'name' => __('Title Color', 'lawyers-attorneys') ,
			'id' => 'title_color',
			'default' => 'accent8',
			'type' => 'color'
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
