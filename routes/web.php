<?php

//Parte site geral
Route::get('/',         ['as' => 'site.index', 'uses' => 'HomeController@index']);
Route::get('/login',    ['as' => 'site.login', 'uses' => 'HomeController@login']);


//Parte ADM
Route::get('/adm',      ['as' => 'adm.index', 'uses' => 'AdmController@index']);

//Espacos
Route::get('/adm/espacos/formulario',                   ['as' => 'adm.formEspaco', 'uses'       => 'AdmEspacoController@formulario']);
Route::get('/adm/espacos/adicionar',                    ['as' => 'adm.adicionaEspaco', 'uses'   => 'AdmEspacoController@adicionar']);
Route::get('/adm/espacos/atualizar',                    ['as' => 'adm.atualizaEspaco', 'uses'   => 'AdmEspacoController@atualizar']);
Route::get('/adm/espacos/listar',                       ['as' => 'adm.listaEspaco', 'uses'      => 'AdmEspacoController@listar']);
Route::get('/adm/espacos/deletar',                      ['as' => 'adm.deletaEspaco', 'uses'     => 'AdmEspacoController@deletar']);

//Professores
Route::get('/adm/professores/formulario',               ['as' => 'adm.formProfessor', 'uses'        => 'AdmProfessorController@formulario']);
Route::get('/adm/professores/adicionar',                ['as' => 'adm.adicionaProfessor', 'uses'    => 'AdmProfessorController@adicionar']);
Route::get('/adm/professores/atualizar',                ['as' => 'adm.atualizaProfessor', 'uses'    => 'AdmProfessorController@atualizar']);
Route::get('/adm/professores/listar',                   ['as' => 'adm.listaProfessor', 'uses'       => 'AdmProfessorController@listar']);
Route::get('/adm/professores/deletar',                  ['as' => 'adm.deletaProfessor', 'uses'      => 'AdmProfessorController@deletar']);

//Servidores
Route::get('/adm/servidores/formulario',                ['as' => 'adm.formServidor', 'uses'      => 'AdmServidorController@formulario']);
Route::get('/adm/servidores/adicionar',                 ['as' => 'adm.adicionaServidor', 'uses'  => 'AdmServidorController@adicionar']);
Route::get('/adm/servidores/atualizar',                 ['as' => 'adm.atualizaServidor', 'uses'  => 'AdmServidorController@atualizar']);
Route::get('/adm/servidores/listar',                    ['as' => 'adm.listaServidor', 'uses'     => 'AdmServidorController@listar']);
Route::get('/adm/servidores/deletar',                   ['as' => 'adm.deletaServidor', 'uses'    => 'AdmServidorController@deletar']);

//Disciplina
Route::get('/adm/disciplinas/formularioAdicionar',      ['as' => 'adm.formAddDisciplina', 'uses'    => 'AdmDisciplinaController@formularioAdicionar']);
Route::get('/adm/disciplinas/formularioAtualizar/{id}', ['as' => 'adm.formAttDisciplina', 'uses'    => 'AdmDisciplinaController@formularioAtualizar']);
Route::post('/adm/disciplinas/adicionar',               ['as' => 'adm.adicionaDisciplina', 'uses'   => 'AdmDisciplinaController@adicionar']);
Route::post('/adm/disciplinas/atualizar/{id}',          ['as' => 'adm.atualizaDisciplina', 'uses'   => 'AdmDisciplinaController@atualizar']);
Route::get('/adm/disciplinas/listar',                   ['as' => 'adm.listaDisciplina', 'uses'      => 'AdmDisciplinaController@listar']);
Route::get('/adm/disciplinas/deletar/{id}',             ['as' => 'adm.deletaDisciplina', 'uses'     => 'AdmDisciplinaController@deletar']);