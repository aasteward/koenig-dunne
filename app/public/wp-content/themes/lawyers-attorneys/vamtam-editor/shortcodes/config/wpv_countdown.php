<?php
return array(
	'name' => __('Countdown', 'lawyers-attorneys') ,
	'icon' => array(
		'char' => WPV_Editor::get_icon('clock'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'wpv_countdown',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Date and Time', 'lawyers-attorneys') ,
			'desc' => __('Any <a href="http://www.php.net/manual/en/datetime.formats.compound.php">compount time format</a> accepted by PHP. "Common Log Format" is recommended if your server is in different time zone from you.', 'lawyers-attorneys'),
			'id' => 'datetime',
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('"Finished" text', 'lawyers-attorneys') ,
			'id' => 'done',
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Description text', 'lawyers-attorneys') ,
			'id' => 'html-content',
			'default' => '',
			'type' => 'editor',
		) ,
		array(
			'name' => __('Title (optional)', 'lawyers-attorneys') ,
			'desc' => __('The title is placed just above the element.<br/><br/>', 'lawyers-attorneys'),
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