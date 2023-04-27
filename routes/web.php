<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('inicio');
});

Route::get('/calendario', function (){
    return view('calendario');
})->name('calendario');
Route::get('/carreras', function (){
    return view('carreras');
})->name('carreras');


/* 
carreras
*/
Route::get('/logistica', function (){
    return view('logistica');
})->name('logistica');
Route::get('/higiene', function (){
    return view('higiene');
})->name('higiene');
Route::get('/mantenimiento', function (){
    return view('mantenimiento');
})->name('mantenimiento');
Route::get('/administracion', function (){
    return view('administracion');
})->name('administracion');
Route::get('/analisis', function (){
    return view('analisis');
})->name('analisis');


Route::get('saludar/{usuario?}',[UserConstroller::class,'saludar'])->name('saludar');
Route::resource('user',UserController::class);

/*Route::get('/carreras', [MenuController::class, 'carreras']);

Route::get('/carrera/{carrera}', [MenuController::class, 'carrera']);*/



?>


