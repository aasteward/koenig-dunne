<?php
return array(
	'name' => __('Tabs', 'lawyers-attorneys') ,
	'desc' => __('Change to vertical or horizontal tabs from the element option panel.  Add an icon by clicking on the "pencil" icon next to the pane title. Adding tabs, changing the name of the tab and adding content into the tabs is done when the tab element is toggled.' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('storage1'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'tabs',
	'controls' => 'size name clone edit delete always-expanded',
	'callbacks' => array(
		'init' => 'init-tabs',
		'generated-shortcode' => 'generate-tabs',
	),
	'options' => array(

		array(
			'name' => __('Layout', 'lawyers-attorneys') ,
			"id" => "layout",
			"default" => 'horizontal',
			"type" => "radio",
			'options' => array(
				'horizontal' => __('Horizontal', 'lawyers-attorneys'),
				'vertical' => __('Vertical', 'lawyers-attorneys'),
			),
			'field_filter' => 'fts',
		) ,
		array(
			'name' => __('Navigation Color', 'lawyers-attorneys') ,
			'id' => 'nav_color',
			'type' => 'color',
			'default' => 'accent2',
		) ,
		array(
			'name' => __('Navigation Background', 'lawyers-attorneys') ,
			'id' => 'left_color',
			'type' => 'color',
			'default' => 'accent8',
		) ,
		array(
			'name' => __('Content Background', 'lawyers-attorneys') ,
			'id' => 'right_color',
			'type' => 'color',
			'default' => 'accent1',
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
				'single' => __('Title with divider next to it.', 'lawyers-attorneys'),
				'double' => __('Title with divider below', 'lawyers-attorneys'),
				'no-divider' => __('No Divider', 'lawyers-attorneys'),
			),
			'class' => 'fts fts-horizontal',
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
