<?php

use App\Http\Controllers\custoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OngController;
use App\Http\Controllers\receitaController;

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

//Auth::routes();

Route::get('/', function () {
    return view('home');
});

Route::get('/cliente',function(){
    return view('formulario_cliente');
});

Route::get('/cliente',[receitaController::class,'index'])->name('receitas.show');


Route::post('/cliente',[receitaController::class,'store'])->name('receitas.create');


Route::get('/fornecedor',function(){
    return view('formulario_fornecedor');
});


Route::get('/fornecedor/relatorio', function () {
    return view('relatorio_fornecedor');
})->name('relatorio.fornecedor');

Route::post('/fornecedor',[custoController::class,'store'])->name('fornecedor.create');
Route::get('/fornecedor/relatorio',[custoController::class,'index'])->name('fornecedor.show');


Route::get('/receita/relatorio', function () {
    return view('relatorio_cliente');
});






Route::resource('custo', 'custoController');
Route::resource('receita', 'receitaController');
