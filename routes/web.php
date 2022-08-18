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

Route::get('/', function () {
    return view('nosotros.nosotros');
});
Route::get('/conocenos', function () {
    return view('nosotros.nosotros');
});
Route::get('/conocenos/mensaje', function () {
    return view('nosotros.mensaje');
});
Route::get('/conocenos/mision', function () {
    return view('nosotros.mision');
});
Route::get('/conocenos/vision', function () {
    return view('nosotros.vision');
});
Route::get('/conocenos/valores', function () {
    return view('nosotros.valores');
});
Route::get('/conocenos/calidad', function () {
    return view('nosotros.calidad');
});
Route::get('/conocenos/organigrama', function () {
    return view('nosotros.organigrama');
});
Route::get('/conocenos/directorio', function () {
    return view('nosotros.directorio');
});
Route::get('/conocenos/avisos', function () {
    return view('nosotros.avisos');
});
Route::get('/conocenos/normateca', function () {
    return view('nosotros.normateca');
});

