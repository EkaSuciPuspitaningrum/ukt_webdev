<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Pengajuan Keringan UKT</a>
        
        </div>
      
        <ul class="sidebar-menu">
            
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('dashboard') }}"><i class="far fa-sharp fa-solid fa-file-lines"></i><span>Dashboard</span></a>
            </li>

            <li class="{{ Request::is('import-berkas') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('import-berkas') }}"><i class="far fa-sharp fa-solid fa-file-lines"></i><span>Import Berkas</span></a>
            </li>

            <li class="{{ Request::is('akun-mahasiswa') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('akun-mahasiswa') }}"><i class="far fa-sharp fa-solid fa-file-lines"></i><span>Edit Akun</span></a>
            </li>
            
        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs"
                class="btn btn-danger btn-lg btn-block btn-icon-split">
                <i class="fas fa-check-circle"></i> SELESAI
            </a>
        </div>
    </aside>
</div>