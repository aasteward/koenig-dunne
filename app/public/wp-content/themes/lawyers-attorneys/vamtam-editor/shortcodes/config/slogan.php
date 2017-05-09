<?php

/**
 * Slogan shortcode options
 *
 * @package wpv
 * @subpackage editor
 */

return array(
	'name' => __('Call Out Box', 'lawyers-attorneys') ,
	'desc' => __('You can place the call out box into а column - color box elemnent in order to have background color.' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('font-size'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'slogan',
	'controls' => 'size name clone edit delete handle',
	'options' => array(
		array(
			'name' => __('Content', 'lawyers-attorneys') ,
			'id' => 'html-content',
			'default' => __('<h1>You can place your call out box text here</h1>', 'lawyers-attorneys'),
			'type' => 'editor',
			'holder' => 'textarea',
		) ,
		array(
			'name' => __('Button Text', 'lawyers-attorneys') ,
			'id' => 'button_text',
			'default' => 'Button Text',
			'type' => 'text'
		) ,
		array(
			'name' => __('Button Link', 'lawyers-attorneys') ,
			'id' => 'link',
			'default' => '',
			'type' => 'text'
		) ,
		array(
			'name' => __('Button Icon', 'lawyers-attorneys') ,
			'id' => 'button_icon',
			'default' => 'cart',
			'type' => 'icons',
		) ,
		array(
			'name' => __('Button Icon Style', 'lawyers-attorneys'),
			'type' => 'select-row',
			'selects' => array(
				'button_icon_color' => array(
					'desc' => __('Color:', 'lawyers-attorneys'),
					"default" => "accent 1",
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
				),
				'button_icon_placement' => array(
					'desc' => __('Placement:', 'lawyers-attorneys'),
					"default" => 'left',
					"options" => array(
						'left' => __('Left', 'lawyers-attorneys'),
						'right' => __('Right', 'lawyers-attorneys'),
					) ,
				),
				),
		),
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
