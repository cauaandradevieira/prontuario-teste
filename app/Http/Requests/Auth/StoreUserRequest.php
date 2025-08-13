<?php

namespace App\Http\Requests\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return !Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email|min:3|max:255',
            'password' => 'required|string|min:8|max:255|confirmed',
            'perfil_id' => 'required|exists:perfil,id',
        ];
    }

    public function messages(): array 
{
    return [
        // Nome
        'name.required' => 'O nome é obrigatório.',
        'name.string' => 'O nome deve ser um texto válido.',
        'name.min' => 'O nome deve conter no mínimo 3 caracteres.',
        'name.max' => 'O nome deve conter no máximo 255 caracteres.',

        // Email
        'email.required' => 'O email é obrigatório.',
        'email.email' => 'Digite um email válido.',
        'email.unique' => 'Este email já está cadastrado no sistema.',
        'email.min' => 'O email deve conter no mínimo 3 caracteres.',
        'email.max' => 'O email deve conter no máximo 255 caracteres.',

        // Senha
        'password.required' => 'A senha é obrigatória.',
        'password.string' => 'A senha deve ser um texto válido.',
        'password.min' => 'A senha deve conter no mínimo 8 caracteres.',
        'password.max' => 'A senha deve conter no máximo 255 caracteres.',
        'password.confirmed' => 'As senhas não coincidem.',

        // Perfil
        'perfil_id.required' => 'O perfil é obrigatório.',
        'perfil_id.exists' => 'O perfil selecionado é inválido.',
    ];
}
}
