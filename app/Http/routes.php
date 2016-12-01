<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/////////Ruta de logeo
Route::post('/logear','logearcontroller@logear');
Route::post('/cerrarsesion','logearcontroller@cerrarsesion');

//////////Reacciones
Route::get('/reacciones','PrincipalIndex@reacciones');
Route::post('/subirreacciones','reaccionescontroller@subirreacciones');
Route::post('/mostrarreaccioes','reaccionescontroller@mostrarreacciones');
Route::post('/actualizarreaccionsinimagen','reaccionescontroller@actualizarreaccionsinimagen');
Route::post('/actualizarreaccionconimagen','reaccionescontroller@actualizarreaccionconimagen');


////////////Comentarios
Route::get('/comments','PrincipalIndex@comentarios');
Route::get('/getplaces','placescontroller@getplaces');
Route::get('/getopinions','placescontroller@getopinions');
Route::post('/deleteopinion','placescontroller@deleteopinion');

///////MENU
Route::get('/menu','PrincipalIndex@menu');



////////PRINCIPAL
Route::get('/','PrincipalIndex@verIndex2');


///////////PLACES
Route::get('/places','placescontroller@places');
Route::post('/subirplaces','placescontroller@subirplaces');


