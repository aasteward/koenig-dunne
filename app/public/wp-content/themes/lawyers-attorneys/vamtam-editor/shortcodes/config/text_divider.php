<?php
return array(
	'name' => __('Text Divider', 'lawyers-attorneys') ,
	'icon' => array(
		'char' => WPV_Editor::get_icon('minus'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'text_divider',
	'controls' => 'name clone edit delete',
	'options' => array(
		array(
			'name' => __('Type', 'lawyers-attorneys') ,
			'id' => 'type',
			'default' => 'single',
			'options' => array(
				'single' => __('Title in the middle', 'lawyers-attorneys') ,
				'double' => __('Title above divider', 'lawyers-attorneys') ,
			) ,
			'type' => 'select',
			'class' => 'add-to-container',
			'field_filter' => 'ftds',
		) ,
		array(
			'name' => __('Text', 'lawyers-attorneys') ,
			'id' => 'html-content',
			'default' => __('Text Divider', 'lawyers-attorneys'),
			'type' => 'editor',
			'class' => 'ftds ftds-single ftds-double',
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
