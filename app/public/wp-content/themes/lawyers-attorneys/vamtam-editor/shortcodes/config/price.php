<?php
return array(
	'name' => __('Price Box', 'lawyers-attorneys') ,
	'icon' => array(
		'char' => WPV_Editor::get_icon('basket1'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'price',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __('Title', 'lawyers-attorneys') ,
			'id' => 'title',
			'default' => __('Title', 'lawyers-attorneys'),
			'type' => 'text',
			'holder' => 'h5',
		) ,
		array(
			'name' => __('Price', 'lawyers-attorneys') ,
			'id' => 'price',
			'default' => '69',
			'type' => 'text',
		) ,
		array(
			'name' => __('Currency', 'lawyers-attorneys') ,
			'id' => 'currency',
			'default' => '$',
			'type' => 'text',
		) ,
		array(
			'name' => __('Duration', 'lawyers-attorneys') ,
			'id' => 'duration',
			'default' => 'per month',
			'type' => 'text',
		) ,
		array(
			'name' => __('Summary', 'lawyers-attorneys') ,
			'id' => 'summary',
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Description', 'lawyers-attorneys') ,
			'id' => 'html-content',
			'default' => '<ul>
	<li>list item</li>
	<li>list item</li>
	<li>list item</li>
	<li>list item</li>
	<li>list item</li>
	<li>list item</li>
</ul>',
			'type' => 'editor',
			'holder' => 'textarea',
		) ,
		array(
			'name' => __('Button Text', 'lawyers-attorneys') ,
			'id' => 'button_text',
			'default' => 'Buy',
			'type' => 'text'
		) ,
		array(
			'name' => __('Button Link', 'lawyers-attorneys') ,
			'id' => 'button_link',
			'default' => '',
			'type' => 'text'
		) ,
		array(
			'name' => __('Featured', 'lawyers-attorneys') ,
			'id' => 'featured',
			'default' => 'false',
			'type' => 'toggle'
		) ,


		array(
			'name' => __('Title', 'lawyers-attorneys') ,
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
				'double' => __('Title with divider below', 'lawyers-attorneys'),
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
