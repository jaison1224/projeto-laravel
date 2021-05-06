<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCategoria;
use App\Http\Controllers\ControladorProduto;
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

Route::get('/index', function () {
    return view('index');
})->middleware(['auth'])->name('index');

Route::get('/produto', [ControladorProduto::class, 'index'], function () {
    return view('produto');
})->middleware(['auth'])->name('produto');
Route::get('/categoria', [ControladorCategoria::class, 'index'], function () {
    return view('categoria');
})->middleware(['auth'])->name('categoria');


require __DIR__.'/auth.php';
