<?php


/**
 * BUNDLE URL
 */

$app->get('bundle/{id}', 'BundleController@show');

$app->get('bundle', 'BundleController@index');

$app->post('bundle', 'BundleController@store');

$app->put('bundle', 'BundleController@update');

$app->delete('bundle/{id}', 'BundleController@destroy');


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


$app->get('user/{id}', 'UserController@show');

$app->get('user', 'UserController@index');

$app->post('login', 'UserController@login');

$app->post('user', 'UserController@store');

$app->put('user', 'UserController@update');

$app->delete('user/{id}', 'UserController@destroy');
