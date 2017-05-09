<?php
return array(
	'name' => __('Google Maps', 'lawyers-attorneys') ,
	'desc' => __('In order to enable Google Map you need:<br>
                 Insert the Google Map element into the editor, open its option panel by clicking on the icon- edit on the right of the element and fill in all fields necessary.
' , 'lawyers-attorneys'),
		'icon' => array(
		'char' => WPV_Editor::get_icon('location1'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'gmap',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Address (optional)', 'lawyers-attorneys') ,
			'desc' => __('Unless you\'ve filled in the Latitude and Longitude options, please enter the address that you want to be shown on the map. If you encounter any errors about the maximum number of address translation requests per page, you should either use the latitude/longitude options or upgrade to the paid Google Maps API.', 'lawyers-attorneys'),
			'id' => 'address',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Latitude', 'lawyers-attorneys') ,
			'desc' => __('This option is not necessary if an address is set.<br/><br/>', 'lawyers-attorneys'),
			'id' => 'latitude',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Longitude', 'lawyers-attorneys') ,
			'desc' => __('This option is not necessary if an address is set.<br/><br/>', 'lawyers-attorneys'),
			'id' => 'longitude',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Zoom', 'lawyers-attorneys') ,
			'desc' => __('Default map zoom level.<br/><br/>', 'lawyers-attorneys'),
			'id' => 'zoom',
			'default' => '14',
			'min' => 1,
			'max' => 19,
			'step' => '1',
			'type' => 'range'
		) ,
		array(
			'name' => __('Marker', 'lawyers-attorneys') ,
			'desc' => __('Enable an arrow pointing at the address.<br/><br/>', 'lawyers-attorneys'),
			'id' => 'marker',
			'default' => true,
			'type' => 'toggle'
		) ,
		array(
			'name' => __('HTML', 'lawyers-attorneys') ,
			'desc' => __('HTML code to be shown in a popup above the marker.<br/><br/>', 'lawyers-attorneys'),
			'id' => 'html',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Popup Marker', 'lawyers-attorneys') ,
			'desc' => __('Enable to open the popup above the marker by default.<br/><br/>', 'lawyers-attorneys'),
			'id' => 'popup',
			'default' => false,
			'type' => 'toggle'
		) ,
		array(
			'name' => __('Controls (optional)', 'lawyers-attorneys') ,
			'desc' => sprintf(__('This option is intended to be used only by advanced users and is not necessary for most use cases. Please refer to the <a href="%s" title="Google Maps API documentation">API documentation</a> for details.', 'lawyers-attorneys'), 'https://developers.google.com/maps/documentation/javascript/controls'),
			'id' => 'controls',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Scrollwheel', 'lawyers-attorneys') ,
			'id' => 'scrollwheel',
			'default' => false,
			'type' => 'toggle'
		) ,
		array(
			'name' => __('Maptype (optional)', 'lawyers-attorneys') ,
			'id' => 'maptype',
			'default' => 'ROADMAP',
			'options' => array(
				'ROADMAP' => __('Default road map', 'lawyers-attorneys') ,
				'SATELLITE' => __('Google Earth satellite', 'lawyers-attorneys') ,
				'HYBRID' => __('Mixture of normal and satellite', 'lawyers-attorneys') ,
				'TERRAIN' => __('Physical map', 'lawyers-attorneys') ,
			) ,
			'type' => 'select',
		) ,

		array(
			'name' => __('Color (optional)', 'lawyers-attorneys') ,
			'desc' => __('Defines the overall hue for the map. It is advisable that you avoid gray colors, as they are not well-supported by Google Maps.', 'lawyers-attorneys'),
			'id' => 'hue',
			'default' => '',
			'prompt' => __('Default', 'lawyers-attorneys') ,
			'options' => array(
				'accent1' => __('Accent 1', 'lawyers-attorneys'),
				'accent2' => __('Accent 2', 'lawyers-attorneys'),
				'accent3' => __('Accent 3', 'lawyers-attorneys'),
				'accent4' => __('Accent 4', 'lawyers-attorneys'),
				'accent5' => __('Accent 5', 'lawyers-attorneys'),
				'accent6' => __('Accent 6', 'lawyers-attorneys'),
				'accent7' => __('Accent 7', 'lawyers-attorneys'),
				'accent8' => __('Accent 8', 'lawyers-attorneys'),
			) ,
			'type' => 'select',
		) ,
		array(
			'name' => __('Width (optional)', 'lawyers-attorneys') ,
			'desc' => __('Set to 0 is the full width.<br/><br/>', 'lawyers-attorneys') ,
			'id' => 'width',
			'default' => 0,
			'min' => 0,
			'max' => 960,
			'step' => '1',
			'type' => 'range'
		) ,
		array(
			'name' => __('Height', 'lawyers-attorneys') ,
			'id' => 'height',
			'default' => '400',
			'min' => 0,
			'max' => 960,
			'step' => '1',
			'type' => 'range'
		) ,


		array(
			'name' => __('Title (optioanl)', 'lawyers-attorneys') ,
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