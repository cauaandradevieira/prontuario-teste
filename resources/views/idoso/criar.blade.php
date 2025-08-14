@extends('layouts.principal')
@section('titulo', 'idoso')
@section('styles') @vite( 'resources/css/formulario.css') @endsection

@section('conteudo')

    <form action="{{ route('idoso.store') }}" method="POST">
        @csrf()
        @include('idoso.formulario')
    </form>

    @error('nome')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
    @enderror
@endsection