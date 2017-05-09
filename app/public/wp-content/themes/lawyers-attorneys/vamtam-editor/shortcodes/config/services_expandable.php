<?php

/**
 * Expandable services shortcode options
 *
 * @package wpv
 * @subpackage editor
 */

return array(
	'name' => __('Expandable Box ', 'lawyers-attorneys') ,
	'desc' => __('You have open and closed states of the box and you can set diffrenet content and background of each state.' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('expand1'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'services_expandable',
	'controls' => 'size name clone edit delete',
	'callbacks' => array(
		'init' => 'init-expandable-services',
		'generated-shortcode' => 'generate-expandable-services',
	),
	'options' => array(
		array(
			'name' => __('Closed Background', 'lawyers-attorneys') ,
			'type' => 'background',
			'id'   => 'background',
			'only' => 'color,image,repeat,size',
			'sep'  => '_',
		) ,

		array(
			'name'    => __('Expanded Background', 'lawyers-attorneys') ,
			'type'    => 'color',
			'id'      => 'hover_background',
			'default' => 'accent1',
		) ,

		array(
			'name'    => __('Closed state image', 'lawyers-attorneys') ,
			'id'      => 'image',
			'default' => '',
			'type'    => 'upload'
		) ,

		array(
			'name'    => __('Closed state icon', 'lawyers-attorneys') ,
			'desc'    => __('The icon will not be visable if you have an image in the option above.', 'lawyers-attorneys'),
			'id'      => 'icon',
			'default' => '',
			'type'    => 'icons',
		) ,
		array(
			"name"    => __("Icon Color", 'lawyers-attorneys') ,
			"id"      => "icon_color",
			"default" => 'accent6',
			"type"    => "color",
		) ,
		array(
			'name'    => __('Icon Size', 'lawyers-attorneys'),
			'id'      => 'icon_size',
			'type'    => 'range',
			'default' => 62,
			'min'     => 8,
			'max'     => 100,
		),

		array(
			'name'    => __('Title', 'lawyers-attorneys') ,
			'type'    => 'text',
			'id'      => 'title',
			'default' => '',
		) ,

		array(
			'name'    => __('Closed state text', 'lawyers-attorneys') ,
			'id'      => 'closed',
			'default' => __('Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.', 'lawyers-attorneys'),
			'type'    => 'textarea',
			'class'   => 'noattr',
		) ,

        array(
			'name'    => __('Expanded state', 'lawyers-attorneys') ,
			'id'      => 'html-content',
			'default' => '[split]',
			'type'    => 'editor',
			'holder'  => 'textarea',
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
