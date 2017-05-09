<?php
return array(
	'name' => __('Flickr', 'lawyers-attorneys') ,
	'desc' => __('This element is usefull if you have a Flickr account. Use <a href="http://idgettr.com/" target="_blank">idGettr</a> if you don\'t know your ID.<br/><br/>.' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('flickr'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'flickr',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __('Flickr ID', 'lawyers-attorneys'),
			'desc' => __('Use <a href="http://idgettr.com/" target="_blank">idGettr</a> if you don\'t know your ID.<br/><br/>', 'lawyers-attorneys'),
			'id' => 'id',
			'default' => '',
			'type' => 'text'
		),
		
		array(
			'name' => __('Type', 'lawyers-attorneys'),
			'id' => 'type',
			'default' => 'page',
			'options' => array(
				'user' => __('User', 'lawyers-attorneys'),
				'group' => __('Group', 'lawyers-attorneys'),
			),
			'type' => 'select',
		),
		
		array(
			'name' => __('Count', 'lawyers-attorneys'),
			'desc' => '',
			'id' => 'count',
			'default' => 4,
			'min' => 0,
			'max' => 20,
			'type' => 'range'
		),
		array(
			'name' => __('Display', 'lawyers-attorneys'),
			'id' => 'display',
			'default' => 'latest',
			'options' => array(
				'latest' => __('Latest', 'lawyers-attorneys'),
				'random' => __('Random', 'lawyers-attorneys'),
			),
			'type' => 'select',
		),
		
		array(
			'name' => __('Title (optional)', 'lawyers-attorneys') ,
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
	

	) ,
);
