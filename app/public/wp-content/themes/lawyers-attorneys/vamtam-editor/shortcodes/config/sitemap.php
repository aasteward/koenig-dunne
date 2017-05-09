<?php
return array(
	"name" => "Sitemap",
	'icon' => array(
		'char' => WPV_Editor::get_icon('list'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	"value" => "sitemap",
	'controls' => 'size name clone edit delete',
	'class' => 'slim',
	"options" => array(
		array(
			'name' => __('General', 'lawyers-attorneys'),
			'type' => 'separator',
		),
			array(
				"name" => __("Filter", 'lawyers-attorneys') ,
				"id" => "shows",
				"default" => array(),
				"options" => array(
					"pages" => __("Pages", 'lawyers-attorneys') ,
					"categories" => __("Categories", 'lawyers-attorneys') ,
					"posts" => __("Posts", 'lawyers-attorneys') ,
					"portfolios" => __("Portfolios", 'lawyers-attorneys') ,
				) ,
				"type" => "multiselect",
			) ,

			array(
				"name" => __("Limit", 'lawyers-attorneys') ,
				"desc" => __("Sets the number of items to display.<br>leaving this setting as 0 displays all items.", 'lawyers-attorneys') ,
				"id" => "number",
				"default" => 0,
				"min" => 0,
				"max" => 200,
				"type" => "range"
			) ,

			array(
				"name" => __("Depth", 'lawyers-attorneys') ,
				"desc" => __("This parameter controls how many levels in the hierarchy are to be included. <br> 0: Displays pages at any depth and arranges them hierarchically in nested lists<br> -1: Displays pages at any depth and arranges them in a single, flat list<br> 1: Displays top-level Pages only<br> 2, 3 … Displays Pages to the given depth", 'lawyers-attorneys') ,
				"id" => "depth",
				"default" => 0,
				"min" => - 1,
				"max" => 5,
				"type" => "range"
			) ,

		array(
			'name' => __('Posts and portfolios', 'lawyers-attorneys'),
			'type' => 'separator',
		),
			array(
				"name" => __("Show comments", 'lawyers-attorneys') ,
				"id" => "show_comment",
				"desc" => '',
				"default" => true,
				"type" => "toggle"
			) ,
			array(
				"name" => __("Specific post categories", 'lawyers-attorneys') ,
				"id" => "post_categories",
				"default" => array() ,
				"target" => 'cat',
				"type" => "multiselect",
			) ,
			array(
				"name" => __("Specific posts", 'lawyers-attorneys') ,
				"desc" => __("The specific posts you want to display", 'lawyers-attorneys') ,
				"id" => "posts",
				"default" => array() ,
				"target" => 'post',
				"type" => "multiselect",
			) ,
			array(
				"name" => __("Specific portfolio categories", 'lawyers-attorneys') ,
				"id" => "portfolio_categories",
				"default" => array() ,
				"target" => 'portfolio_category',
				"type" => "multiselect",
			) ,
		
		array(
			'name' => __('Categories', 'lawyers-attorneys'),
			'type' => 'separator',
		),
			array(
				"name" => __("Show Count", 'lawyers-attorneys') ,
				"id" => "show_count",
				"desc" => __("Toggles the display of the current count of posts in each category.", 'lawyers-attorneys') ,
				"default" => true,
				"type" => "toggle"
			) ,
			array(
				"name" => __("Show Feed", 'lawyers-attorneys') ,
				"id" => "show_feed",
				"desc" => __("Display a link to each category's <a href='http://codex.wordpress.org/Glossary#RSS' target='_blank'>rss-2</a> feed.", 'lawyers-attorneys') ,
				"default" => true,
				"type" => "toggle"
			) ,
			array(
			'name' => __('Title', 'lawyers-attorneys') ,
			'desc' => __('The column title is placed just above the element.', 'lawyers-attorneys'),
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
