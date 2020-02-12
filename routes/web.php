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

/*Route::get('/', function () {
    return view('welcome');
});*/


Auth::routes();

Route::resource('/respuestas','PreguntaUsuarioController');


Route::get('/', 'HomeController@index'); 

#Ruta para acciones
Route::resource('acciones','AccionController');

#rutas para la encuesta 1
Route::get('menu1','HomeController@indexEncuesta1');

Route::get('seccion1','HomeController@seccion1');
Route::post('respuestas/encuesta1','PreguntaUsuarioController@store');

Route::get('seccion2','HomeController@seccion2');

#rutas para la encuesta 2
Route::get('menu2','HomeController@indexEncuesta2');
Route::get('parte1','HomeController@parte1');
Route::get('parte2','HomeController@parte2');
Route::get('parte3','HomeController@parte3');
Route::get('parte4','HomeController@parte4');
Route::get('parte5','HomeController@parte5');
Route::get('parte6','HomeController@parte6');
Route::get('parte7','HomeController@parte7');
Route::get('parte8','HomeController@parte8');
Route::post('respuestas/encuesta2','PreguntaUsuarioController@storeEncuesta2');
Route::post('respuestas/saveEncuesta2','PreguntaUsuarioController@saveEncuesta2');

#rutas para la encuesta 3
Route::get('menu3','HomeController@indexEncuesta3');
Route::get('p1','HomeController@p1');
Route::get('p2','HomeController@p2');
Route::get('p3','HomeController@p3');
Route::get('p4','HomeController@p4');
Route::get('p5','HomeController@p5');
Route::get('p6','HomeController@p6');
Route::get('p7','HomeController@p7');
Route::get('p8','HomeController@p8');
Route::get('p9','HomeController@p9');
Route::get('p10','HomeController@p10');
Route::get('p11','HomeController@p11');
Route::get('p12','HomeController@p12');
Route::get('p13','HomeController@p13');
Route::get('p14','HomeController@p14');
Route::post('respuestas/encuesta3','PreguntaUsuarioController@storeEncuesta3');
Route::post('respuestas/saveEncuesta3','PreguntaUsuarioController@saveEncuesta3');