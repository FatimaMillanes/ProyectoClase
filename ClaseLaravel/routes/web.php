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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/', function (){
    return 'Hola mundo';
});
*/

/*
Route::get('/', function (){
    return [
        'Clases' =>[
            'Instalacion de Laravel',
            'Rutas Basicas de Laravel',
            'Controllers de Laravel',
        ]
    ];
});
*/

Route::get('clases', function(){
    return 'Aqui se listarian todas las clases';
});

Route::get('clases/crear', function(){
    return 'Aqui se crean todas las clases';
});

Route::get('clases/{id}/editar', function($id){
    return 'Aqui se edita la case con id:' .$id;
});
