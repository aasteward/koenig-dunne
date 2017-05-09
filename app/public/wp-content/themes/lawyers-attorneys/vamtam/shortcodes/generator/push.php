<?php
return array(
	'name' => __('Vertical Blank Space', 'lawyers-attorneys') ,
	'value' => 'push',
	'options' => array(
		array(
			"name" => __("Height", 'lawyers-attorneys') ,
			"id" => "h",
			"default" => 30,
			'min' => -200,
			'max' => 200,
			"type" => "range",
		) ,
	) ,
);
