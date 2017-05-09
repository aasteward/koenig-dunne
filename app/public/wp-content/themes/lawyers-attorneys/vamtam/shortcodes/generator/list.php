<?php

return array(
	"name" => __("Styled List", 'lawyers-attorneys') ,
	"value" => "list",
	"options" => array(
		array(
			'name' => __('Style', 'lawyers-attorneys') ,
			'id' => 'style',
			'default' => '',
			'type' => 'icons',
		) ,
		array(
			"name" => __("Color", 'lawyers-attorneys') ,
			"id" => "color",
			"default" => "",
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
			"name" => __("Content", 'lawyers-attorneys') ,
			"desc" => __("Please insert a valid HTML unordered list", 'lawyers-attorneys') ,
			"id" => "content",
			"default" => "<ul>
				<li>list item</li>
				<li>another item</li>
			</ul>",
			"type" => "textarea"
		) ,
	)
);