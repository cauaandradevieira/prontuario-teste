<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perfil\PerfilController;
use App\Http\Controllers\Auth\UserController;

// Se o usuário não estiver logado, redireciona para a página de login. Se estiver logado, redireciona para o dashboard.
Route::get('/', function () {
    return redirect()->route('dashboard');
})->middleware('auth');

// Rota do dashboard, protegida para que apenas usuários logados possam vê-la.
Route::get('dashboard', function(){
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Rotas perfil
Route::prefix('perfil')
    ->middleware('auth')
    ->group(function(){
        Route::get('/', [PerfilController::class, 'index'])->name('perfil.index');
        Route::get('/criar', [PerfilController::class, 'create'])->name('perfil.create');
        Route::get('/{perfil}', [PerfilController::class, 'show'])->name('perfil.show');
        Route::get('/{id}/editar', [PerfilController::class, 'edit'])->name('perfil.edit');
        Route::post('/', [PerfilController::class, 'store'])->name('perfil.store');
        Route::put('/{perfil}', [PerfilController::class, 'update'])->name('perfil.update');
        Route::delete('/{perfil}', [PerfilController::class, 'destroy'])->name('perfil.destroy');
    });

//Rotas autenticação usuario
Route::prefix('auth')
    ->middleware('guest') 
    ->group(function (){
        Route::get('/login', [UserController::class, 'loginpage'])->name('loginpage'); 
        Route::post('/login', [UserController::class, 'login'])->name('login');
        Route::get('/register', [UserController::class, 'registerpage'])->name('registerpage'); 
        Route::post('/register', [UserController::class, 'register'])->name('register');
    });
Route::post('auth/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

