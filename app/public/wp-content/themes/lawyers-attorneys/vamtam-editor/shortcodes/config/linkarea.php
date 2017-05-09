<?php
return array(
	'name' => __('Box with a Link', 'lawyers-attorneys') ,
	'desc' => __('You can set a link, background color and hover color to a section of the website and place your content there.' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('link5'),
		'size' => '30px',
		'lheight' => '40px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'linkarea',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Background Color', 'lawyers-attorneys') ,
			'id' => 'background_color',
			'default' => '',
			'prompt' => __('No background', 'lawyers-attorneys'),
			'options' => array(
				'accent1' => __('Accent 1', 'lawyers-attorneys'),
				'accent2' => __('Accent 2', 'lawyers-attorneys'),
				'accent3' => __('Accent 3', 'lawyers-attorneys'),
				'accent4' => __('Accent 4', 'lawyers-attorneys'),
				'accent5' => __('Accent 5', 'lawyers-attorneys'),
				'accent6' => __('Accent 6', 'lawyers-attorneys'),
				'accent7' => __('Accent 7', 'lawyers-attorneys'),
				'accent8' => __('Accent 8', 'lawyers-attorneys'),
			),
			'type' => 'select'
		) ,
		array(
			'name' => __('Hover Color', 'lawyers-attorneys') ,
			'id' => 'hover_color',
			'default' => 'accent1',
			'prompt' => __('No background', 'lawyers-attorneys'),
			'options' => array(
				'accent1' => __('Accent 1', 'lawyers-attorneys'),
				'accent2' => __('Accent 2', 'lawyers-attorneys'),
				'accent3' => __('Accent 3', 'lawyers-attorneys'),
				'accent4' => __('Accent 4', 'lawyers-attorneys'),
				'accent5' => __('Accent 5', 'lawyers-attorneys'),
				'accent6' => __('Accent 6', 'lawyers-attorneys'),
				'accent7' => __('Accent 7', 'lawyers-attorneys'),
				'accent8' => __('Accent 8', 'lawyers-attorneys'),
			),
			'type' => 'select'
		) ,

		array(
			'name' => __('Link', 'lawyers-attorneys') ,
			'id' => 'href',
			'default' => '',
			'type' => 'text',
		) ,

		array(
			"name" => __("Target", 'lawyers-attorneys') ,
			"id" => "target",
			"default" => '_self',
			"options" => array(
				"_blank" => __('Load in a new window', 'lawyers-attorneys') ,
				"_self" => __('Load in the same frame as it was clicked', 'lawyers-attorneys') ,
			) ,
			"type" => "select",
		) ,

		array(
			'name' => __('Contents', 'lawyers-attorneys') ,
			'id' => 'html-content',
			'default' => __('This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.', 'lawyers-attorneys'),
			'type' => 'editor',
			'holder' => 'textarea',
		) ,

		array(
			'name' => __('Icon', 'lawyers-attorneys') ,
			'desc' => __('This option overrides the "Image" option.', 'lawyers-attorneys'),
			'id' => 'icon',
			'default' => '',
			'type' => 'icons',
		) ,
		array(
			"name" => __("Icon Color", 'lawyers-attorneys') ,
			"id" => "icon_color",
			"default" => 'accent6',
			"prompt" => '',
			"options" => array(
				'accent1' => __('Accent 1', 'lawyers-attorneys'),
				'accent2' => __('Accent 2', 'lawyers-attorneys'),
				'accent3' => __('Accent 3', 'lawyers-attorneys'),
				'accent4' => __('Accent 4', 'lawyers-attorneys'),
				'accent5' => __('Accent 5', 'lawyers-attorneys'),
				'accent6' => __('Accent 6', 'lawyers-attorneys'),
				'accent7' => __('Accent 7', 'lawyers-attorneys'),
				'accent8' => __('Accent 8', 'lawyers-attorneys'),
			) ,
			"type" => "select",
		) ,
		array(
			'name' => __('Icon Size', 'lawyers-attorneys'),
			'id' => 'icon_size',
			'type' => 'range',
			'default' => 62,
			'min' => 8,
			'max' => 100,
		),

		array(
			'name' => __('Image', 'lawyers-attorneys') ,
			'desc' => __('The image will appear above the content.<br/><br/>', 'lawyers-attorneys'),
			'id' => 'image',
			'default' => '',
			'type' => 'upload',
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
