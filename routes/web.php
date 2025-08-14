<?php

use App\Http\Controllers\idoso\IdosoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perfil\PerfilController;

     // PADRÃO
Route::get('/', function(){
    return view('dashboard');
});

   // Rotas de Perfil
Route::prefix('perfil')->group(function(){
    // Rotas GET
    Route::get('/', [PerfilController::class, 'index'])->name('perfil.index');
    Route::get('/criar', [PerfilController::class, 'create'])->name('perfil.create');
    Route::get('/{perfil}', [PerfilController::class, 'show'])->name('perfil.show');
    Route::get('/{perfil}/editar', [PerfilController::class, 'edit'])->name('perfil.edit');
    
    // Rotas POST/PUT/DELETE
    Route::post('/', [PerfilController::class, 'store'])->name('perfil.store');
    Route::put('/{perfil}', [PerfilController::class, 'update'])->name('perfil.update');
    Route::delete('/{perfil}', [PerfilController::class, 'destroy'])->name('perfil.destroy');
});

 // Rotas de Idosos
Route::prefix('idoso')->group(function(){
    // Rotas GET
    Route::get('/', [IdosoController::class, 'index'])->name('idoso.index');
    Route::get('/criar', [IdosoController::class, 'create'])->name('idoso.create');
    Route::get('/{id}', [IdosoController::class, 'show'])->name('idoso.show');
    Route::get('/{id}/editar', [IdosoController::class, 'edit'])->name('idoso.edit');
    
    // Rotas POST/PUT/DELETE
    Route::post('/', [IdosoController::class, 'store'])->name('idoso.store');
    Route::put('/{idoso}', [IdosoController::class, 'update'])->name('idoso.update');
    Route::delete('/{idoso}', [IdosoController::class, 'destroy'])->name('idoso.destroy');
});
