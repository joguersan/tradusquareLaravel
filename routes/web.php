<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'InicioController@index')->name('inicio');
Route::post('/noticias/store', 'NoticiaController@store')->name('noticia.store');
Route::patch('/noticias/{noticia}/update', 'NoticiaController@update')->name('noticia.update');
Route::patch('/comentarios/{comentario}/update', 'ComentarioController@update')->name('comentario.update');
Route::patch('/fichas/{ficha}/update', 'FichaController@update')->name('ficha.update');
Route::post('/noticias/{noticia}', 'NoticiaController@destroy')->name('noticia.destroy');
Route::post('/noticias/{noticia}', 'NoticiaController@show')->name('noticia.show');
Route::get('/proyecto/{ficha}', 'FichaController@show')->name('ficha.show');
Route::get('/proyectos', 'FichaController@index')->name('proyectos');
Route::get('/proyectos/{id_plat}', 'FichaController@listaPlataforma')->name('proyectoplataforma');
Route::resources([
  'noticias' => 'NoticiaController',
  'plataformas' => 'PlataformaController',
  'fichas' => 'FichaController',
  'grupos' => 'GrupoController',
  'comentarios' => 'ComentarioController',
  'entradas' => 'EntradaTablonController',
  'usuarios' => 'UsuarioController',
  'tablon-de-misiones' => 'EntradaTablonController'
]);
Route::view('/informacion', 'informacion')->name('informacion');
Route::view('/amala', 'amala')->name('amala');
