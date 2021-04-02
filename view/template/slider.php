<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="?" class="brand-link">
    <img src="assets2/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Crud + Login</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets2/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" onclick="alertMetodoNoDisponible();" class="d-block"><?php echo $_SESSION["nombre"]; ?></a>
      </div>
    </div>
    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link" onclick="alertMetodoNoDisponible();">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Usuarios
              <span class="right badge badge-danger">Nuevo</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="?c=Productos&a=Index" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Productos
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>