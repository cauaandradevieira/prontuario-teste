<?php

namespace App\Http\Requests\perfil;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PerfilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        
        return [
            "name" => "required|alpha|string|max:255|unique:perfil,name"
        ];
    }

    public function messages(): array {
        return [
            "name.unique" => "Este perfil já está cadastrado no sistema.",
            'name.alpha' => 'O nome não pode conter números ou caracteres especiais.',
            "name.*" => "Nome do perfil inválido, tente novamente.",
        ];
    }
}
