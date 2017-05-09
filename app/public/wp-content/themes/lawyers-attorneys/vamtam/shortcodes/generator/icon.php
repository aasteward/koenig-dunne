<?php

return array(
	"name" => __("Icon", 'lawyers-attorneys') ,
	"value" => "icon",
	"options" => array(
		array(
			'name' => __('Name', 'lawyers-attorneys') ,
			'id' => 'name',
			'default' => '',
			'type' => 'icons',
		) ,
		array(
			"name" => __("Color (optional)", 'lawyers-attorneys') ,
			"id" => "color",
			"default" => "",
			"prompt" => '',
			"options" => array(
				'accent1' => __('Accent 1', 'lawyers-attorneys'),
				'accent2' => __('Accent 2', 'lawyers-attorneys'),
				'accent3' => __('Accent 3', 'lawyers-attorneys'),
				'accent4' => __('Accent 4', 'lawyers-attorneys'),
				'accent5' => __('Accent 5', 'lawyers-attorneys'),
				'accent6' => __('Accent 6', 'lawyers-attorneys'),
				'accent7' => __('Accent 7', 'lawyers-attorneys'),
				'accent8' => __('Accent 8', 'lawyers-attorneys'),
			) ,
			"type" => "select",
		) ,
		array(
			'name' => __('Size', 'lawyers-attorneys'),
			'id' => 'size',
			'type' => 'range',
			'default' => 16,
			'min' => 8,
			'max' => 100,
		),
		array(
			"name" => __("Style", 'lawyers-attorneys') ,
			"id" => "style",
			"default" => '',
			"prompt" => __('Default', 'lawyers-attorneys'),
			"options" => array(
				'inverted-colors' => __('Invert colors', 'lawyers-attorneys'),
				'box' => __('Box', 'lawyers-attorneys'),
			) ,
			"type" => "select",
		) ,
	)
);