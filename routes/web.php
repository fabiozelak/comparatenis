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

use App\Http\Controllers\ComparaController;

Route::get('/', [ComparaController::class, 'index']);
Route::get('/tenis/adiciona', [ComparaController::class, 'adiciona']);
Route::get('/tenis/edita', [ComparaController::class, 'edita']);
Route::get('/comparar', [ComparaController::class, 'comparar']);
Route::post('/comparar', [ComparaController::class, 'gravar_tenis']);

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/review', function () {
    return view('review');
});
Route::get('/loravel', function () {
    return view('loravel');
});
