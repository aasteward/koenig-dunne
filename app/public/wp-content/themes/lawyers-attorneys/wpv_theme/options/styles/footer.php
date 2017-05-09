<?php
/**
 * Theme options / Styles / Footer
 *
 * @package wpv
 * @subpackage lawyers-attorneys
 */

return array(

array(
	'name' => __('Footer', 'lawyers-attorneys'),
	'type' => 'start',
),

array(
	'name' => __('Where are these options used?', 'lawyers-attorneys'),
	'desc' => __('The footer is the area below the body down to the bottom of your site. It consist of two main areas - the footer and the sub-footer. You can change the style of these areas using the options below.<br/>
		Please not that the footer map options are located in general settings - footer map tab.', 'lawyers-attorneys'),
	'type' => 'info',
),

array(
	'name' => __('Backgrounds', 'lawyers-attorneys'),
	'type' => 'separator',
),

array(
	'name' => __('Widget Areas Background', 'lawyers-attorneys'),
	'desc' => __('If you want to use an image as a background, enabling the cover button will resize and crop the image so that it will always fit the browser window on any resolution. If the color opacity  is less than 1 the page background underneath will be visible.', 'lawyers-attorneys'),
	'id' => 'footer-background',
	'type' => 'background',
	'only' => 'color,opacity,image,repeat,size,attachment,position',
),

array(
	'name' => __('Sub-footer Background', 'lawyers-attorneys'),
	'desc' => __('If you want to use an image as a background, enabling the cover button will resize and crop the image so that it will always fit the browser window on any resolution.', 'lawyers-attorneys'),
	'id' => 'subfooter-background',
	'type' => 'background',
	'only' => 'color,image,repeat,size'
),

array(
	'name' => __('Typography', 'lawyers-attorneys'),
	'type' => 'separator',
),

array(
	'name' => __('Widget Areas Text', 'lawyers-attorneys'),
	'desc' => __('This is the general font used for the footer widgets.', 'lawyers-attorneys'),
	'id' => 'footer-sidebars-font',
	'type' => 'font',
	'min' => 10,
	'max' => 32,
	'lmin' => 10,
	'lmax' => 64,
),

array(
	'name' => __('Widget Areas Titles', 'lawyers-attorneys'),
	'desc' => __('Please note that this option will override the general headings style set in the General Typography" tab.', 'lawyers-attorneys'),
	'id' => 'footer-sidebars-titles',
	'type' => 'font',
	'min' => 10,
	'max' => 32,
	'lmin' => 10,
	'lmax' => 64,
),

array(
	'name' => __('Sub-footer', 'lawyers-attorneys'),
	'desc' => __('You can place your text/HTML in the General Settings option page.', 'lawyers-attorneys'),
	'id' => 'sub-footer',
	'type' => 'font',
	'min' => 10,
	'max' => 32,
	'lmin' => 10,
	'lmax' => 64,
),

array(
	'name' => __('Links', 'lawyers-attorneys'),
	'type' => 'color-row',
	'inputs' => array(
		'css_footer_link_color' => array(
			'name' => __('Normal:', 'lawyers-attorneys'),
		),
		'css_footer_link_visited_color' => array(
			'name' => __('Visited:', 'lawyers-attorneys'),
		),
		'css_footer_link_hover_color' => array(
			'name' => __('Hover:', 'lawyers-attorneys'),
		),
	),
),

	array(
		'type' => 'end'
	),

);