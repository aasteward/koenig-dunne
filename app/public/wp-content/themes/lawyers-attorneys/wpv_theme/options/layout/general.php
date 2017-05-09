<?php

/**
 * Theme options / Layout / General
 *
 * @package wpv
 * @subpackage lawyers-attorneys
 */

return array(
array(
	'name' => __('General', 'lawyers-attorneys'),
	'type' => 'start',
),

array(
	'name' => __('Responsive Layout', 'lawyers-attorneys'),
	'desc' => __('Enabling this option will make the layout respond to the screen resolutions.It is useful mostly on mobile phones.', 'lawyers-attorneys'),
	'id' => 'is-responsive',
	'type' => 'toggle',
	'class' => 'hidden',
),

array(
	'name' => __('Layout Type', 'lawyers-attorneys'),
	'desc' => __('Please note that in full width layout mode, the body background option found in Styles - Body, acts as page background.', 'lawyers-attorneys'),
	'id' => 'site-layout-type',
	'type' => 'select',
	'options' => array(
		'boxed' => __('Boxed', 'lawyers-attorneys'),
		'full' => __('Full width', 'lawyers-attorneys'),
	),
),

array(
	'name' => __('Maximum Page Width', 'lawyers-attorneys'),
	'desc' => sprintf(__('If you have changed this option, please use the <a href="%s" title="Regenerate thumbnails" target="_blank">Regenerate thumbnails</a> plugin in order to update your images.', 'lawyers-attorneys'), 'http://wordpress.org/extend/plugins/regenerate-thumbnails/'),
	'id' => 'site-max-width',
	'type' => 'select',
	'options' => array(
		1080 => '960px',
		1260 => '1140px',
		1380 => '1260px',
	),
),

	array(
		'type' => 'end'
	),
);