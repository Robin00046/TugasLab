<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item  {{ Request::is('dashboard_lab') ? 'active' :'' }}">
    <a class="nav-link"  href="{{ route('dashboard_lab') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
      Tables
  </div>

  <!-- Nav Item - Tables -->
  <li class="nav-item {{ Request::is('pasien') ? 'active' :'' }}">
    <a class="nav-link" href="{{ route('pasien.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Pasien</span>
        </a>
  </li>
  <li class="nav-item {{ Request::is('laboratory') ? 'active' :'' }}">
    <a class="nav-link"  href="{{ route('laboratory.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Order Laboratorium</span>
        </a>
  </li>
  <li class="nav-item {{ Request::is('hasil') ? 'active' :'' }}">
    <a class="nav-link"  href="{{ route('laboratory.hasil') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Hasil</span>
        </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>


</ul>
<!-- End of Sidebar -->