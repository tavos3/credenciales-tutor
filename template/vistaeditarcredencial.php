<?php 
include ("modulos/panel.php");
include ("cabecera.php");
?>

<!-- Content Wrapper. Contains page content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Editar Credenciales</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="vistapanel.php">Panel</a></li>
              <li class="breadcrumb-item active">Editar Credenciales</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">

      <!-- Main row -->
      <div class="row">
          <div class="col-12">
            <div class="card">

              <div class="card-header">
                <h3 class="card-title">Alumnos con credencial</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="searchs" class="form-control float-right light-table-filter" data-table="order-table" id="search" placeholder="Search">
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 ">
                <table class="table table-hover text-nowrap order-table">
                  <thead>
                    <tr>
                    <th>ID</th>
                      <th>Nombre</th>
                      <th>Matrícula</th>
                      <th>Correo</th>
                      <th>Grado</th>
                      <th>Grupo</th>
                      <th>Nivel</th>
                      <th>Ciclo</th>     
                      <th>Tutor1</th>
                      <th>Tutor2</th>
                      <th>Tutor3</th>
                      <th>Foto Alumno</th>
                      <th>Foto Tutor 1</th>
                      <th>Foto Tutor 2</th>
                      <th>Foto Tutor 3</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  while($persona =$resultado5->fetch_assoc())
                  {                   
                  ?>
                    <tr>
                      <td><span id="id<?php echo $persona['id']; ?>"><?php echo $persona['id']; ?></span></td>
                      <td><span id="nombre<?php echo $persona['matricula']; ?>"><?php echo $persona['nombre']; ?></span></td>
                      <td><span id="matricula<?php echo $persona['matricula']; ?>"><?php echo $persona['matricula']; ?></span></td>
                      <td><span id="email<?php echo $persona['matricula']; ?>"><?php echo $persona['correo']; ?></td>
                      <td><span id="grado<?php echo $persona['matricula']; ?>"><?php echo $persona['grado']; ?></td>
                      <td><span id="grupo<?php echo $persona['matricula']; ?>"><?php echo $persona['grupo']; ?></td>
                      <td><span id="nivel<?php echo $persona['matricula']; ?>"><?php echo $persona['nivel']; ?></td>
                      <td><span id="ciclo<?php echo $persona['matricula']; ?>"><?php echo $persona['ciclo']; ?></td>
                      <td><span id="nombre1<?php echo $persona['matricula']; ?>"><?php echo $persona['nombre1']; ?></td>
                      <td><span id="nombre2<?php echo $persona['matricula']; ?>"><?php echo $persona['nombre2']; ?></td>
                      <td><span id="nombre3<?php echo $persona['matricula']; ?>"><?php echo $persona['nombre3']; ?></td>
                      <td><span id="foto<?php echo $persona['matricula']; ?>"><img src="<?php echo $persona['foto']; ?>"  height="50px" width="50px"/></td>
                      <td><span id="foto1<?php echo $persona['matricula']; ?>"><img src="<?php echo $persona['foto1']; ?>"  height="50px" width="50px"/></td>
                      <td><span id="foto2<?php echo $persona['matricula']; ?>"><img src="<?php echo $persona['foto2']; ?>"  height="50px" width="50px"/></td>
                      <td><span id="foto3<?php echo $persona['matricula']; ?>"><img src="<?php echo $persona['foto3']; ?>"  height="50px" width="50px"/></td>
                      <td class="project-actions text-right">

                          <button type="button" class="btn btn-info edit" value="<?php echo $persona['matricula']; ?>" data-toggle="modal" data-target="#edit">
                          <i class="fas fa-pencil-alt">
                              </i>
                            Editar
                          </button>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include("footer.php"); ?> 
  <!-- /.content-wrapper -->
  <?php include('modal/modaledit.php'); ?>
  <script src="dist/js/custom.js"></script>
  <script src="dist/js/bs.js"></script>
  <script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
    </script>
