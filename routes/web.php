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

Route::get('/', [ControladorProduto::class, 'inicio'],function () {
    return view('inicio');
});

Route::get('/index', function () {
    return view('index');
})->middleware(['auth'])->name('index');
//Rotas de produto
Route::get('/produto', [ControladorProduto::class, 'index'], function () {
    return view('produto');
})->middleware(['auth'])->name('produto');
Route::get('/novoproduto', [ControladorProduto::class, 'create']);
Route::get('/criar/produto', [ControladorProduto::class, 'store']);
Route::get('/produto/editar/{id}', [ControladorProduto::class, 'edit']);
Route::get('/update/produto/{id}', [ControladorProduto::class, 'update']);
Route::get('/produto/apagar/{id}', [ControladorProduto::class, 'destroy']);

//Rotas de categoria
Route::get('/categoria', [ControladorCategoria::class, 'index'], function () {
    return view('categoria');
})->middleware(['auth'])->name('categoria');
Route::get('/novacategoria', [ControladorCategoria::class, 'create']);
Route::get('/criar/categoria', [ControladorCategoria::class, 'store']);
Route::get('/categoria/editar/{id}', [ControladorCategoria::class, 'edit']);
Route::get('/editar/{id}', [ControladorCategoria::class, 'update']);
Route::get('/categoria/apagar/{id}', [ControladorCategoria::class, 'destroy']);



require __DIR__.'/auth.php';
