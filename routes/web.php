<?php
use Spatie\Sitemap\SitemapGenerator;
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

Route::get('sitemap', function(){
  SitemapGenerator::create('http://localhost/tradusquare/public/')->writeToFile('sitemap.xml');
  return 'Se ha creado el sitemap';
});
Route::get('/', 'InicioController@index')->name('inicio');
Route::post('/noticias/store', 'NoticiaController@store')->name('noticia.store');
Route::patch('/noticias/{noticia}/update', 'NoticiaController@update')->name('noticia.update');
Route::post('/comentarios/create/{noticia}', 'ComentarioController@store')->name('comentario.store');
Route::patch('/fichas/{ficha}/update', 'FichaController@update')->name('ficha.update');
Route::post('/noticias/{noticia}', 'NoticiaController@destroy')->name('noticia.destroy');
Route::post('/noticias/{noticia}', 'NoticiaController@show')->name('noticia.show');//get???
Route::get('/proyecto/{ficha}', 'FichaController@show')->name('ficha.show');
Route::get('/proyectos', 'FichaController@index')->name('proyectos');
Route::get('/proyectos/{id_plat}', 'FichaController@listaPlataforma')->name('proyectoplataforma');


Route::resources([
    'noticias' => 'NoticiaController',
    'plataformas' => 'PlataformaController',
    'fichas' => 'FichaController',
    'grupos' => 'GrupoController',
    'comentarios' => 'ComentarioController',
    'usuarios' => 'UserController',
    'tablon-de-misiones' => 'EntradaTablonController'
]);
Route::view('/informacion', 'informacion')->name('informacion');
Route::view('/amala', 'amala')->name('amala');


//login ,registro, logout y otras cosas que faltarán

//vistas
Route::view('/iniciar-sesion','login')->name('iniciar-sesion');
Route::view('/registro','registro')->name('registro');
//
//Route::post('register','UsuarioController@store');
//Route::post('login','UsuarioController@login')->name('login');
Route::post('register','AuthController@registro')->name('register');
Route::post('login','AuthController@login')->name('login');
Route::post('logout','AuthController@logout')->name('logout');
