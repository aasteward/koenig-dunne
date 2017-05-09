<?php
return array(
	'name'    => __('Buttons', 'lawyers-attorneys') ,
	'value'   => 'button',
	'options' => array(
		array(
			'name'    => __('Text', 'lawyers-attorneys') ,
			'id'      => 'text',
			'default' => '',
			'type'    => 'text',
		) ,
		array(
			'name'    => __('Style', 'lawyers-attorneys') ,
			'id'      => 'style',
			'default' => 'filled-small',
			'type'    => 'select',
			'options' => array(
				'filled'         => __('Filled', 'lawyers-attorneys'),
				'filled-small'   => __('Filled, small', 'lawyers-attorneys'),
				'border'         => __('Border', 'lawyers-attorneys'),
				'border-3px' => __('Border Slanted', 'lawyers-attorneys'),
			),
		) ,
		array(
			'name'    => __('Font size', 'lawyers-attorneys') ,
			'id'      => 'font',
			'default' => 24,
			'type'    => 'range',
			'min'     => 10,
			'max'     => 64,
		) ,
		array(
			'name'    => __('Background', 'lawyers-attorneys') ,
			'id'      => 'bgColor',
			'default' => 'accent1',
			'type'    => 'select',
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
		) ,
		array(
			'name'    => __('Hover Background', 'lawyers-attorneys') ,
			'id'      => 'hover_color',
			'default' => 'accent1',
			'type'    => 'select',
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
		) ,
		array(
			'name'    => __('Alignment', 'lawyers-attorneys') ,
			'id'      => 'align',
			'default' => '',
			'prompt'  => '',
			'type'    => 'select',
			'options' => array(
				'left'   => __('Left', 'lawyers-attorneys') ,
				'right'  => __('Right', 'lawyers-attorneys') ,
				'center' => __('Center', 'lawyers-attorneys') ,
			) ,
		) ,
		array(
			'name'    => __('Link', 'lawyers-attorneys') ,
			'id'      => 'link',
			'default' => '',
			'type'    => 'text',
		) ,
		array(
			'name'    => __('Link Target', 'lawyers-attorneys') ,
			'id'      => 'linkTarget',
			'default' => '_self',
			'type'    => 'select',
			'options' => array(
				'_blank' => __('Load in a new window', 'lawyers-attorneys') ,
				'_self'  => __('Load in the same frame as it was clicked', 'lawyers-attorneys') ,
			) ,
		) ,
		array(
			'name'    => __('Icon', 'lawyers-attorneys') ,
			'id'      => 'icon',
			'default' => '',
			'type'    => 'icons',
		) ,
		array(
			'name'    => __('Icon Style', 'lawyers-attorneys'),
			'type'    => 'select-row',
			'selects' => array(
				'icon_color' => array(
					'desc'    => __('Color:', 'lawyers-attorneys'),
					"default" => "",
					"prompt"  => '',
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
				),
				'icon_placement' => array(
					'desc'    => __('Placement:', 'lawyers-attorneys'),
					"default" => 'left',
					"options" => array(
						'left'  => __('Left', 'lawyers-attorneys'),
						'right' => __('Right', 'lawyers-attorneys'),
					) ,
				),
			),
		),

		array(
			'name'    => __('ID', 'lawyers-attorneys') ,
			'desc'    => __('ID attribute added to the button element.', 'lawyers-attorneys'),
			'id'      => 'id',
			'default' => '',
			'type'    => 'text',
		) ,
		array(
			'name'    => __('Class', 'lawyers-attorneys') ,
			'desc'    => __('Class attribute added to the button element.', 'lawyers-attorneys'),
			'id'      => 'class',
			'default' => '',
			'type'    => 'text',
		) ,
	) ,
);