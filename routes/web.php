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

//Parte site geral
Route::get('/',         ['as' => 'site.index', 'uses' => 'HomeController@index']);
Route::get('/login',    ['as' => 'site.login', 'uses' => 'HomeController@login']);


//Parte ADM
Route::get('/adm',      ['as' => 'adm.index', 'uses' => 'AdmController@index']);

//Espacos
Route::get('/adm/espacos/formulario',   ['as' => 'adm.formEspaco', 'uses' => 'AdmController@formEspaco']);
Route::get('/adm/espacos/adicionar',    ['as' => 'adm.adicionaEspaco', 'uses' => 'AdmController@adicionaEspaco']);
Route::get('/adm/espacos/atualizar',    ['as' => 'adm.atualizaEspaco', 'uses' => 'AdmController@atualizarEspaco']);
Route::get('/adm/espacos/listar',       ['as' => 'adm.listaEspaco', 'uses' => 'AdmController@listaEspaco']);
Route::get('/adm/espacos/deletar',      ['as' => 'adm.deletaEspaco', 'uses' => 'AdmController@deletaEspaco']);

//Professores
Route::get('/adm/professores/formulario',   ['as' => 'adm.formProfessor', 'uses' => 'AdmController@formProfessor']);
Route::get('/adm/professores/adicionar',    ['as' => 'adm.adicionaProfessor', 'uses' => 'AdmController@adicionaProfessor']);
Route::get('/adm/professores/atualizar',    ['as' => 'adm.atualizaProfessor', 'uses' => 'AdmController@atualizarProfessor']);
Route::get('/adm/professores/listar',       ['as' => 'adm.listaProfessor', 'uses' => 'AdmController@listaProfessor']);
Route::get('/adm/professores/deletar',      ['as' => 'adm.deletaProfessor', 'uses' => 'AdmController@deletaProfessor']);