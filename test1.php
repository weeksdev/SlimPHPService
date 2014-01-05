<?php
	require 'Slim/Slim/Slim.php';
	\Slim\Slim::registerAutoloader();
	$app = new \Slim\Slim();

	$app->get('/hello/:name', function ($name) {
    	echo "Hello, $name";
	});
	
	$app->get('/phone/:firstname/:lastname', function($firstname, $lastname){
		echo 'Oh No,'.$firstname.$lastname;
	});
	$app->run();
?>