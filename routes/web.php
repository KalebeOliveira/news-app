<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'noticiasController@index');
Route::get('nova_noticia', 'noticiasController@create');
Route::post('salvar_noticia', 'noticiasController@store');
Route::get('gerir_noticias', 'noticiasController@apresentarTabelaGestao');

// Visibilidade
Route::get('tornar_visivel/{id_noticia}', 'noticiasController@tornarVisivel');
Route::get('tornar_invisivel/{id_noticia}', 'noticiasController@tornarInvisivel');

// Apagar noticias
Route::get('apagar_noticia/{id_noticia}', 'noticiasController@destroy');


//Editar | Atualizar
Route::get('editar_noticia/{id_noticia}', 'noticiasController@edit');
Route::post('atualizar_noticia/{id_noticia}', 'noticiasController@update');
