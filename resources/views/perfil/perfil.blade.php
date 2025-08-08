@extends('layouts.principal')
@section('titulo', 'perfil')

@section('conteudo')
    @include('perfil.formulario', ['perfil' => $perfil])
@endsection