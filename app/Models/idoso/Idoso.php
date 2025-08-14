<?php

namespace App\Models\idoso;

use Illuminate\Database\Eloquent\Model;

class Idoso extends Model
{
    protected $table = 'idoso';
    protected $fillable = [
        'nome',
        'rg', 
        'cpf',
        'estado_civil',
        'apelido',      
        'nacionalidade',
        'naturalidade',
        'peso_inicial',
        'tipo_sanguineo',
        'data_de_nascimento',
        'sexo',
        'ativo',
    ];

    public $timestamps = true;

    const CREATED_AT = 'criado_em';
    const UPDATED_AT = 'atualizado_em';
}
