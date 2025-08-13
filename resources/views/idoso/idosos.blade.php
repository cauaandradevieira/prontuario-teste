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

    @if ($idosos->isEmpty())
        <div class="alert alert-info">
            Nenhum idoso cadastrado.
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
                @foreach ($idosos as $idoso)
                    <tr>
                        <td class="text-center ">{{ $idoso->nome }}</td>
                        <td class="text-center"><small class="text-muted">{{ $idoso->criado_em->format('d/m/Y H:i') }}</small></td>
                        <td class="text-center"><small class="text-muted">{{ $idoso->atualizado_em->format('d/m/Y H:i') }}</small></td>
                        <td class="text-center"><span class="badge rounded-pill bg-success">Habilitado</span></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center flex-wrap gap-2">
                                <a href="{{ route('perfil.show', $idoso) }}" class="btn btn-primary btn-sm">Ver</a>
                                <a href="{{ route('perfil.edit', $idoso) }}" class="btn btn-warning btn-sm">Editar</a>
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
    @endif


@endsection