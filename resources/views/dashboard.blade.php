@extends('layouts.principal')
@section('titulo', 'perfil')
@section('styles') @vite('resources/css/dashboard/card.css') @endsection
@section('conteudo')

    <main>
        <div class="container-fluid px-4">
            <!-- Conteúdo -->
            <div class="col py-3">
                <div class="fw-bold fs-4 text-secondary mb-3">Dashboard</div>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card card-border-left-blue p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-xs card-text-blue fw-semibold text-uppercase mb-1">
                                        Idosos Cadastrados
                                    </div>
                                    <div class="h5 mb-0 text-dark fw-semibold">25</div>
                                </div>
                                <span class="icon card-text-blue">
                                    <i class="fa-solid fa-person-cane"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card card-border-left-green p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-xs text-success fw-semibold text-uppercase mb-1">
                                        Medicamentos
                                    </div>
                                    <div class="h5 mb-0 text-dark fw-semibold">52</div>
                                </div>
                                <span class="icon text-success"><i class="fas fa-pills"></i></span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card card-border-left-yelow p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-xs card-text-yelow fw-semibold text-uppercase mb-1">
                                        Evoluções
                                    </div>
                                    <div class="h5 mb-0 text-dark fw-semibold">22 / 50</div>
                                </div>
                                <span class="icon card-text-yelow"><i class="fas fa-chart-line"></i></span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card card-border-left-red p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-xs card-text-red fw-semibold text-uppercase mb-1">
                                        Erratas
                                    </div>
                                    <div class="h5 mb-0 text-dark fw-semibold">18</div>
                                </div>
                                <span class="icon card-text-red"><i class="fas fa-pen-to-square"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection