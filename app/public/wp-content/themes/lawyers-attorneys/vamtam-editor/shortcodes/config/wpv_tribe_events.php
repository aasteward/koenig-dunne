<?php
return array(
	"name" => __("Upcoming Events", 'lawyers-attorneys'),
	'icon' => array(
		'char'    => WPV_Editor::get_icon('calendar'),
		'size'    => '26px',
		'lheight' => '39px',
		'family'  => 'vamtam-editor-icomoon',
	),
	"value"    => "wpv_tribe_events",
	'controls' => 'size name clone edit delete',
	"options"  => array(

		array(
			'name'    => __('Layout', 'lawyers-attorneys') ,
			'id'      => 'layout',
			'default' => 'single',
			'type'    => 'select',
			'options' => array(
				'single'       => __('Single event per line', 'lawyers-attorneys'),
				'single-large' => __('Single event per line (large)', 'lawyers-attorneys'),
				'classic'      => __('Classic', 'lawyers-attorneys'),
				'vertical'     => __('Large vertical list', 'lawyers-attorneys'),
				'multiple'     => __('Multiple events per line ', 'lawyers-attorneys'),
			),
			'field_filter' => 'fbl',
		) ,

		array(
			'name'    => __('Style', 'lawyers-attorneys') ,
			'id'      => 'style',
			'default' => 'light',
			'type'    => 'select',
			'options' => array(
				'light' => __('Light Text', 'lawyers-attorneys'),
				'dark'  => __('Dark Text', 'lawyers-attorneys'),
			),
		) ,

		array(
			'name'    => __('Number of Events', 'lawyers-attorneys') ,
			'id'      => 'count',
			'default' => '',
			'type'    => 'range',
			'min'     => 1,
			'max'     => 30,
			'class'   => 'fbl fbl-multiple fbl-vertical',
		) ,

		array(
			'name'    => __('Number of Columns', 'lawyers-attorneys') ,
			'id'      => 'columns',
			'default' => 4,
			'type'    => 'range',
			'min'     => 1,
			'max'     => 4,
			'class'   => 'fbl fbl-multiple',
		) ,

		array(
			'name'    => __('Ongoing Event Text', 'lawyers-attorneys') ,
			'id'      => 'ongoing',
			'default' => '',
			'type'    => 'text',
			'class'   => 'fbl fbl-single',
		) ,

		array(
			'name'    => __('Categories (optional)', 'lawyers-attorneys') ,
			'desc'    => __('All categories will be shown if none are selected. Please note that if you do not see categories, there are none created most probably. You can use ctr + click to select multiple categories.', 'lawyers-attorneys') ,
			'id'      => 'cat',
			'default' => array() ,
			'target'  => 'tribe_events_category',
			'type'    => 'multiselect',
		) ,

		array(
			'name'    => __('Title (optional)', 'lawyers-attorneys') ,
			'desc'    => __('The title is placed just above the element.', 'lawyers-attorneys'),
			'id'      => 'column_title',
			'default' => '',
			'type'    => 'text'
		) ,
		array(
			'name'    => __('Title Type (optional)', 'lawyers-attorneys') ,
			'id'      => 'column_title_type',
			'default' => 'single',
			'type'    => 'select',
			'options' => array(
				'single'     => __('Title with divider next to it', 'lawyers-attorneys'),
				'double'     => __('Title with divider under it ', 'lawyers-attorneys'),
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
	),
);
