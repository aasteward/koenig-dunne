<?php

/**
 * Theme options / General / Single Event
 *
 * @package wpv
 * @subpackage church-event
 */

return array(

array(
	'name' => __('Tribe Events', 'lawyers-attorneys'),
	'type' => 'start',
),

array(
	'name' => __('Single Event', 'lawyers-attorneys'),
	'type' => 'separator'
),

array(
	'name' => __('Footer Content', 'lawyers-attorneys'),
	'id'   => 'events-after-sidebars-2-content',
	'type' => 'textarea',
),

array(
	'name' => __('Footer Background', 'lawyers-attorneys'),
	'id'   => 'events-after-sidebars-2-background',
	'type' => 'background',
),

array(
	'name' => __('After Details Content', 'lawyers-attorneys'),
	'id'   => 'events-after-details-content',
	'type' => 'textarea',
),

array(
	'name' => __('Listing', 'lawyers-attorneys'),
	'type' => 'separator'
),

array(
	'name' => __('Title Background', 'lawyers-attorneys'),
	'id'   => 'events-listing-title-background',
	'type' => 'background',
	'only' => 'color,image,repeat,position,size',
),

	array(
		'type' => 'end'
	),
);