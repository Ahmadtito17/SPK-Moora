<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/logo.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block">SPK-MOORA</a>
            </div>
        </div>
    
    <!-- Sidebar -->
    <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="h-100 d-flex flex-column justify-content-between align-items-center">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item menu-is-opening menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                    <p>
                        Olah Data
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <ul style="list-style: none;">
                        <li class="nav-item">
                            <a href="{{ url('kriteriabobot') }}" class="nav-link">
                                <i class="nav-icon fas fa-balance-scale-right"></i>
                                <p>
                                    Kriteria & Bobot
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('alternatif') }}" class="nav-link">
                                <i class="nav-icon fas fa-list-ol"></i>
                                <p>
                                    Alternatif & Value
                                </p>
                            </a>
                        </li>
                    </ul>
                </ul>
            </li>
            <li class="nav-item menu-is-opening menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-calculator"></i>
                    <p>
                        Hasil
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <ul style="list-style: none;">
                        <li class="nav-item">
                            <a href="{{ url('decisionmatrix') }}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Matriks Keputusan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('normalization') }}" class="nav-link">
                                <i class="nav-icon fas fa-chart-area"></i>
                                <p>
                                    Perhitungan MOORA
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ranking') }}" class="nav-link">
                                <i class="nav-icon fas fa-sort-amount-down"></i>
                                <p>
                                    Ranking
                                </p>
                            </a>
                        </li>
                    </ul>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>