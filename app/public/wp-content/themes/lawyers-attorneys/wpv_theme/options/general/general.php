<?php

/**
 * Theme options / General / General Settings
 *
 * @package wpv
 * @subpackage lawyers-attorneys
 */

return array(
array(
	'name' => __('General Settings', 'lawyers-attorneys'),
	'type' => 'start'
),

array(
	'name' => __('Header Logo Type', 'lawyers-attorneys'),
	'id'   => 'header-logo-type',
	'type' => 'select',
	'options' => array(
		'image'      => __( 'Image', 'lawyers-attorneys' ),
		'site-title' => __( 'Site Title', 'lawyers-attorneys' ),
	),
	'static'       => true,
	'field_filter' => 'fblogo',
),

array(
	'name'   => __('Custom Logo Picture', 'lawyers-attorneys'),
	'desc'   => __('Please Put a logo which exactly twice the width and height of the space that you want the logo to occupy. The real image size is used for retina displays.', 'lawyers-attorneys'),
	'id'     => 'custom-header-logo',
	'type'   => 'upload',
	'static' => true,
	'class'  => 'fblogo fblogo-image',
),

array(
	'name'   => __('Alternative Logo', 'lawyers-attorneys'),
	'desc'   => __('This logo is used when you are using the transparent sticky header. It must be the same size as the main logo.', 'lawyers-attorneys'),
	'id'     => 'custom-header-logo-transparent',
	'type'   => 'upload',
	'static' => true,
	'class'  => 'fblogo fblogo-image',
),

array(
	'name'   => __('First Left Name', 'lawyers-attorneys'),
	'id'     => 'header-name-left-top',
	'type'   => 'text',
	'static' => true,
	'class'  => 'fblogo fblogo-names',
),

array(
	'name'   => __('Last Left Name', 'lawyers-attorneys'),
	'id'     => 'header-name-left-bottom',
	'type'   => 'text',
	'static' => true,
	'class'  => 'fblogo fblogo-names',
),

array(
	'name'   => __('First Right Name', 'lawyers-attorneys'),
	'id'     => 'header-name-right-top',
	'type'   => 'text',
	'static' => true,
	'class'  => 'fblogo fblogo-names',
),

array(
	'name'   => __('Last Right Name', 'lawyers-attorneys'),
	'id'     => 'header-name-right-bottom',
	'type'   => 'text',
	'static' => true,
	'class'  => 'fblogo fblogo-names',
),

array(
	'name'   => __('Splash Screen Logo', 'lawyers-attorneys'),
	'id'     => 'splash-screen-logo',
	'type'   => 'upload',
	'static' => true,
),

array(
	'name'   => __('Google Maps API Key', 'lawyers-attorneys'),
	'desc'   => __("This option is required since June 22, 2016. Paste your Google Maps API Key here. If you don't have one, please sign up for a <a href='https://developers.google.com/maps/documentation/javascript/get-api-key'>Google Maps API key</a>.", 'lawyers-attorneys'),
	'id'     => 'gmap_api_key',
	'type'   => 'text',
	'static' => true,
),

array(
	'name'   => __('Google Analytics Key', 'lawyers-attorneys'),
	'desc'   => __("Paste your key here. It should be something like UA-XXXXX-X. We're using the faster asynchronous loader, so you don't need to worry about speed.", 'lawyers-attorneys'),
	'id'     => 'analytics_key',
	'type'   => 'text',
	'static' => true,
),

array(
	'name' => __('"Scroll to Top" Button', 'lawyers-attorneys'),
	'desc' => __('It is found in the bottom right side. It is sole purpose is help the user scroll a long page quickly to the top.', 'lawyers-attorneys'),
	'id'   => 'show_scroll_to_top',
	'type' => 'toggle',
),

array(
	'name'    => __('Feedback Button', 'lawyers-attorneys'),
	'desc'    => __('It is found on the right hand side of your website. You can chose from a "link" or a slide out form(widget area).The slide out form is configured as a standard widget. You can use the same form you are using for your "contact us" page.', 'lawyers-attorneys'),
	'id'      => 'feedback-type',
	'type'    => 'select',
	'options' => array(
		'none'    => __('None', 'lawyers-attorneys'),
		'link'    => __('Link', 'lawyers-attorneys'),
		'sidebar' => __('Slide out widget area', 'lawyers-attorneys'),
	),
),

array(
	'name' => __('Feedback Button Link', 'lawyers-attorneys'),
	'desc' => __('If you have chosen a "link" in the option above, place the link of the button here, usually to your contact us page.', 'lawyers-attorneys'),
	'id'   => 'feedback-link',
	'type' => 'text',
),

array(
	'name'   => __('Share Icons', 'lawyers-attorneys'),
	'desc'   => __('Select the social media you want enabled and for which parts of the website', 'lawyers-attorneys'),
	'type'   => 'social',
	'static' => true,
),

array(
	'name'   => __('Custom JavaScript', 'lawyers-attorneys'),
	'desc'   => __('If the hundreds of options in the Theme Options Panel are not enough and you need customisation that is outside of the scope of the Theme Option Panel please place your javascript in this field. The contents of this field are placed near the <strong>&lt;/body&gt;</strong> tag, which improves the load times of the page.', 'lawyers-attorneys'),
	'id'     => 'custom_js',
	'type'   => 'textarea',
	'rows'   => 15,
	'static' => true,
),

array(
	'name'  => __('Custom CSS', 'lawyers-attorneys'),
	'desc'  => __('If the hundreds of options in the Theme Options Panel are not enough and you need customisation that is outside of the scope of the Theme Options Panel please place your CSS in this field.', 'lawyers-attorneys'),
	'id'    => 'custom_css',
	'type'  => 'textarea',
	'rows'  => 15,
	'class' => 'top-desc',
),

array(
	'type' => 'end'
)
);