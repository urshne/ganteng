<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/assets/img/logo-design.png" alt="Londri Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Londri</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/img/CILANDAN.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Urshine</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/" class="nav-link {{ request()->is('/') ? 'bg-white' : '' }}">
              <i class="fas fa-home nav-icon"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="member" class="nav-link {{ request()->is('member') ? 'bg-white' : '' }}">
              <i class="fas fa-user nav-icon"></i>
              <p>Member</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="outlet" class="nav-link {{ request()->is('outlet') ? 'bg-white' : '' }}">
              <i class="fas fa-store nav-icon"></i>
              <p>Outlet</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="paket" class="nav-link {{ request()->is('paket') ? 'bg-white' : '' }}">
              <i class="fas fa-box-open nav-icon"></i>
              <p>Paket</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="transaksi" class="nav-link {{ request()->is('transaksi') ? 'bg-white' : '' }}">
              <i class="fas fa-american-sign-language-interpreting nav-icon"></i>
              <p>Transaksi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_karyawan" class="nav-link">
              <i class="far fa-address-book nav-icon"></i>
              <p>Simulasi Data Karyawan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="buku" class="nav-link">
              <i class="fas fa-book nav-icon"></i>
              <p>Form Buku</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="jemput" class="nav-link">
              <i class="fas fa-book nav-icon"></i>
              <p>Penjemputan</p>
            </a>
          </li>
          <li class="nav-header">Logout</li>
          <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="btn btn-default btn-sm">Logout</button>
          </form>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>