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

Route::get('/', 'HomeController@index'); 

Route::get('seccion1',function(){
    return view('Encuesta1.Seccion1');
});
Route::get('seccion2',function(){
    return view('Encuesta1.Seccion2');
});
Route::get('seccion3',function(){
    return view('Encuesta1.Seccion3');
});
Route::get('seccion4',function(){
    return view('Encuesta1.Seccion4');
});


Route::get('/index',function(){
    return view('Encuesta2.menu');
});
Route::get('/parte1',function(){
    return view('Encuesta2.Parte1');
});
Route::get('/parte2',function(){
    return view('Encuesta2.Parte2');
});
Route::get('/parte3',function(){
    return view('Encuesta2.Parte3');
});
Route::get('/parte4',function(){
    return view('Encuesta2.Parte4');
});
Route::get('/parte5',function(){
    return view('Encuesta2.Parte5');
});
Route::get('/parte6',function(){
    return view('Encuesta2.Parte6');
});
Route::get('/parte7',function(){
    return view('Encuesta2.Parte7');
});
Route::get('/parte8',function(){
    return view('Encuesta2.Parte8');
});


