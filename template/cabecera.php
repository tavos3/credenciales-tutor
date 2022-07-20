<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema admin credenciales tutores </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="data:;base64,iVBORw0KGgo=">
  <link rel="shortcut icon" href="#">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="vistapanel.php" class="nav-link">Ir a Panel</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php include ("modulos/infocabecera.php")?>
          <img src="<?php print_r($username['foto']) ?>" class="img-circle elevation-2" height="50px" width="50px" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block" style="color:#FFFF"><?php print_r($username['nombre']) ?></a>
        <?php ?>  
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              <li class="nav-item has-treeview">
                <a href="vistapanel.php" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Panel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vistaaltaalumnos.php" class="nav-link">
                  <i class="nav-icon fas fa-plus-square"></i>
                  <p>Alta de Credenciales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vistaeditarcredencial.php" class="nav-link">
                  <i class="nav-icon fas fa-user-edit"></i>
                  <p>Editar Credenciales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vistabajaalumnos.php" class="nav-link">
                  <i class="nav-icon fas fa-trash"></i>
                  <p>Baja de Credenciales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vistaretiros.php" class="nav-link">
                  <i class="nav-icon fas fa-search"></i>
                  <p>Retiros de alumnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="vistanuevoadmin.php" class="nav-link">
                  <i class="nav-icon fas fa-user-shield"></i> 
                  <p>Usuarios admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="cerrarsesion.php" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Cerrar Sesión</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>
</body>