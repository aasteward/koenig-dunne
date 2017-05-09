<?php
/**
 * Portfolio shortcode options
 *
 * @package wpv
 * @subpackage editor
 */


return array(
	'name' => __('Portfolio', 'lawyers-attorneys') ,
	'desc' => __('Please note that this element shows already created portfolio posts. To create one go to the Portfolios tab in the WordPress main navigation menu on the left - Add New. ' , 'lawyers-attorneys'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('grid2'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'portfolio',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __('Layout', 'lawyers-attorneys') ,
			'id' => 'layout',
			'desc' => __('Static - no filtering.<br/>
				Filtering - Enable filtering for the portfolio items depending on their category.<br/>
				Srollable - shows the portfolio items in a slider', 'lawyers-attorneys') ,
			'default' => '',
			'type' => 'select',
			'options' => array(
				'static' => __('Static', 'lawyers-attorneys'),
				'fit-rows' => __('Filtering - Fit Rows', 'lawyers-attorneys'),
				'masonry' => __('Filtering - Masonry', 'lawyers-attorneys'),
				'scrollable' => __('Scrollable', 'lawyers-attorneys'),
			),
			'field_filter' => 'fbs',
		) ,
		array(
			'name' => __('No Paging', 'lawyers-attorneys') ,
			'id' => 'nopaging',
			'desc' => __('If the option is on, it will disable pagination. You can set the type of pagination in General Settings - Posts - Pagination Type. ', 'lawyers-attorneys') ,
			'default' => false,
			'type' => 'toggle',
			'class' => 'fbs fbs-static fbs-fit-rows fbs-masonry',
		) ,
		array(
			'name' => __('Columns', 'lawyers-attorneys') ,
			'id' => 'column',
			'default' => 4,
			'type' => 'range',
			'min' => 1,
			'max' => 4,
		) ,
		array(
			'name' => __('Limit', 'lawyers-attorneys') ,
			'desc' => __('Number of item to show per page. If you set it to -1, it will display all portfolio items.', 'lawyers-attorneys') ,
			'id' => 'max',
			'default' => '4',
			'min' => -1,
			'max' => 100,
			'step' => '1',
			'type' => 'range'
		) ,

		array(
			'name' => __('Display Title', 'lawyers-attorneys') ,
			'id' => 'title',
			'desc' => __('If the option is on, it will display the title of the portfolio post.<br/><br/>', 'lawyers-attorneys') ,
			'default' => 'false',
			'type' => 'select',
			'options' => array(
				'false' => __('No Title', 'lawyers-attorneys'),
				'below' => __('Below Media', 'lawyers-attorneys'),
			),
		) ,
		array(
			'name' => __('Display Description', 'lawyers-attorneys') ,
			'id' => 'desc',
			'desc' => __('If the option is on, it will display short description of the portfolio item.', 'lawyers-attorneys') ,
			'default' => false,
			'type' => 'toggle'
		) ,
		array(
			'name' => __('Button Text', 'lawyers-attorneys') ,
			'id' => 'more',
			'default' => __('Read more', 'lawyers-attorneys') ,
			'type' => 'text',
		) ,
		array(
			'name' => __('Group', 'lawyers-attorneys') ,
			'id' => 'group',
			'desc' => __('If the option is on, the lightbox will display left and right arrows and  you can see all the portfolio posts from the same category.', 'lawyers-attorneys') ,
			'default' => true,
			'type' => 'toggle',
			'class' => 'fbs fbs-static fbs-fit-rows fbs-masonry',
		) ,
		array(
			'name' => __('Categories (optional)', 'lawyers-attorneys') ,
			'desc' => __('All categories will be shown if none are selected. Please note that if you do not see categories, there are none created most probably. You can use ctr + click to select multiple categories.', 'lawyers-attorneys') ,
			'id' => 'cat',
			'default' => array() ,
			'target' => 'portfolio_category',
			'type' => 'multiselect',
		) ,
		array(
			'name' => __('Portfolio Posts (optional)', 'lawyers-attorneys') ,
			'desc' => __('All portfolio posts will be shown if none are selected. If you select any posts here, this option will override the category option above. You can use ctr + click to select multiple posts.', 'lawyers-attorneys') ,
			'id' => 'ids',
			'default' => array() ,
			'target' => 'portfolio',
			'type' => 'multiselect',
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
				'single' => __('Title with divider next to it ', 'lawyers-attorneys'),
				'double' => __('Title with divider below', 'lawyers-attorneys'),
				'no-divider' => __('No Divider', 'lawyers-attorneys'),
			),
		) ,
	) ,
);
