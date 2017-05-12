<?php

/**
 * SOFT URL
 */

$app->get('soft/{id}', 'SoftController@show');

$app->get('soft', 'SoftController@index');

$app->post('soft', 'SoftController@store');

$app->put('soft', 'SoftController@update');

$app->delete('soft/{id}', 'SoftController@destroy');


/**
 * ALCOHOL URL
 */


$app->get('alcohol/{id}', 'AlcoholController@show');

$app->get('alcohol', 'AlcoholController@index');

$app->post('alcohol', 'AlcoholController@store');

$app->put('alcohol', 'AlcoholController@update');

$app->delete('alcohol/{id}', 'AlcoholController@destroy');


/**
 * EXTRA URL
 */



$app->get('extra/{id}', 'ExtraController@show');

$app->get('extra', 'ExtraController@index');

$app->post('extra', 'ExtraController@store');

$app->put('extra', 'ExtraController@update');

$app->delete('extra/{id}', 'ExtraController@destroy');


/**
 * USER URL
 */


$app->get('user/{id}',['middleware' => ['cors']], 'UserController@show');

$app->get('user',['middleware' => ['cors']], 'UserController@index');

$app->post('login',['middleware' => ['cors']], 'UserController@login');

$app->post('user',['middleware' => ['cors']], 'UserController@store');

$app->put('user',['middleware' => ['cors']], 'UserController@update');

$app->delete('user/{id}',['middleware' => ['cors']], 'UserController@destroy');
