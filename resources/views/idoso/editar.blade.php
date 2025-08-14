@extends('layouts.principal')
@section('titulo', 'idoso')

@section('conteudo')

    <form action="{{ route('idoso.update', $idoso) }}" method="POST">
        @csrf()
        @method('PUT')
        @include('idoso.formulario', ['nomeBotao' => 'Alterar'])
    </form>

    @error('nome')
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
    @enderror
@endsection