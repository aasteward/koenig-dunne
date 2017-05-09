<?php
return array(
	'name' => __('Progress Indicator', 'lawyers-attorneys') ,
	'desc' => __('You can choose from % indicator or animated number.' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('meter-medium'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'wpv_progress',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Type', 'lawyers-attorneys'),
			'id' => 'type',
			'type' => 'select',
			'default' => 'percentage',
			'options' => array(
				'percentage' => __('Percentage', 'lawyers-attorneys'),
				'number' => __('Number', 'lawyers-attorneys'),
			),
			'field_filter' => 'fpis',
		),

		array(
			'name' => __('Percentage', 'lawyers-attorneys') ,
			'id' => 'percentage',
			'default' => 0,
			'type' => 'range',
			'min' => 0,
			'max' => 100,
			'unit' => '%',
			'class' => 'fpis fpis-percentage',
		) ,

		array(
			'name' => __('Value', 'lawyers-attorneys') ,
			'id' => 'value',
			'default' => 0,
			'type' => 'range',
			'min' => 0,
			'max' => 10000,
			'class' => 'fpis fpis-number',
		) ,

		array(
			'name' => __('Before Value', 'lawyers-attorneys') ,
			'id' => 'before_value',
			'default' => '',
			'type' => 'text',
			'class' => 'fpis fpis-number',
		) ,

		array(
			'name' => __('After Value', 'lawyers-attorneys') ,
			'id' => 'after_value',
			'default' => '',
			'type' => 'text',
			'class' => 'fpis fpis-number',
		) ,

		array(
			'name' => __('Track Color', 'lawyers-attorneys') ,
			'id' => 'bar_color',
			'default' => 'accent1',
			'type' => 'color',
			'class' => 'fpis fpis-percentage',
		) ,

		array(
			'name' => __('Bar Color', 'lawyers-attorneys') ,
			'id' => 'track_color',
			'default' => 'accent7',
			'type' => 'color',
			'class' => 'fpis fpis-percentage',
		) ,

		array(
			'name' => __('Value Color', 'lawyers-attorneys') ,
			'id' => 'value_color',
			'default' => 'accent2',
			'type' => 'color',
		) ,

	) ,
);
