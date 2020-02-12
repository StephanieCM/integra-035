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

#ADMINISTRACION DE ENCUESTAS
Route::get('admi', 'AdmiController@index');
Route::get('gestion', 'AdmiController@editarPreguntas');
Route::post('busqueda', 'AdmiController@buscarPreguntas');

//Route::resource('/categoria', 'CategoriaController');
Route::post('/categoria', 'CategoriaController@store');
Route::post('/categoria/update', 'CategoriaController@update');
Route::post('/categoria/destroy', 'CategoriaController@destroy');
Route::post('/dominio', 'DominioController@store');
Route::post('/dominio/update', 'DominioController@update');
Route::post('/dominio/destroy', 'DominioController@destroy');
Route::post('/dimension', 'DimensionController@store');
Route::post('/dimension/update', 'DimensionController@update');
Route::post('/dimension/destroy', 'DimencionController@destroy');

Route::post('/pregunta/add', 'PreguntaController@store');
Route::post('/editarPregunta','PreguntaController@index');
Route::post('/pregunta/update','PreguntaController@update');
Route::post('/pregunta/delete','PreguntaController@destroy');
Route::resource('/respuestas','PreguntaUsuarioController');

Route::get('/periodos','PeriodoController@index');
Route::post('/periodos/add','PeriodoController@store');
Route::post('/periodos/update','PeriodoController@update');

#rutas para la encuesta 1
Route::get('seccion1','PreguntaController@Seccion1');

Route::get('seccion2',function(){
    return view('Encuesta1.Seccion2');
});
Route::get('seccion3',function(){
    return view('Encuesta1.Seccion3');
});
Route::get('seccion4',function(){
    return view('Encuesta1.Seccion4');
});

#rutas para la encuesta 2
use App\Periodo;
Route::get('/index',function(){
    $fecha = Date('Y-m-d');
    $activo = false;
    $periodo = Periodo::whereMonth('fechaInicio','=',Date('m'))->where('estatus',true)->get();
    if ($periodo != null){
        for($i=0;$i<count($periodo);$i++){
            if (strtotime($fecha) >= strtotime($periodo[$i]->fechaInicio) && strtotime($fecha) <= strtotime($periodo[$i]->fechaFin) ){
                $activo = true;
            break;
            }
        }
    }
    
    return view('Encuesta2.menu',compact('activo'));
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

#rutas para la encuesta 3
Route::get('menu', function () {
    $fecha = Date('Y-m-d');
    $activo = false;
    $periodo = Periodo::whereMonth('fechaInicio','=',Date('m'))->where('estatus',true)->get();
    if ($periodo != null){
        for($i=0;$i<count($periodo);$i++){
            if (strtotime($fecha) >= strtotime($periodo[$i]->fechaInicio) && strtotime($fecha) <= strtotime($periodo[$i]->fechaFin) ){
                $activo = true;
            break;
            }
        }
    }
    return view('Encuesta3.menu' ,compact('activo'));
});

Route::get('p1', function () {
    return view('Encuesta3.parte1');
});
Route::get('p2', function () {
    return view('Encuesta3.parte2');
});
Route::get('p3', function () {
    return view('Encuesta3.parte3');
});
Route::get('p4', function () {
    return view('Encuesta3.parte4');
});
Route::get('p5', function () {
    return view('Encuesta3.parte5');
});
Route::get('p6', function () {
    return view('Encuesta3.parte6');
});
Route::get('p7', function () {
    return view('Encuesta3.parte7');
});
Route::get('p8', function () {
    return view('Encuesta3.parte8');
});
Route::get('p9', function () {
    return view('Encuesta3.parte9');
});
Route::get('p10', function () {
    return view('Encuesta3.parte10');
});
Route::get('p11', function () {
    return view('Encuesta3.parte11');
});
Route::get('p12', function () {
    return view('Encuesta3.parte12');
});
Route::get('p13', function () {
    return view('Encuesta3.parte13');
});
Route::get('p14', function () {
    return view('Encuesta3.parte14');
});


