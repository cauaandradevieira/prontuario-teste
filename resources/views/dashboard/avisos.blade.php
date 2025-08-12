{{--
<div class="overflow-auto" style="height: 150px; width: 1000px;">
    <div class="alert alert-danger" style="height: 50px;"></div>
    <div class="alert alert-danger" style="height: 50px;"></div>
    <div class="alert alert-danger" style="height: 50px;"></div>
    <div class="alert alert-danger" style="height: 50px;"></div>
    <div class="alert alert-danger" style="height: 50px;"></div>
</div>
--}}

{{--
<div class="shadow-lg border border border-secondary" style="height: 250px; width: 1000px;">
    <div class="d-flex justify-content-between bg-light">
        <span class="fw-bold fs-4 text-secondary mb-3 ps-2 pt-2">Caixa de Avisos</span>
        <span></span>
    </div>

    <div class="border border-secondary" style="height: 50px;"></div>
    <div class="border border-secondary" style="height: 50px;"></div>
    <div class="border border-secondary" style="height: 50px;"></div>
</div>
</div>
--}}

<!-- Alertas Críticos -->
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-danger">Caixa de Avisos</h6>
            <span class="badge bg-danger">8 Novos</span>
        </div>
        <div class="scroll-container">
            <div class="list-group list-group-flush">
                <!-- Alerta 1 -->
                <a href="#" class="list-group-item list-group-item-action alert-item critical">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1"><i class="fas fa-exclamation-circle me-2"></i>Estoque Crítico</h6>
                        <small>15 min atrás</small>
                    </div>
                    <p class="mb-1">Dipirona está com apenas 15% do estoque</p>
                    <small class="text-danger"><i class="fas fa-clock me-1"></i>Necessário reabastecimento
                        urgente</small>
                </a>

                <!-- Alerta 2 -->
                <a href="#" class="list-group-item list-group-item-action alert-item warning">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1"><i class="fas fa-user-injured me-2"></i>Medicação</h6>
                        <small>1 hora atrás</small>
                    </div>
                    <p class="mb-1">João da Silva não tomou Losartana hoje</p>
                    <small class="text-danger"><i class="fas fa-user-md me-1"></i>Contatar ao cuidador</small>
                </a>

                <!-- Alerta 3 -->
                <a href="#" class="list-group-item list-group-item-action alert-item danger">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1"><i class="fas fa-temperature-high me-2"></i>Medicação</h6>
                        <small>2 horas atrás</small>
                    </div>
                    <p class="mb-1">Pressão alta da Maria Oliveira (120/80)</p>
                    <small class="text-danger"><i class="fas fa-user-md me-1"></i>Contatar ao Médico</small>
                </a>

                <!-- Alerta 4 -->
                <a href="#" class="list-group-item list-group-item-action alert-item critical">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1"><i class="fas fa-exclamation-circle me-2"></i>Estoque Crítico</h6>
                        <small>15 min atrás</small>
                    </div>
                    <p class="mb-1">Paracetamol está com apenas 23% do estoque</p>
                    <small class="text-danger"><i class="fas fa-clock me-1"></i>Necessário reabastecimento
                        urgente</small>
                </a>
            </div>
        </div>
        <div class="card-footer text-center text-primary small" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#modalAvisos" style="cursor: pointer;">
            Visualizar todos
        </div>
    </div>
</div>

<div class="modal fade" id="modalAvisos" tabindex="-1" aria-labelledby="caixaAvisosLabel" aria-hidden="true">
    <h1>DEU CERTO</h1>
</div>