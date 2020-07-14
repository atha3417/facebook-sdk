<?php

session_start();
require __DIR__.'/vendor/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '3026412647475323',
	'app_secret' => '81f0159b8b6e244b7a3c5202ab84aa48',
	'default_graph_version' => 'v2.2'
]);

$helper = $fb->getRedirectLoginHelper();
