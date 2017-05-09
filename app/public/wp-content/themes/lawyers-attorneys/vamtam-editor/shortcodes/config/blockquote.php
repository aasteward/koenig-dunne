<?php

/**
 * Blockquote shortcode options
 *
 * @package wpv
 * @subpackage editor
 */

return array(
	'name' => __('Testimonials', 'lawyers-attorneys') ,
	'desc' => __('Please note that this element shows already created testimonials. To create one go to Testimonials tab in the WordPress main navigation menu on the left - add new.  ' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('quotes-left'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'blockquote',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __('Layout', 'lawyers-attorneys') ,
			'id' => 'layout',
			'default' => 'slider',
			'type' => 'select',
			'options' => array(
				'slider' => __('Slider', 'lawyers-attorneys'),
				'static' => __('Static', 'lawyers-attorneys'),
			),
			'field_filter' => 'fbl',
		) ,
		array(
			'name' => __('Categories (optional)', 'lawyers-attorneys') ,
			'desc' => __('By default all categories are active. Please note that if you do not see catgories, most probably there are none created.  You can use ctr + click to select multiple categories.' , 'lawyers-attorneys'),
			'id' => 'cat',
			'default' => array() ,
			'target' => 'testimonials_category',
			'type' => 'multiselect',
		) ,
		array(
			'name' => __('IDs (optional)', 'lawyers-attorneys') ,
			'desc' => __(' By default all testimonials are active. You can use ctr + click to select multiple IDs.', 'lawyers-attorneys') ,
			'id' => 'ids',
			'default' => array() ,
			'target' => 'testimonials',
			'type' => 'multiselect',
		) ,

		array(
			'name' => __('Automatically rotate', 'lawyers-attorneys') ,
			'id' => 'autorotate',
			'default' => false,
			'type' => 'toggle',
			'class' => 'fbl fbl-slider',
		) ,

		array(
			'name' => __('Title (optional)', 'lawyers-attorneys') ,
			'desc' => __('The title is placed just above the element.', 'lawyers-attorneys'),
			'id' => 'column_title',
			'default' => __('', 'lawyers-attorneys') ,
			'type' => 'text'
		) ,


		array(
			'name' => __('Title Type (optional)', 'lawyers-attorneys') ,
			'id' => 'column_title_type',
			'default' => 'single',
			'type' => 'select',
			'options' => array(
				'single' => __('Title with devider next to it.', 'lawyers-attorneys'),
				'double' => __('Title with devider under it.', 'lawyers-attorneys'),
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
