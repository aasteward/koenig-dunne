<?php
/**
 * Vamtam Portfolio Format Selector
 *
 * @package wpv
 * @subpackage lawyers-attorneys
 */

return array(

array(
	'name' => __('Portfolio Format', 'lawyers-attorneys'),
	'type' => 'separator'
),

array(
	'name' => __('Portfolio Data Type', 'lawyers-attorneys'),
	'desc' => __('Image - uses the featured image (default)<br />
				  Gallery - use the featured image as a title image but show additional images too<br />
				  Video/Link - uses the "portfolio data url" setting<br />
				  Document - acts like a normal post<br />
				  HTML - overrides the image with arbitrary HTML when displaying a single portfolio page. Does not work with the ajax portfolio.
				', 'lawyers-attorneys'),
	'id' => 'portfolio_type',
	'type' => 'radio',
	'options' => array(
		'image' => __('Image', 'lawyers-attorneys'),
		'gallery' => __('Gallery', 'lawyers-attorneys'),
		'video' => __('Video', 'lawyers-attorneys'),
		'link' => __('Link', 'lawyers-attorneys'),
		'document' => __('Document', 'lawyers-attorneys'),
		'html' => __('HTML', 'lawyers-attorneys'),
	),
	'default' => 'image',
),

);
