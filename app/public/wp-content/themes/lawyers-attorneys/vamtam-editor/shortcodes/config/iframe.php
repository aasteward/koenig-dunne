<?php
return array(
	'name' => __('IFrame', 'lawyers-attorneys') ,
	'desc' => __('You can embed a website using this element.' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('tablet'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'iframe',
	'controls' => 'size name clone edit delete',
	'options' => array(
		
		array(
			'name' => __('Source', 'lawyers-attorneys') ,
			'desc' => __('The URL of the page you want to display. Please note that the link should be in this format - http://www.google.com.<br/><br/>', 'lawyers-attorneys'),
			'id' => 'src',
			'size' => 30,
			'default' => 'http://apple.com',
			'type' => 'text',
			'holder' => 'div',
			'placeholder' => __('Click edit to set iframe source url', 'lawyers-attorneys'),
		) ,
		array(
			'name' => __('Width', 'lawyers-attorneys') ,
			'desc' => __('You can use % or px as units for width.<br/><br/>', 'lawyers-attorneys') ,
			'id' => 'width',
			'size' => 30,
			'default' => '100%',
			'type' => 'text',
		) ,
		array(
			'name' => __('Height', 'lawyers-attorneys') ,
			'desc' => __('You can use px as units for height.<br/><br/>', 'lawyers-attorneys') ,
			'id' => 'height',
			'size' => 30,
			'default' => '400px',
			'type' => 'text',
		) ,
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
