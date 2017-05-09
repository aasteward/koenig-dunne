<?php
return array(
	'name' => __('Service Box', 'lawyers-attorneys') ,
	'desc' => __('Please note that the service box may not work properly in one half to full width layouts.' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('cog1'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'services',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Style', 'lawyers-attorneys') ,
			'id' => 'fullimage',
			'default' => 'false',
			'type' => 'select',
			'options' => array(
				'false' => __('Style big icon with zoom out', 'lawyers-attorneys'),
				'true' => __('Style standard with an image or an icon ', 'lawyers-attorneys'),
			),
			'field_filter' => 'fbs',
		) ,

		array(
			'name' => __('Icon', 'lawyers-attorneys') ,
			'desc' => __('This option overrides the "Image" option.', 'lawyers-attorneys'),
			'id' => 'icon',
			'default' => 'apple',
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
			'class' => 'fbs fbs-true',
		),
		array(
			'name' => __('Icon Background', 'lawyers-attorneys'),
			'id' => 'background',
			'default' => 'accent1',
			'type' => 'color',
			'class' => 'fbs fbs-false',
		),

		array(
			'name' => __('Image', 'lawyers-attorneys') ,
			'desc' => __('This option can be overridden by the "Icon" option.', 'lawyers-attorneys'),
			'id' => 'image',
			'default' => '',
			'type' => 'upload',
		) ,

		array(
			'name' => __('Title', 'lawyers-attorneys') ,
			'id' => 'title',
			'default' => 'This is a title',
			'type' => 'text',
		) ,

		array(
			'name' => __('Description', 'lawyers-attorneys') ,
			'id' => 'html-content',
			'default' => 'This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.

Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.',
			'type' => 'editor',
			'holder' => 'textarea',
		) ,

		array(
			'name' => __('Text Alignment', 'lawyers-attorneys') ,
			'id' => 'text_align',
			'default' => 'justify',
			'type' => 'select',
			'options' => array(
				'justify' => 'justify',
				'left' => 'left',
				'center' => 'center',
				'right' => 'right',
			)
		) ,
		array(
			'name' => __('Link', 'lawyers-attorneys') ,
			'id' => 'button_link',
			'default' => '/',
			'type' => 'text'
		) ,

		array(
			'name' => __('Button Text', 'lawyers-attorneys') ,
			'id' => 'button_text',
			'default' => 'learn more',
			'type' => 'text'
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
