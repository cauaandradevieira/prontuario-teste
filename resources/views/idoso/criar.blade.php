@extends('layouts.principal')
@section('titulo', 'idoso')

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