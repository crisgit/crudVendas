<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('home');
});*/

Route::get('/', ['as'=>'site.home', 'uses'=>'Site\HomeController@index']);

Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);

Route::post('/contato', ['uses'=>'ContatoController@criar']);

Route::put('/contato', ['uses'=>'ContatoController@editar']);

Route::get('/admin/bolsas', ['as'=>'admin.bolsas', 'uses'=>'Admin\BolsaController@index']);

Route::get('/admin/bolsas/adicionar', ['as'=>'admin.bolsas.adicionar', 'uses'=>'Admin\BolsaController@adicionar']);

Route::post('/admin/bolsas/salvar', ['as'=>'admin.bolsas.salvar', 'uses'=>'Admin\BolsaController@salvar']);

Route::get('/admin/bolsas/editar/{id}', ['as'=>'admin.bolsas.editar', 'uses'=>'Admin\BolsaController@editar']);

Route::put('/admin/bolsas/atualizar/{id}', ['as'=>'admin.bolsas.atualizar', 'uses'=>'Admin\BolsaController@atualizar']);

Route::get('/admin/bolsas/deletar/{id}', ['as'=>'admin.bolsas.deletar', 'uses'=>'Admin\BolsaController@deletar']);

/*Route::post('/contato', function() {
    dd($_POST);
    return "Contato POST";
});

Route::put('/contato', function() {
    dd($_POST);
    return "Contato PUT";
});*/

