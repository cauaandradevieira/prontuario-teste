<body class="sb-nav-fixed bg-light">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand -->
        <a class="navbar-brand ps-3" href="index.html">Prontuário</a>
        <!-- Sidebar Toggle -->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Buscar..." aria-label="Buscar..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
        <!-- Navbar -->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Configurações</a></li>
                    <li><a class="dropdown-item" href="#!">Registro de Atividades</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Sair</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <span class="border-bottom border-secondary"></span>

                        <div class="sb-sidenav-menu-heading">Pessoas</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseIdosos" aria-expanded="false" aria-controls="collapseIdosos">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Idosos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseIdosos" aria-labelledby="headingIdosos"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">Visualizar todos</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Adicionar</a>
                            </nav>
                        </div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseFuncionarios" aria-expanded="false" aria-controls="collapseFuncionarios">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Funcionários
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseFuncionarios" aria-labelledby="headingFuncionarios"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionFuncionarios">
                                <a class="nav-link" href="ver-funcionarios.html">Visualizar todos</a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAddFuncionario" aria-expanded="false"
                                    aria-controls="pagesCollapseAddFuncionario">
                                    Adicionar
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAddFuncionario" aria-labelledby="headingAddFuncionario"
                                    data-bs-parent="#sidenavAccordionFuncionarios">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="funcionario-ativo.html">Médico</a>
                                        <a class="nav-link" href="funcionario-inativo.html">Enfermeiro</a>
                                        <a class="nav-link" href="funcionario-inativo.html">Cuidador</a>
                                        <a class="nav-link" href="funcionario-inativo.html">Tecnico de Enfermagem</a>
                                        <a class="nav-link" href="funcionario-inativo.html">Coordenador</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>

                        <span class="border-bottom border-secondary"></span>

                        <div class="sb-sidenav-menu-heading">Documentos</div>
                        <a class="nav-link" href="evolucao.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Evolução
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseErratas" aria-expanded="false" aria-controls="collapseErratas">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-pen"></i></div>
                            Erratas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseErratas" aria-labelledby="headingErratas"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionErratas">
                                <a class="nav-link" href="adicionar-errata.html">Adicionar</a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseVerErratas" aria-expanded="false"
                                    aria-controls="pagesCollapseVerErratas">
                                    Visualizar todas
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseVerErratas" aria-labelledby="headingVerErratas"
                                    data-bs-parent="#sidenavAccordionErratas">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="errata-verificada.html">Verificadas</a>
                                        <a class="nav-link" href="errata-nao-verificada.html">Não Verificadas</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>

                        <span class="border-bottom border-secondary"></span>
                    </div>
                </div>

                <div class="sb-sidenav-footer p-3">
                    <div class="small mb-1">Logado como:</div>
                    <div class="fw-semibold">Coordenador</div>
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
