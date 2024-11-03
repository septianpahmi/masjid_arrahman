<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/assets/img/logo-2.png" alt="AdminLTE Logo" class="brand-image">
        <span class="brand-text font-weight-light"><strong>AdminZIS</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link{{ request()->routeIs('dashboard') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">Master Data</li>
                <li class="nav-item">
                    <a href="{{ route('zakat') }}" class="nav-link{{ request()->routeIs('zakat') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-coins"></i>
                        <p>
                            Kategori Zakat
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tabungan') }}"
                        class="nav-link{{ request()->routeIs('tabungan') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tabungan Zakat
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('infak') }}" class="nav-link{{ request()->routeIs('infak') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                            Kategori Infak
                        </p>
                    </a>
                </li>
                <li class="nav-header">Report</li>
                <li class="nav-item">
                    <a href="{{ route('pembayaran') }}"
                        class="nav-link{{ request()->routeIs('pembayaran') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                            Zakat
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('fidyah') }}"
                        class="nav-link{{ request()->routeIs('fidyah') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-drumstick-bite"></i>
                        <p>
                            Fidayh
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('infak.report') }}"
                        class="nav-link{{ request()->routeIs('infak.report') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Infak
                        </p>
                    </a>
                </li>
                <li class="nav-header">Main Data</li>
                <li class="nav-item">
                    <a href="{{ route('berita') }}"
                        class="nav-link{{ request()->routeIs('berita') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-paperclip"></i>
                        <p>
                            Berita
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('team') }}" class="nav-link{{ request()->routeIs('team') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Team
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
