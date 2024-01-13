<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
<!-- Sidebar - Brand -->
<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
  <div class="sidebar-brand-icon">
    <img src="{{ asset('admin_assets/img/LOGO1.png') }}" class="img-fluid" alt="Logo">
  </div>
</a>


  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-chart-bar"></i>
      <span>Vista Principal</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('puntos') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Puntos de Control</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="/profile">
      <i class="fas fa-fw fa-envelope"></i>
      <span>Cuenta</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/acerca_de">
      <i class="fas fa-fw fa-brain"></i>
      <span>Acerca de</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="/creditos">
      <i class="fas fa-fw fa-users"></i>
      <span>Créditos</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>