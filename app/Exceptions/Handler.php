<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use App\Exceptions\Perfil\PerfilNaoEncontradoException;

class Handler extends ExceptionHandler
{
    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function (PerfilNaoEncontradoException $e, $request) {
            return redirect()
                ->route('errors.perfil-nao-encontrado')
                ->with('error', $e->getMessage());
        });

        // Mantenha o tratamento padrão para outras exceções
        $this->renderable(function (Throwable $e, $request) {
            return parent::render($request, $e);
        });
    }
}