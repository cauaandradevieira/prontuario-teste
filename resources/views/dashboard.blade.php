@extends('layouts.principal')
@section('titulo', 'perfil')
@section('styles') @vite('resources/css/dashboard/card.css') @endsection
@section('conteudo')

    <main>
        @include('dashboard.card')
        
        <div class="d-flex mt-4">
            @include('dashboard.tabela')
            @include('dashboard.avisos')
        </div>

    </main>
@endsection