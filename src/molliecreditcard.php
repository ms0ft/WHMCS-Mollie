<?php

require_once __DIR__ . '/mollie/mollie.php';

function molliecreditcard_config() {
	$config = mollie_config();

	$config = array_merge($config, array(
		'FriendlyName' => array(
			'Type' => 'System',
			'Value'=> 'Mollie Creditcard'
		)
	));

	return $config;
}

function molliecreditcard_link($params) {
	return mollie_link($params, Mollie_API_Object_Method::CREDITCARD);
}
