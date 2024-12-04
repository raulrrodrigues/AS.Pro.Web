<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('pessoa', [PessoaController::class, 'index'])->name('pessoa');
    Route::get('pessoa/create', [PessoaController::class, 'create']);
    Route::post('pessoa', [PessoaController::class, 'store']);
    Route::get('pessoa/{id}/edit', [PessoaController::class, 'edit']);
    Route::put('pessoa/{id}', [PessoaController::class, 'update']);
    Route::delete('pessoa/{id}', [PessoaController::class, 'destroy']);

    Route::get('carro', [CarroController::class, 'index'])->name('carro');
    Route::get('carro/create', [CarroController::class, 'create']);
    Route::post('carro', [CarroController::class, 'store']);
    Route::get('carro/{id}/edit', [CarroController::class, 'edit']);
    Route::put('carro/{id}', [CarroController::class, 'update']);
    Route::delete('carro/{id}', [CarroController::class, 'destroy']);

    Route::get('animal', [AnimalController::class, 'index'])->name('animal');
    Route::get('animal/create', [AnimalController::class, 'create']);
    Route::post('animal', [AnimalController::class, 'store']);
    Route::get('animal/{id}/edit', [AnimalController::class, 'edit']);
    Route::put('animal/{id}', [AnimalController::class, 'update']);
    Route::delete('animal/{id}', [AnimalController::class, 'destroy']);

    Route::get('livro', [LivroController::class, 'index'])->name('livro');
    Route::get('livro/create', [LivroController::class, 'create']);
    Route::post('livro', [LivroController::class, 'store']);
    Route::get('livro/{id}/edit', [LivroController::class, 'edit']);
    Route::put('livro/{id}', [LivroController::class, 'update']);
    Route::delete('livro/{id}', [LivroController::class, 'destroy']);

    Route::get('empresa', [EmpresaController::class, 'index'])->name('empresa');
    Route::get('empresa/create', [EmpresaController::class, 'create']);
    Route::post('empresa', [EmpresaController::class, 'store']);
    Route::get('empresa/{id}/edit', [EmpresaController::class, 'edit']);
    Route::put('empresa/{id}', [EmpresaController::class, 'update']);
    Route::delete('empresa/{id}', [EmpresaController::class, 'destroy']);

    Route::get('pedido', [PedidoController::class, 'index'])->name('pedido');
    Route::get('pedido/create', [PedidoController::class, 'create']);
    Route::post('pedido', [PedidoController::class, 'store']);
    Route::get('pedido/{id}/edit', [PedidoController::class, 'edit']);
    Route::put('pedido/{id}', [PedidoController::class, 'update']);
    Route::delete('pedido/{id}', [PedidoController::class, 'destroy']);
});

require __DIR__.'/auth.php';