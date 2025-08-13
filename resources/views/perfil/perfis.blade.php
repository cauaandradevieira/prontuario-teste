@extends('layouts.principal')
@section('titulo', 'Ver Perfis • Prontuário')

@section('conteudo')
{{-- sidebar ( sem container) --}}
@isset($message)
<div class="alert alert-danger" role="alert">{{ $message }}</div>
@endisset

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Listagem de Perfis</h2>
    <!--Verificando se o usuário é admin, para conceder permição á criação de perfis-->
    @auth
    @if(auth()->user()->perfil_id == 1)
    <a href="{{ route('perfil.create') }}" class="btn btn-primary">Adicionar</a>
    @endif
    @endauth
</div>

@if ($perfis->isEmpty())
<div class="alert alert-info">
    Nenhum perfil cadastrado.
</div>
@else
<table class="table table-hover table-bordered align-middle">
    <thead">
        <tr>
            <th class="text-center">Nome</th>
            <th class="text-center">Data Criada</th>
            <th class="text-center">Ultima Atualização</th>
            <th class="text-center">Status</th>
            <th class="text-center">Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($perfis as $perfil)
            <tr>
                <td class="text-center ">{{ $perfil->name }}</td>
                <td class="text-center"><small class="text-muted">{{ $perfil->created_at->format('d/m/Y H:i') }}</small></td>
                <td class="text-center"><small class="text-muted">{{ $perfil->updated_at->format('d/m/Y H:i') }}</small></td>
                <td class="text-center"><span class="badge rounded-pill bg-success">Habilitado</span></td>

                <td class="text-center">
                    <div class="d-flex justify-content-center flex-wrap gap-2">

                        <a href="#" class="btn btn-primary btn-sm">Ver</a>

                        @auth
                        @if(auth()->user()->perfil_id == 1)
                            <a href="{{ route('perfil.edit', $perfil) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('perfil.destroy', $perfil) }}" method="POST"
                                onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        @endif
                        @endauth
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
@endif


@endsection