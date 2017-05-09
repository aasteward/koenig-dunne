<?php
return array(
	'name' => __('Blank Space', 'lawyers-attorneys') ,
	'desc' => __('You can increase or decrease the space between elements using this shortcode.' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('page-break'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'blank',
	'controls' => 'name clone edit delete',
	'class' => 'slim',
	'options' => array(
		array(
			'name' => __('Height (px)', 'lawyers-attorneys') ,
			'desc' => __('You can increase or decrease the space between elements using this option. Please note that using negative number - decreasing space will not work for all elements and situations ', 'lawyers-attorneys'),
			'id' => 'h',
			'default' => 30,
			'min' => -500,
			'max' => 500,
			'type' => 'range',
		) ,
	) ,
);