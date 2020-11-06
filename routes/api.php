<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\custoController;
use App\Http\Controllers\receitaController;
use App\Http\Controllers\saldoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/receita',[receitaController::class,'store']);
Route::get('/receita',[receitaController::class,'index']);


Route::get('/custo',[custoController::class,'index']);
Route::post('/custo',[custoController::class,'store']);


Route::get('/saldo',[saldoController::class,'index']);


