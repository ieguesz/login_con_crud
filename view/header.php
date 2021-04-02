<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud + Login</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets2/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets2/dist/css/adminlte.min.css">
    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="assets2/datatables/datatables.min.css"/>
    <!-- Datatable  Boostrap4 CSS-->
    <link rel="stylesheet" type="text/css" href="assets2/datatables/DataTables-1.10.22/css/datatables.bootstrap4.min.css">
    <!-- alert2 -->
    <!-- <link rel="stylesheet" href="assets2/sweetalert2/sweetalert2.min.css"> -->
    <style>
    .pull-left {
    float: left !important;
    }
    .pull-right {
    float: right !important;
    }
    </style>
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item">
            <li class="dropdown user user-menu">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"style="padding: 0rem 1rem;">
                <div class="user-panel mt-2 mb-3 d-flex" >
                  <div class="image">
                    <img src="assets2/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" >
                  </div>
                  <div class="info d-none d-sm-inline-block">
                    <?php echo $_SESSION["nombre"]; ?>
                  </div>
                </div>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <p>
                    <?php echo $_SESSION["nombre"]; ?>
                  </p>
                </li>
                <!-- Menu Body -->
<!--                 <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>

                </li> -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat" onclick="alertMetodoNoDisponible();">Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a href="?c=Login&a=CerrarSesion" class="btn btn-default btn-flat">salir</a>
                  </div>
                </li>
              </ul>
            </li>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <?php require_once 'template/slider.php'; ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">