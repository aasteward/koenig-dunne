<?php

/**
 * Theme options / General / Posts
 *
 * @package wpv
 * @subpackage lawyers-attorneys
 */

return array(

array(
	'name' => __('Posts and Content', 'lawyers-attorneys'),
	'type' => 'start',
),

array(
	'name' => __('Blog and Portfolio Listing Pages and Archives', 'lawyers-attorneys'),
	'type' => 'separator',
),

array(
	'name' => __('Pagination Type', 'lawyers-attorneys'),
	'desc' => __('Please note that you will need WP-PageNavi plugin installed if you chose "paged" style.', 'lawyers-attorneys'),
	'id' => 'pagination-type',
	'type' => 'select',
	'options' => array(
		'paged' => __('Paged', 'lawyers-attorneys'),
		'load-more' => __('Load more button', 'lawyers-attorneys'),
		'infinite-scrolling' => __('Infinite scrolling', 'lawyers-attorneys'),
	),
	'class' => 'slim',
),


array(
	'name' => __('Blog Posts', 'lawyers-attorneys'),
	'type' => 'separator',
),

array(
	'name' => __('"View All Posts" Link', 'lawyers-attorneys'),
	'desc' => __('In a single blog post view in the top you will find navigation with 3 buttons. The middle gets you to the blog listing view.<br>
You can place the link here.', 'lawyers-attorneys'),
	'id' => 'post-all-items',
	'type' => 'text',
	'static' => true,
	'class' => 'slim',
),

array(
	'name' => __('Show "Related Posts" in Single Post View', 'lawyers-attorneys'),
	'desc' => __('Enabling this option will show more posts from the same category when viewing a single post.', 'lawyers-attorneys'),
	'id' => 'show-related-posts',
	'type' => 'toggle',
	'class' => 'slim',
),

array(
	'name' => __('"Related Posts" title', 'lawyers-attorneys'),
	'id' => 'related-posts-title',
	'type' => 'text',
	'class' => 'slim',
),

array(
	'name' => __('Show Post Author', 'lawyers-attorneys'),
	'desc' => __('Blog post meta info, works for the single blog post view.', 'lawyers-attorneys'),
	'id' => 'show-post-author',
	'type' => 'toggle',
	'class' => 'slim'
),
array(
	'name' => __('Show Categories and Tags', 'lawyers-attorneys'),
	'desc' => __('Blog post meta info, works for the single blog post view.', 'lawyers-attorneys'),
	'id' => 'meta_posted_in',
	'type' => 'toggle',
	'class' => 'slim',
),
array(
	'name' => __('Show Post Timestamp', 'lawyers-attorneys'),
	'desc' => __('Blog post meta info, works for the single blog post view.', 'lawyers-attorneys'),
	'id' => 'meta_posted_on',
	'type' => 'toggle',
	'class' => 'slim',
),
array(
	'name' => __('Show Comment Count', 'lawyers-attorneys'),
	'desc' => __('Blog post meta info, works for the single blog post view.', 'lawyers-attorneys'),
	'id' => 'meta_comment_count',
	'type' => 'toggle',
	'class' => 'slim',
),

array(
	'name' => __('Portfolio Posts', 'lawyers-attorneys'),
	'type' => 'separator',
),

array(
	'name' => __('"View All Portfolios" Link', 'lawyers-attorneys'),
	'desc' => __('In a single portfolio post view in the top you will find navigation with 3 buttons. The middle gets you to the portfolio listing view.<br>
You can place the link here.', 'lawyers-attorneys'),
	'id' => 'portfolio-all-items',
	'type' => 'text',
	'static' => true,
	'class' => 'slim',
),
array(
	'name' => __('Show "Related Portfolios" in Single Portfolio View', 'lawyers-attorneys'),
	'desc' => __('Enabling this option will show more portfolio posts from the same category in the single portfolio post.', 'lawyers-attorneys'),
	'id' => 'show-related-portfolios',
	'type' => 'toggle',
	'class' => 'slim',
),

array(
	'name' => __('"Related Portfolios" title', 'lawyers-attorneys'),
	'id' => 'related-portfolios-title',
	'type' => 'text',
	'class' => 'slim',
),

array(
	'name' => __('URL Prefix for Single Portfolios', 'lawyers-attorneys'),
	'desc' => __('Use an unique string without spaces. It must not be the same as any other URL slugs (used on pages, etc.).', 'lawyers-attorneys'),
	'id' => 'portfolio-slug',
	'type' => 'text',
	'class' => 'slim',
),

	array(
		'type' => 'end'
	),
);