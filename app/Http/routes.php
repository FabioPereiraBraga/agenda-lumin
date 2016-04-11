<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/



$app->get('/key', function () use ($app) {
    echo str_random(32);
});
$app->get('/', ['uses'=>'AgendaController@index', 'as'=>'agenda-contados']);

$app->get('/consulta/{letra}',
    [
        'uses'=>'AgendaController@consulta',
        'as'=>'agenda-letra']);

