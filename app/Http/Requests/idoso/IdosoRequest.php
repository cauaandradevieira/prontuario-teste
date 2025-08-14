<?php

namespace App\Http\Requests\idoso;

use Illuminate\Foundation\Http\FormRequest;

class IdosoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            "nome" => "required|string|max:100",
            "rg" => "required|string|min:6|max:20|unique:idoso,rg",
            "cpf" => "required|string|size:11|unique:idoso,cpf",
            "estado_civil" => "required|string|max:15",
            "apelido" => "string|max:100",
            "nacionalidade" => "required|string|max:100",
            "naturalidade" => "required|string|max:100",
            "tipo_sanguineo" => "required|string|max:3",
            "data_de_nascimento" => "required|date_format:Y-m-d",
            "sexo" => "required|string|max:20",
            "peso_inicial" => "required|decimal:0,2"
        ];
    }

    public function messages(): array
    {
        return [
            "nome.unique" => "Este idoso já está cadastrado no sistema.",
            "nome.*" => "Nome do idoso inválido, tente novamente.",

            "rg.unique" => "Este RG já está cadastrado no sistema.",
            "rg.*" => "RG do idoso inválido, tente novamente.",

            "cpf.unique" => "Este CPF já está cadastrado no sistema.",
            "cpf.size" => "O CPF deve conter exatamente 11 dígitos numéricos.",
            "cpf.*" => "CPF do idoso inválido, tente novamente.",

            "estado_civil.*" => "Estado civil inválido, tente novamente.",

            "apelido.*" => "Apelido inválido, tente novamente.",

            "nacionalidade.*" => "Nacionalidade inválida, tente novamente.",

            "naturalidade.*" => "Naturalidade inválida, tente novamente.",

            "tipo_sanguineo.*" => "Tipo sanguíneo inválido, tente novamente.",

            "data_de_nascimento.*" => "Data de nascimento inválida, use o formato YYYY-MM-DD.",

            "sexo.*" => "Sexo inválido, tente novamente.",

            "peso_inicial.*" => "Peso inválido, insira um número decimal com até 2 casas decimais."
        ];
    }
}
