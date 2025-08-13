@extends('layouts.principal')
@section('titulo', 'perfil')

@section('conteudo')

<form action="{{ route('perfil.update', $perfil) }}" method="POST">
    @csrf()
    @method('PUT')
    @include('perfil.formulario', ['nomeBotao' => 'Alterar'])
</form>

@error('name')
<div class="alert alert-danger" role="alert">{{ $message }}</div>
@enderror

@endsection