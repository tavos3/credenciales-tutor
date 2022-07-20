<?php include ("modulos/panel.php")?>
<?php include ("cabecera.php")?>

<!-- Content Wrapper. Contains page content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Retiro de alumnos del plantel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><button class="btn btn-danger" type="button" data-toggle="modal"  data-target="#eliminar">
                          <i class="fas fa-trash">
                              </i>
                              Borrar Retiros
                          </button></li>
            </ol> 
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">
                    <a href="modulos/reporteretiros.php" target="_blank">
                          <button class="btn btn-success" type="button"><i class="nav-icon fas fa-edit"></i>Reporte General de retiros</button></li>
                    </a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
            
              <div class="card-header">
                <h3 class="card-title">Datos</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="searchs" class="form-control float-right light-table-filter" data-table="order-table" id="search" placeholder="Search">
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap order-table">
                  <thead>
                    <tr>
                      <th>Matrícula</th>    
                      <th>Tutor que retiro</th>
                      <th>Fecha de retiro</th>
                      <th>Hora de retiro</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  while($persona = $resultado7->fetch_assoc())
                  {
                  ?>
                    <tr>
                      <td><span id="matricula<?php echo $persona['matricula']; ?>"><?php echo $persona['matricula']; ?></span></td>
                      <td><?php echo $persona['tutor']; ?></td>
                      <td><?php echo $persona['fecha_retiro']; ?></td>
                      <td><?php echo $persona['hora']; ?></td>
                      <td class="project-actions text-right">
                      <button class="btn btn-success report" type="button" value="<?php echo $persona['matricula']; ?>"  data-toggle="modal"  data-target="#reporte">
                          <i class="nav-icon fas fa-edit">
                              </i>
                              Generar Reporte
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
  <!-- /.content-wrapper -->
  <?php include('modal/modaldelret.php'); ?>
  <?php include('modal/modalrep.php'); ?>
  <script src="dist/js/rep.js"></script>
  <script src="dist/js/bs.js"></script>
  <?php include("footer.php"); ?>