<?php
/**
 * Vamtam Post Options
 *
 * @package wpv
 * @subpackage lawyers-attorneys
 */

return array(

array(
	'name' => __('General', 'lawyers-attorneys'),
	'type' => 'separator',
),

array(
	"name" => __("Cite", 'lawyers-attorneys') ,
	"id" => "testimonial-author",
	"default" => "",
	"type" => "text",
) ,

array(
	"name" => __("Link", 'lawyers-attorneys') ,
	"id" => "testimonial-link",
	"default" => "",
	"type" => "text",
) ,

);
