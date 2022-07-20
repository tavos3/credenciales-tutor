<?php 
include ("cabecera.php");
?>
<html>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Alta de Credenciales para Tutores</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Panel</a></li>
              <li class="breadcrumb-item active">Alta de credencial</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">

        <!-- formulario registra nuevo alumno-->
        <div class="row">
          <div class="col-12">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Datos del Alumno y Tutores</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="modulos/altaalumnos.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                    <label for="nombre">Nombre Alumno</label>
                    <input type="text" onkeyup="mayus(this);" class="form-control" name="txtnombre" placeholder="Nombre Alumno" required>
                  </div>
                  <div class="form-group">
                    <label for="matricula">Matrícula</label>
                    <input type="text" onkeyup="mayus(this);"  class="form-control" name="txtmatricula" placeholder="Matrícula" required>
                  </div>
                  <div class="col-md6 form-group">
                    <label for="correo">Correo Institucional</label>
                    <input type="email" onkeyup="mayus(this);" class="form-control" name="txtcorreo" placeholder="Correo institucional" required>
                  </div>
                  <div class="col-md6 form-group">
                    <label for="grado">Grado</label>
                    <select name='txtgrado' class="form-control Input" id="grado" required="required" >
                                    <option selected disabled>Seleccione un Grado</option>                                       
                                    <option value="1">PRIMERO</option>
                                    <option value="2">SEGUNDO</option>
                                    <option value="3">TERCERO</option>
                                    <option value="4">CUARTO</option>
                                    <option value="5">QUINTO</option>
                                    <option value="6">SEXTO</option>
                    </select>
                  </div>
                  <div class="col-md6 form-group">
                  <label for="grado">Grupo</label>
                    <select name='txtgrupo' class="form-control Input" id="grupo" required="required" >
                                    <option selected disabled>Seleccione un Grupo</option>                                       
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="101">101</option>
                                    <option value="102">102</option>
                                    <option value="103">103</option>
                                    <option value="201">201</option>
                                    <option value="202">202</option>
                                    <option value="203">203</option>
                                    <option value="301">301</option>
                                    <option value="302">302</option>
                                    <option value="303">303</option>
                                    <option value="401">304</option>
                                    <option value="402">402</option>
                                    <option value="403">403</option>
                                    <option value="501">501</option>
                                    <option value="502">502</option>
                                    <option value="503">503</option>
                                    <option value="601">601</option>
                                    <option value="602">602</option>
                                    <option value="603">603</option>
                    </select>
                  </div>
                  <div class="col-md6 form-group">
                  <label for="grado">nivel</label>
                    <select name='txtnivel' class="form-control Input" id="nivel" required="required" >
                                    <option selected disabled>Seleccione un Nivel</option>                                       
                                    <option value="preescolar">PREESCOLAR</option>
                                    <option value="primaria">PRIMARIA</option>
                                    <option value="secundaria">SECUNDARIA</option>
                                    <option value="preparatoria">PREPARATORIA</option>
                    </select>
                  </div>
                  <div class="col-md6 form-group">
                  <label for="grado">ciclo</label>
                    <input type="text" onkeyup="mayus(this);" class="form-control" name="txtciclo" placeholder="ciclo escolar" required>
                  </div>
                  <div class="col-md6 form-group">
                  <label for="tutor1">Nombre Tutor 1</label>
                    <input type="text" onkeyup="mayus(this);" class="form-control" name="txttutor1" placeholder="Tutor 1" required>
                  </div>
                  <div class="col-md6 form-group">
                  <label for="tutor2">Nombre Tutor 2</label>
                    <input type="text" onkeyup="mayus(this);" class="form-control" name="txttutor2" placeholder="Tutor 2">
                  </div>
                  <div class="col-md6 form-group">
                  <label for="tutor3">Nombre Tutor 3</label>
                    <input type="text" onkeyup="mayus(this);" class="form-control" name="txttutor3" placeholder="Tutor 3">
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto de alumno</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="image/jpeg, image/JPEG, image/jpg, image/JPG" name="txtfoto">
                        <label class="custom-file-label" for="foto">Seleccionar foto</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="foto1">Foto de Tutor 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="image/jpeg, image/JPEG, image/jpg, image/JPG" name="txtfototutor1">
                        <label class="custom-file-label" for="foto1">Seleccionar foto</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="foto2">Foto de Tutor 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="image/jpeg, image/JPEG, image/jpg, image/JPG" name="txtfototutor2">
                        <label class="custom-file-label" for="foto2">Seleccionar foto</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="foto3">Foto de Tutor3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="image/jpeg, image/JPEG, image/jpg, image/JPG" name="txtfototutor3">
                        <label class="custom-file-label" for="foto3">Seleccionar foto</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="registrar" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--fin de formulario registra nuevo alumno-->
        </div>
        </section>
        <script>function mayus(e) {
                e.value = e.value.toUpperCase();
                }
        </script>
    </div>
</html>
<?php include("footer.php"); ?>
