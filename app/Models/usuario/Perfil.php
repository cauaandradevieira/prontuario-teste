<?php

namespace App\Models\usuario;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfil';
    protected $fillable = ['name', 'id'];

    public $timestamps = true;
}
