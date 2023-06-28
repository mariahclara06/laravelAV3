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

Route::get('/produtos', [ProdutosController::class,'index'])->name('produtos.index');
Route::get('/produtos', 'App\Http\Controllers\ProdutosController@index');
Route::get('/produtos/create', [ProdutosController::class,'create'])->name('produtos.create');
Route::get('/produtos/{id}', [ProdutosController::class,'show'])->name('produtos.show');
Route::put('/produtos/{id}', [ProdutosController::class,'update'])->name('produtos.update');
Route::get('/produtos/{id}/edit', [ProdutosController::class,'edit'])->name('produtos.edit');
Route::delete('/produtos/{id}/delete', [ProdutosController::class,'destroy'])->name('produtos.destroy');
Route::post('/produtos', [ProdutosController::class,'store'])->name('produtos.store');       
