<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perfil\PerfilController;

Route::get('/', function () {
    return view('perfil.perfis');
});


    // ROTAS PERFIL
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