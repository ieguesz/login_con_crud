<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud + Login</title>
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets2/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body rounded">
      <div class="login-logo">
        <p><strong>Login</strong></p>
      </div>
      <?php
        if(isset($alert)){
        if($alert['success'] == true){
             echo "<div class='alert alert-success text-center' role='alert'>".$alert['message']."</div>";
             } elseif($alert['danger'] == true){
             echo "<div class='alert alert-danger text-center' role='alert'>".$alert['message']."</div>";
           }
         }
      ?>
      <form action="?c=Login&a=Auth" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3 px-4">
          <input type="text" name="txtUsuario" class="form-control " placeholder="Usuario" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3 px-4">
          <input type="password" name="txtContrasena" class="form-control" placeholder="Contraseña" autocomplete="off" required >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" name="btnlogear" class="btn btn-primary btn-block ">Iniciar Sesion</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="assets2/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets2/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets2/dist/js/adminlte.min.js"></script>
</body>
</html>
