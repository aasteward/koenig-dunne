<?php
return 	array(
	'name' => __('Team Member', 'lawyers-attorneys'),
	'icon' => array(
		'char'    => WPV_Editor::get_icon('profile'),
		'size'    => '26px',
		'lheight' => '39px',
		'family'  => 'vamtam-editor-icomoon',
	),
	'value'    => 'team_member',
	'controls' => 'size name clone edit delete',
	'options'  => array(

		array(
			'name'    => __('Name', 'lawyers-attorneys'),
			'id'      => 'name',
			'default' => 'Nikolay Yordanov',
			'type'    => 'text',
			'holder'  => 'h5',
		),
		array(
			'name'    => __('Position', 'lawyers-attorneys'),
			'id'      => 'position',
			'default' => 'Web Developer',
			'type'    => 'text'
		),
		array(
			'name'    => __('Link', 'lawyers-attorneys'),
			'id'      => 'url',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __('Email', 'lawyers-attorneys'),
			'id'      => 'email',
			'default' => 'support@vamtam.com',
			'type'    => 'text'
		),
		array(
			'name'    => __('Phone', 'lawyers-attorneys'),
			'id'      => 'phone',
			'default' => '+448786562223',
			'type'    => 'text'
		),
		array(
			'name'    => __('Picture', 'lawyers-attorneys'),
			'id'      => 'picture',
			'default' => 'http://makalu.vamtam.com/wp-content/uploads/2013/03/people4.png',
			'type'    => 'upload'
		),

		array(
			'name'    => __('Biography', 'lawyers-attorneys') ,
			'id'      => 'html-content',
			'default' => __('This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.', 'lawyers-attorneys'),
			'type'    => 'editor',
			'holder'  => 'textarea',
		) ,

		array(
			'name'    => __('Google+', 'lawyers-attorneys'),
			'id'      => 'googleplus',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __('LinkedIn', 'lawyers-attorneys'),
			'id'      => 'linkedin',
			'default' => '',
			'type'    => 'text'
		),
		array(
			'name'    => __('Facebook', 'lawyers-attorneys'),
			'id'      => 'facebook',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __('Twitter', 'lawyers-attorneys'),
			'id'      => 'twitter',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __('YouTube', 'lawyers-attorneys'),
			'id'      => 'youtube',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __('Pinterest', 'lawyers-attorneys'),
			'id'      => 'pinterest',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __('LastFM', 'lawyers-attorneys'),
			'id'      => 'lastfm',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __('Instagram', 'lawyers-attorneys'),
			'id'      => 'instagram',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __('Dribble', 'lawyers-attorneys'),
			'id'      => 'dribble',
			'default' => '/',
			'type'    => 'text'
		),
		array(
			'name'    => __('Vimeo', 'lawyers-attorneys'),
			'id'      => 'vimeo',
			'default' => '/',
			'type'    => 'text'
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
	),
);
