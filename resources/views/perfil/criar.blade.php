@extends('layouts.principal')
@section('titulo', 'perfil')

@section('conteudo')

    <form action="{{ route('perfil.store') }}" method="POST">
        @csrf()
        @include('perfil.formulario', ['nomeBotao' => 'Adicionar'])
    </form>

    @error('nome')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
    @enderror
@endsection