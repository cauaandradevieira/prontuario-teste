<!-- Modal -->
    <div class="modal fade" id="atualizarIdoso" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes do Idoso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nome:</strong> {{ $idoso->nome }}</p>
                    <p><strong>Apelido:</strong> {{ $idoso->apelido ?? 'Nenhum' }}</p>
                    <p><strong>CPF:</strong> {{ $idoso->cpf }}</p>
                    <p><strong>Data Nasc.:</strong> {{ $idoso->data_de_nascimento }}</p>
                    <p><strong>Estado Civil:</strong> {{ $idoso->estado_civil }}</p>
                    <p><strong>Sexo:</strong> 
                        @if($idoso->sexo === 'M')
                            Masculino
                        @else
                            Feminino
                        @endif
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('perfil.edit', $idoso->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
