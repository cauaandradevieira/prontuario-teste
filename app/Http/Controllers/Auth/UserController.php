<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\StoreUserRequest;
use App\Models\usuario\Perfil;


class UserController extends Controller
{
    public function loginpage()
    {
        return view('auth.login');
    }

    public function registerpage()
    {
        $perfis = Perfil::all();
        return view('auth.register', compact('perfis'));
    }

    public function register(StoreUserRequest $request)
    {
        $user = User::create($request->validated());
        return redirect()->route('loginpage',)->with('success', 'Usuário cadastrado com sucesso.');
    }

    public function login(Request $request)
    {
        // Validação básica dos dados
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Tenta autenticar o usuário
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Regenera a sessão para segurança

            return redirect()->intended('/dashboard'); // ou rota desejada após login
        }

        // Se falhar, retorna com erro
        return back()->withErrors([
            'email' => 'As credenciais fornecidas estão incorretas.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
