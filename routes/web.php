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
Route::post('/adicionar', [ComparaController::class, 'gravar_tenis']);
Route::post('/comparar', [ComparaController::class, 'comparar_tenis']);
Route::get('/pesquisa', [ComparaController::class, 'pesquisa']);

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/review', function () {
    return view('review');
});
Route::get('/loravel', function () {
    return view('loravel');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
