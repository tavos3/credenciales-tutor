<?php include ("modulos/panel.php")?>
<?php include ("cabecera.php")?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Panel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">TOTAL DE ALUMOS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $nivel1; ?></h3>

                <p>Alumnos Preescolar</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $nivel2; ?></h3>

                <p>Alumnos Primaria</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $nivel3; ?></h3>

                <p>Alumnos Secundaria</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $nivel4; ?></h3>

                <p>Alumnos Preparatoria</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $nivel6; ?></h3>

                <p>Total de Alumnos</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

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
              <div class="card-body table-responsive p-0">
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
                  $enumeracion = 1;
                  while($persona = $resultado5->fetch_assoc())
                  {
                  ?>
                    <tr>
                    <td><span id="id<?php echo $persona['id']; ?>"><?php echo $enumeracion; $enumeracion++; ?></span></td>
                      <td><?php echo $persona['nombre']; ?></td>
                      <td><?php echo $persona['matricula'];?></td>
                      <td><?php echo $persona['correo']; ?></td>
                      <td><?php echo $persona['grado']; ?></td>
                      <td><?php echo $persona['grupo']; ?></td>
                      <td><?php echo $persona['nivel']; ?></td>
                      <td><?php echo $persona['ciclo']; ?></td>
                      <td><?php echo $persona['nombre1']; ?></td>
                      <td><?php echo $persona['nombre2']; ?></td>
                      <td><?php echo $persona['nombre3']; ?></td>
                      <td><img src="<?php echo $persona['foto']; ?>"  height="50px" width="50px"/></td>
                      <td><img src="<?php echo $persona['foto1']; ?>"  height="50px" width="50px"/></td>
                      <td><img src="<?php echo $persona['foto2']; ?>"  height="50px" width="50px"/></td>
                      <td><img src="<?php echo $persona['foto3']; ?>"  height="50px" width="50px"/></td>
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
  <script src="dist/js/bs.js"></script>
  <?php include("footer.php"); ?>


