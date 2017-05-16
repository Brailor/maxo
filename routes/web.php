<?php

/*
$app->get('/', function () use ($app) {
    return $app->make('view')->make('home');
});
*/

		//home
		$app->get('/', ['uses' =>'PageController@index', 'as' => 'index']);

		//pages router
		$app->get('{page}', ['uses' =>'PageController@view', 'as' => 'page']);

		//termekek router
		$app->get('termekek/{termek}', ['uses' => 'PageController@termekek', 'as' => 'termekek']);

		//specifikus termék route
		$app->get('termek/{termek}/{id}', ['uses' => 'PageController@termek', 'as' => 'termek']);


	
