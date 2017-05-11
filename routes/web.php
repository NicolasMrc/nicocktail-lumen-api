<?php

/**
 * SOFT URL
 */

$app->get('api/soft/{id}', 'SoftController@show');

$app->get('api/soft', 'SoftController@index');

$app->post('api/soft', 'SoftController@store');

$app->put('api/soft', 'SoftController@update');

$app->delete('api/soft/{id}', 'SoftController@destroy');


/**
 * ALCOHOL URL
 */


$app->get('api/alcohol/{id}', 'AlcoholController@show');

$app->get('api/alcohol', 'AlcoholController@index');

$app->post('api/alcohol', 'AlcoholController@store');

$app->put('api/alcohol', 'AlcoholController@update');

$app->delete('api/alcohol/{id}', 'AlcoholController@destroy');


/**
 * EXTRA URL
 */



$app->get('api/extra/{id}', 'ExtraController@show');

$app->get('api/extra', 'ExtraController@index');

$app->post('api/extra', 'ExtraController@store');

$app->put('api/extra', 'ExtraController@update');

$app->delete('api/extra/{id}', 'ExtraController@destroy');


/**
 * USER URL
 */


$app->get('api/user/{id}', 'UserController@show');

$app->get('api/user', 'UserController@index');

$app->post('api/login', 'UserController@login');

$app->post('api/user', 'UserController@store');

$app->put('api/user', 'UserController@update');

$app->delete('api/user/{id}', 'UserController@destroy');
