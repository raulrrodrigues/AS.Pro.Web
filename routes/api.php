<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\PedidoController;

Route::resource('pessoas', PessoaController::class);
Route::resource('carros', CarroController::class);
Route::resource('animais', AnimalController::class);
Route::resource('livros', LivroController::class);
Route::resource('empresas', EmpresaController::class);
Route::resource('pedidos', PedidoController::class);
