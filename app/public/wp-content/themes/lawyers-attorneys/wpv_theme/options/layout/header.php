<?php

/**
 * Theme options / Layout / Header
 *
 * @package wpv
 * @subpackage lawyers-attorneys
 */

return array(
array(
	'name' => __('Header', 'lawyers-attorneys'),
	'type' => 'start',
),

array(
	'name' => __('Header Layout', 'lawyers-attorneys'),
	'desc' => __('Please note that the theme uses Revolution Slider and its option panel is found in the WordPress navigation menu on the left', 'lawyers-attorneys'),
	'type' => 'info',
),

array(
	'name'        => __('Header Layout', 'lawyers-attorneys'),
	'type'        => 'autofill',
	'class'       => 'no-box ' . ( wpv_get_option( 'header-logo-type' ) === 'names' ? 'hidden' : ''),
	'option_sets' => array(
		array(
			'name'   => __('One row, left logo, menu on the right', 'lawyers-attorneys'),
			'image'  => WPV_ADMIN_ASSETS_URI . 'images/header-layout-1.png',
			'values' => array(
				'header-layout' => 'logo-menu',
			),
		),
		array(
			'name'   => __('Two rows; left-aligned logo on top, right-aligned text and search', 'lawyers-attorneys'),
			'image'  => WPV_ADMIN_ASSETS_URI . 'images/header-layout-2.png',
			'values' => array(
				'header-layout' => 'logo-text-menu',
			),
		),
		array(
			'name'   => __('Two rows; centered logo on top', 'lawyers-attorneys'),
			'image'  => WPV_ADMIN_ASSETS_URI . 'images/header-layout-3.png',
			'values' => array(
				'header-layout' => 'standard',
			),
		),
	),
),


array(
	'name' => __('Header Height', 'lawyers-attorneys'),
	'desc' => __('This is the area above the slider.', 'lawyers-attorneys'),
	'id'   => 'header-height',
	'type' => 'range',
	'min'  => 30,
	'max'  => 300,
	'unit' => 'px',
),
array(
	'name' => __('Sticky Header', 'lawyers-attorneys'),
	'desc' => __('This option is switched off automatically for mobile devices because the animation is not well supported by the majority of the mobile devices.', 'lawyers-attorneys'),
	'id'   => 'sticky-header',
	'type' => 'toggle',
),


array(
	'name' => __('Enable Header Search', 'lawyers-attorneys'),
	'id'   => 'enable-header-search',
	'type' => 'toggle',
),

array(
	'name'  => __('Full Width Header', 'lawyers-attorneys'),
	'id'    => 'full-width-header',
	'type'  => 'toggle',
	'class' => 'fhl fhl-logo-menu',
),

array(
	'name'    => __('Top Bar Layout', 'lawyers-attorneys'),
	'id'      => 'top-bar-layout',
	'type'    => 'select',
	'options' => array(
		''            => __('Disabled', 'lawyers-attorneys'),
		'menu-social' => __('Left: Menu, Right: Social Icons', 'lawyers-attorneys'),
		'social-menu' => __('Left: Social Icons, Right: Menu', 'lawyers-attorneys'),
		'text-menu'   => __('Left: Text, Right: Menu', 'lawyers-attorneys'),
		'menu-text'   => __('Left: Menu, Right: Text', 'lawyers-attorneys'),
		'social-text' => __('Left: Social Icons, Right: Text', 'lawyers-attorneys'),
		'text-social' => __('Left: Text, Right: Social Icons', 'lawyers-attorneys'),
		'fulltext'    => __('Text only', 'lawyers-attorneys'),
	),
	'field_filter' => 'ftbl',
),

array(
	'name'  => __('Top Bar Text', 'lawyers-attorneys'),
	'desc'  => __('You can place plain text, HTML and shortcodes.', 'lawyers-attorneys'),
	'id'    => 'top-bar-text',
	'type'  => 'textarea',
	'class' => 'ftbl ftbl-menu-text ftbl-text-menu ftbl-social-text ftbl-text-social ftbl-fulltext',
),

array(
	'name'  => __('Top Bar Social Text Lead', 'lawyers-attorneys'),
	'id'    => 'top-bar-social-lead',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Facebook Link', 'lawyers-attorneys'),
	'id'    => 'top-bar-social-fb',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Twitter Link', 'lawyers-attorneys'),
	'id'    => 'top-bar-social-twitter',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar LinkedIn Link', 'lawyers-attorneys'),
	'id'    => 'top-bar-social-linkedin',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Google+ Link', 'lawyers-attorneys'),
	'id'    => 'top-bar-social-gplus',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Flickr Link', 'lawyers-attorneys'),
	'id'    => 'top-bar-social-flickr',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Pinterest Link', 'lawyers-attorneys'),
	'id'    => 'top-bar-social-pinterest',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Dribbble Link', 'lawyers-attorneys'),
	'id'    => 'top-bar-social-dribbble',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Instagram Link', 'lawyers-attorneys'),
	'id'    => 'top-bar-social-instagram',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar YouTube Link', 'lawyers-attorneys'),
	'id'    => 'top-bar-social-youtube',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Vimeo Link', 'lawyers-attorneys'),
	'id'    => 'top-bar-social-vimeo',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'    => __('Header Layout', 'lawyers-attorneys'), // dummy option, do not remove
	'id'      => 'header-layout',
	'type'    => 'select',
	'class'   => 'hidden',
	'options' => array(
		'standard'       => __('Two rows; centered logo on top', 'lawyers-attorneys'),
		'logo-menu'      => __('One row, left logo, menu on the right', 'lawyers-attorneys'),
		'logo-text-menu' => __('Two rows; left-aligned logo on top, right-aligned text and search', 'lawyers-attorneys'),
	),
	'field_filter' => 'fhl',
),

array(
	'name'   => __('Header Text Area', 'lawyers-attorneys'),
	'desc'   => __('You can place text/HTML or any shortcode in this field. The text will appear in the header on the left hand side.', 'lawyers-attorneys'),
	'id'     => 'phone-num-top',
	'type'   => 'textarea',
	'static' => true,
),

array(
	'name' => __('Mobile Header', 'lawyers-attorneys'),
	'type' => 'separator',
),

array(
	'name'   => __('Enable Below', 'lawyers-attorneys'),
	'id'     => 'mobile-top-bar-resolution',
	'type'   => 'range',
	'min'    => 320,
	'max'    => 4000,
	'static' => true,
),

array(
	'name'   => __('Enable Search in Logo Bar', 'lawyers-attorneys'),
	'id'     => 'mobile-search-in-header',
	'type'   => 'toggle',
	'static' => true,
),

array(
	'name'   => __('Mobile Top Bar', 'lawyers-attorneys'),
	'id'     => 'mobile-top-bar',
	'type'   => 'textarea',
	'static' => true,
),

	array(
		'type' => 'end'
	),

);