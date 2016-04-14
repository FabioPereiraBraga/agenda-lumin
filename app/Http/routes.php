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

$app->post('/contato',
    [
        'uses'=>'PessoaController@store',
        'as'=>'pessoa.store']);

$app->put('/contato/{id}',
    [
        'uses'=>'PessoaController@update',
        'as'=>'pessoa.update']);


$app->get('/contato/novo',
    [
        'uses'=>'PessoaController@create',
        'as'=>'pessoa.create']);


$app->get('/contato/{id}',
    [
        'uses'=>'PessoaController@edit',
        'as'=>'pessoa.edit']);


$app->get('/key', function () use ($app) {
    echo str_random(32);
});


$app->get('/', ['uses'=>'AgendaController@index', 'as'=>'agenda-contados']);

$app->get('/consulta/{letra}',
    [
        'uses'=>'AgendaController@consulta',
        'as'=>'agenda-letra']);

$app->get('/busca',
    [
        'uses'=>'AgendaController@buscar',
        'as'=>'agenda.busca']);

$app->get('/contato/apagar/{id}',[
    'uses'=>'PessoaController@delete',
    'as'=>'pessoa-delete'
    
]);

$app->get('/telefone/apagar/{id}',[
    'uses'=>'TelefoneController@delete',
    'as'=>'telefone.delete'

]);
$app->get('/telefone/{id}/apagar',[
   'as'=>'telefone.destroy',
    'uses'=>'TelefoneController@delete'
]);

$app->delete('/telefone/{id}',[
   'as'=>'telefone.destroy',
    'uses'=>'TelefoneController@destroy'
]);

$app->delete('/contato/{id}',[
   'as'=>'pessoa.destroy',
    'uses'=>'PessoaController@destroy'
]);




