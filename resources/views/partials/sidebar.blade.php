<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: pink;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
            <img src="{{ asset('sbadmin/img/logo.png') }}" alt="" style="width: 4rem; height: 4rem; border-radius: 100%;">
        </div>
        {{-- <div class="sidebar-brand-text mx-3"></div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0 bg-dark">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0 bg-dark">

    <!-- Nav Item - Profil -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-user"></i>
            <span>Profil</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0 bg-dark">

    <!-- Nav Item - Dokumen SPMI -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-file-alt"></i>
            <span>Dokumen SPMI</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0 bg-dark">

    <!-- Nav Item - Gugus Penjaminan Mutu -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-shield-alt"></i>
            <span>Gugus Penjaminan Mutu</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0 bg-dark">

    <!-- Nav Item - Evaluasi -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-chart-line"></i>
            <span>Evaluasi</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0 bg-dark">

    <!-- Nav Item - Laporan -->
    <!-- Nav Item - Laporan -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="laporanDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">
            <i class="fas fa-file" style="color: #ffffff;"></i>
            <span>Laporan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="laporanDropdown">
            <a class="dropdown-item" href="{{ route('surveis.index') }}">Survei</a>
            <a class="dropdown-item" href="#">Submenu 2</a>
            <!-- Tambahkan submenu sesuai kebutuhan -->
        </div>
    </li>

    <hr class="sidebar-divider my-0 bg-dark">

    <!-- Nav Item - Download -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-download"></i>
            <span>Download</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0 bg-dark">
</ul>
<!-- End of Sidebar -->
