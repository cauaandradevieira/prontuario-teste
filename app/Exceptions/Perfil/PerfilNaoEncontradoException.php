<?php

namespace App\Exceptions\Perfil;

use Exception;

class PerfilNaoEncontradoException extends Exception
{
    public $perfilId;
    
    public function __construct($perfilId, $message = "Perfil não encontrado", $code = 404)
    {
        $this->perfilId = $perfilId;
        parent::__construct($message, $code);
    }
    
    // Adicione este método para o Laravel 11
    public function render($request)
{
    return response()
        ->view('errors.perfil-nao-encontrado', ['message' => $this->getMessage()], 404);
}
}