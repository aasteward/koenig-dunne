<?php

return array(
	"name" => __("Highlight", 'lawyers-attorneys') ,
	"value" => "highlight",
	"options" => array(
		array(
			"name" => __("Type", 'lawyers-attorneys') ,
			"id" => "type",
			"default" => '',
			"options" => array(
				"light" => __("light", 'lawyers-attorneys') ,
				"dark" => __("dark", 'lawyers-attorneys') ,
			) ,
			"type" => "select",
		) ,
		array(
			"name" => __("Content", 'lawyers-attorneys') ,
			"id" => "content",
			"default" => "",
			"type" => "textarea"
		) ,
	)
);