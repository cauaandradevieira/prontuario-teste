@extends('layouts.principal')
@section('titulo', 'Visualizar Idosos • Prontuário')

@section('conteudo')
    {{-- sidebar ( sem container) --}}
    @isset($message)
        <div class="alert alert-danger" role="alert">{{ $message }}</div>
    @endisset

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Listagem de Idoso</h2>
        <a href="{{ route('perfil.create') }}" class="btn btn-primary">Adicionar</a>
    </div>
    <table class="table table-hover table-bordered align-middle">
        <thead>
            <tr>
                <th class="text-center">Nome</th>
                <th class="text-center">Apelido</th>
                <th class="text-center">Data de Nascimento</th>
                <th class="text-center">Cpf</th>
                <th class="text-center">Estado Civil</th>
                <th class="text-center">Sexo</th>
                <th class="text-center">Ativo</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($idosos as $idoso)
                <tr>
                    <td class="text-center ">{{ $idoso->nome }}</td>
                    <td class="text-center ">{{ $idoso->apelido ?? "Nenhum"}}</td>
                    <td class="text-center ">{{ $idoso->data_de_nascimento }}</td>
                    <td class="text-center ">{{ $idoso->cpf }}</td>
                    <td class="text-center ">{{ $idoso->estado_civil }}</td>
                    <td class="text-center ">
                        @if ($idoso->sexo === 'M')
                            <span class="badge bg-primary">Masculino</span>
                        @else
                            <span class="badge" style="background-color: darkorchid">Feminina</span>
                        @endif

                    </td>
                    </td>
                    <td class="text-center"><span class="badge rounded-pill bg-success">Habilitado</span></td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center flex-wrap gap-2">
                            <a href="{{ route('idoso.create', $idoso) }}" class="btn btn-warning btn-sm">Visualizar</a>
                            <a href="{{ route('idoso.edit', $idoso) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('perfil.destroy', $idoso) }}" method="POST"
                                onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection