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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', 'Hello@hello');


Route::get('/formulario', function () {
    return view('formulario');
});
// //hola, es el que escribimos en la url, para hacer referencia al archivo hello.php
// Route::get('/hola', function () { //aca con el hola seria la ruta donde nos va ubicar el archivo hello
//     return view('hello', ["name"=>"Quiej"]); //este archivo hello es llamdo con el hola, que es quien hace la referencia.
// });
