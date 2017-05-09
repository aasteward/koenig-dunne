<?php

/**
 * Blog shortcode options
 *
 * @package wpv
 * @subpackage editor
 */


return array(
	'name' => 'Blog',
	'desc' => __('Please note that this element shows already created blog posts. To create one go to the Posts tab in the WordPress main navigation menu on the left - add new. You do not have to go to Settings - Reading to set the blog listing page.' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('blog'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'blog',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __('Layout', 'lawyers-attorneys'),
			'desc' => __('Big images - this is the standard layout in one column. <br/>
				Small images, Small Images - Scrollable, Small images - Masonry - the posts in these layouts come in boxes with image on top and text below. They come in 2,3,4 columns.', 'lawyers-attorneys') ,
			'id' => 'layout',
			'type' => 'select',
			'default' => 'normal',
			'options' => array(
				'normal' => __('Big Images', 'lawyers-attorneys'),
				'small' => __('Small Images - Normal', 'lawyers-attorneys'),
				'scroll-x' => __('Small Images - Scrollable', 'lawyers-attorneys'),
				'masonry' => __('Small Images - Masonry', 'lawyers-attorneys'),
			),
			'field_filter' => 'fbs',
		),
		array(
			'name' => __('Columns', 'lawyers-attorneys') ,
			'desc' => __('Number of posts to show per row.', 'lawyers-attorneys') ,
			'id' => 'column',
			'default' => 2,
			'min' => 1,
			'max' => 4,
			'type' => 'range',
			'class' => 'fbs fbs-small fbs-scroll-x fbs-masonry',
		) ,
		array(
			'name' => __('Limit', 'lawyers-attorneys') ,
			'desc' => __('Number of posts to show per page.', 'lawyers-attorneys') ,
			'id' => 'count',
			'default' => 3,
			'min' => 1,
			'max' => 50,
			'type' => 'range',
		) ,

		array(
			'name' => __('Display Post Content', 'lawyers-attorneys') ,
			'id' => 'show_content',
			'desc' => __('Big Images Layout: If the option is on, it will display the content of the post, otherwise it will display the excerpt.<br>
				Small Images - Normal, Scrollable, Masonry: If the option is on, the post excerpt will be shown, otherwise no content will be shown.', 'lawyers-attorneys') ,
			'default' => false,
			'type' => 'toggle',
		) ,
		array(
			'name' => __('Nopaging', 'lawyers-attorneys') ,
			'id' => 'nopaging',
			'desc' => __('If the option is on, it will disable pagination. You can set the type of pagination in General Settings - Posts - Pagination Type. ', 'lawyers-attorneys') ,
			'default' => true,
			'type' => 'toggle',
			'class' => 'fbs fbs-normal fbs-small fbs-masonry',
		) ,
		array(
			'name' => __('Category (optional)', 'lawyers-attorneys') ,
			'desc' => __('All categories will be shown if none are selected. Please note that if you do not see categories, there are none created most probably. You can use ctr + click to select multiple categories', 'lawyers-attorneys') ,
			'id' => 'cat',
			'default' => array() ,
			'target' => 'cat',
			'type' => 'multiselect',
			'layout' => 'checkbox',
		) ,
		array(
			'name' => __('Posts (optional)', 'lawyers-attorneys') ,
			'desc' => __('All posts will be shown if none are selected. If you select any posts here, this option will override the category option above. You can use ctr + click to select multiple posts.', 'lawyers-attorneys') ,
			'id' => 'posts',
			'default' => array() ,
			'target' => 'post',
			'type' => 'multiselect',
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



