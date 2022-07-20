<?php include ("cabecera.php");?>
<?php include ("modulos/admin.php")?>

<!-- Content Wrapper. Contains page content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Nuevo Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Alta de credencial</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      

        <!-- formulario registra nuevo alumno-->
        <div class="row">
          <div class="col-12">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos de Personal</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form  method="POST" action="modulos/nuevoadmin.php" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" onkeyup="mayus(this);" name="nombre" placeholder="Nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="correo">Correo Institucional</label>
                    <input type="email" class="form-control" onkeyup="mayus(this);" name="correo" placeholder="correo institucional" required>
                  </div>
                  <div class="col-md6 form-group">
                  <label for="grado">Contraseña</label>
                    <input type="text" class="form-control" name="pass" placeholder="password" required>
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="txtfoto">
                        <label class="custom-file-label" for="foto">Seleccionar foto</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--fin de formulario registra nuevo alumno-->
        <div class="container-fluid">
      <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Usuarios Administradores</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="searchs" class="form-control float-right light-table-filter" data-table="order-table" id="search" placeholder="Search">
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap order-table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Usuario</th>
                      <th>Correo</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  while($persona = $resultado->fetch_assoc())
                  {
                    ?>
                    <tr>
                    <td><span id="id<?php echo $persona['id']; ?>"><?php echo $persona['id']; ?></span></td>
                      <td><span id="nombre<?php echo $persona['id']; ?>"><?php echo $persona['nombre']; ?></td>
                      <td><span id="email<?php echo $persona['id']; ?>"><?php echo $persona['correo']; ?></td>
                      <td><span id="foto<?php echo $persona['id']; ?>"><img src="<?php echo $persona['foto']; ?>"  height="50px" width="50px"/></td>
                      <td class="project-actions text-right">
                          <button type="button" class="btn btn-info edit" value="<?php echo $persona['id']; ?>" data-toggle="modal" data-target="#edit">
                          <i class="fas fa-pencil-alt">
                              </i>
                          </button>
                          <button type="button" class="btn btn-danger deletebtn" value="<?php echo $persona['id']; ?>" data-toggle="modal" data-target="#eliminar">
                          <i class="fas fa-trash">
                              </i>
                          </button>
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
        </section>
    </div>
    <?php include("footer.php"); ?>
<?php include('modal/modaldel.php'); ?>
<script src="dist/js/editadmin.js"></script>
<script src="dist/js/deladmin.js"></script>
<?php include('modal/modaledi.php'); ?>
<script>function mayus(e) {
                e.value = e.value.toUpperCase();
                }
        </script>
<script src="dist/js/edit.js"></script>
<script src="dist/js/bs.js"></script>