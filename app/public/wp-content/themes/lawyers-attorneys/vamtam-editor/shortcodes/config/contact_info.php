<?php

/**
 * Contact info shortcode options
 *
 * @package wpv
 * @subpackage editor
 */

return array(
	'name' => __('Contact Info', 'lawyers-attorneys') ,
	'icon' => array(
		'char' => WPV_Editor::get_icon('vcard'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'contact_info',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __('Name', 'lawyers-attorneys'),
			'id' => 'name',
			'default' => 'Nick Perry',
			'size' => 30,
			'type' => 'text'
		),
		array(
			'name' => __('Color', 'lawyers-attorneys'),
			'id' => 'color',
			'default' => 'accent2',
			'prompt' => __('---', 'lawyers-attorneys'),
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
			'type' => 'select',
		),
		array(
			'name' => __('Phone', 'lawyers-attorneys'),
			'id' => 'phone',
			'default' => '+23898933i',
			'size' => 30,
			'type' => 'text'
		),
		array(
			'name' => __('Cell Phone', 'lawyers-attorneys'),
			'id' => 'cellphone',
			'default' => '+23898933i',
			'size' => 30,
			'type' => 'text'
		),
		array(
			'name' => __('Email', 'lawyers-attorneys'),
			'id' => 'email',
			'default' => 'office@test.com',
			'type' => 'text'
		),
		array(
			'name' => __('Address', 'lawyers-attorneys'),
			'id' => 'address',
			'default' => 'London',
			'size' => 30,
			'type' => 'textarea'
		),


		array(
			'name' => __('Title (optional)', 'lawyers-attorneys') ,
			'desc' => __('The column title is placed just above the element.', 'lawyers-attorneys'),
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
