<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

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

Route::get('sitemap', function () {
    SitemapGenerator::create('http://localhost/tradusquare/public/')->writeToFile('sitemap.xml');
    return 'Se ha creado el sitemap';
});
Route::get('/', 'InicioController@index')->name('inicio');
Route::post('/noticias/store', 'NoticiaController@store')->name('noticia.store');
Route::patch('/noticias/{noticia}/update', 'NoticiaController@update')->name('noticia.update');
Route::post('/comentarios/create/{noticia}', 'ComentarioController@store')->name('comentario.store');
Route::patch('/fichas/{ficha}/update', 'FichaController@update')->name('ficha.update');
Route::post('/noticias/{noticia}', 'NoticiaController@destroy')->name('noticia.destroy');
Route::patch('/tablon-de-misiones/{post}/delete', 'EntradaTablonController@delete')->name('tablon-de-misiones.delete');
Route::patch('/grupos/{grupo}/delete', 'GrupoController@delete')->name('grupos.delete');
Route::patch('/comentarios/{comentario}/delete', 'ComentarioController@delete')->name('comentarios.delete');
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
    'usuarios' => 'UsuarioController',
    'tablon-de-misiones' => 'EntradaTablonController',
]);
Route::view('/informacion', 'informacion')->name('informacion');
Route::view('/amala', 'amala')->name('amala');
