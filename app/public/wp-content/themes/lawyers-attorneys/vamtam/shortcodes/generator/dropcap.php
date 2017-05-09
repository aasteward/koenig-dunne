<?php
return array(
	'name'    => __( 'Drop Cap', 'lawyers-attorneys' ) ,
	'value'   => 'dropcap',
	'options' => array(
		array(
			'name'    => __( 'Type', 'lawyers-attorneys' ) ,
			'id'      => 'type',
			'default' => '1',
			'type'    => 'select',
			'options' => array(
				'1' => __( 'Type 1', 'lawyers-attorneys' ),
				'2' => __( 'Type 2', 'lawyers-attorneys' ),
			),
		) ,
		array(
			'name'    => __( 'Letter', 'lawyers-attorneys' ) ,
			'id'      => 'letter',
			'default' => '',
			'type'    => 'text',
		) ,
		array(
			'name'    => __( 'Text', 'lawyers-attorneys' ) ,
			'id'      => 'text',
			'default' => '',
			'type'    => 'text',
		) ,
	) ,
);
