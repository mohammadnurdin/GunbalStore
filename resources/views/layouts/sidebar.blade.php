<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ 'dashboard' }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Gunbal <sup>Store</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <div class="sidebar-heading">
        Master Data
    </div>
    @if (Auth::user()->role == 'A')
        {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Data:</h6>
                <a class="collapse-item" href="{{'barang'}}">Barang</a>
                <a class="collapse-item" href="{{asset('paket')}}">Paket</a>
                <a class="collapse-item" href="{{asset('promo')}}">Promo</a>
                <a class="collapse-item" href="{{asset('pelanggan')}}">Pelanggan</a>

            </div>
        </div>
    </li> --}}

        <li class="nav-item active">
            <a class="nav-link" href="{{ asset('barang') }}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Barang</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ asset('paket') }}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Paket</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ asset('promo') }}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Promo</span></a>
        </li>
    @endif
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('pelanggan') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pelanggan</span></a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Transaksi:</h6>
                <a class="collapse-item" href="{{asset('pengajuan')}}">Pengajuan</a>
                <a class="collapse-item" href="{{asset('pencabutan')}}">Pencabutan</a>
            </div>
        </div>
    </li> --}}
    <div class="sidebar-heading">
        Data Transaksi
    </div>
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('pengajuan') }}">
            <i class="fas fa-clipboard-list"></i>
            <span>Pengajuan</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('pencabutan') }}">
            <i class="fas fa-clipboard-list"></i>
            <span>Pencabutan</span></a>
    </li>


    {{-- <li class="nav-item active">
        <a class="nav-link" href="/profile">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span></a>
    </li> --}}




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
