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

Route::get('nota', function(){
    return 'Aqui estan las notas';
});

Route::get('nota/{id}/visualizar', function($id){
    return 'Aqui se visualizaria el detalle de una nota con id:' .$id;
});

Route::get('nota/crear', function(){
    return 'Aqui se crearia una nota';
});

Route::get('nota/listar', function(){
    return [
        'Nota' =>[
            'tarea1',
            'tarea2',
            'tarea3',
            'tarea4',
        ]
    ];
});

Route::get('nota/editar', function(){
    return 'Aqui se editaria la nota';
});
