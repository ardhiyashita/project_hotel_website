<div id="wrapper" style="position: absolute; z-index: 2;">
    <div class="collapse" id="collapseExample">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Aplikasi Hotel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            @if (auth()->user()->role == 'admin')
                <!-- Nav Item - Dashboard -->
                <li class="nav-item @if(\Request::segment(1)  == 'home') active @endif"">
                    <a class="nav-link" href="/home">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Linen to Receive</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Hotel Transaction</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Discard Linen</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Stock</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Stock:</h6>
                            <a class="collapse-item" href="">Satuan</a>
                            <a class="collapse-item" href="">Supplier</a>
                            <a class="collapse-item" href="">Kategori Produk</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Billing</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Report</span></a>
                </li>

                <!-- Nav Item - Pages Collapse Menu
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Master Data</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Master Data:</h6>
                            <a class="collapse-item" href="">Satuan</a>
                            <a class="collapse-item" href="">Supplier</a>
                            <a class="collapse-item" href="">Kategori Produk</a>
                        </div>
                    </div>
                </li> -->


                <!-- Divider -->
                <!-- <hr class="sidebar-divider"> -->

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>User Management</span></a>
                </li>

            @else
                <li class="nav-item @if(\Request::segment(1)  == 'penjualan') active @endif">
                    <a class="nav-link" href="{{ route('penjualan.index') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Buat Penjualan</span></a>
                </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->
    </div>
</div>
