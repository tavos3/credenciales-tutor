<!doctype html>
<?php include ("modulos/retirosalm.php")?>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Salida de alumnos</title>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="readqr/style.css"> 
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SALIDA DE ALUMNOS</a>
        </div>
      </nav>
      <section-bg>
      <div class="container">
        <div class="table-responsive">
        <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="searchs" class="form-control float-right light-table-filter" data-table="order-table" id="search" placeholder="Search">
                  </div>
                </div>
              </div>
        <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap order-table">
                  <thead>
                    <tr>
                      <th>Matrícula</th> 
                      <th>Alumno</th>   
                      <th>grado</th>
                      <th>grupo</th>
                      <th>Tutor que retira</th>
                      <th>Hora de salida</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  while($persona = $resultado->fetch_assoc())
                  {
                  ?>
                    <tr>
                      <td><span id="matricula<?php echo $persona['matricula']; ?>"><?php echo $persona['matricula']; ?></span></td>
                      <td><?php echo $persona['nombre']; ?></td>
                      <td><?php echo $persona['grado']; ?></td>
                      <td><?php echo $persona['grupo']; ?></td>
                      <td><?php echo $persona['tutor']; ?></td>
                      <td><?php echo $persona['hora']; ?></td>
                      <td class="project-actions text-right">
                  </td>
                    </tr>
                    <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
    </div>
<script type="text/javascript">
function actualizar(){location.reload(true);}
//Función para actualizar cada 5 segundos(5000 milisegundos)
setInterval("actualizar()",30000);
</script>
</section>   
    <script src="readqr/script.js"></script>
    <?php include('modal/modalret.php'); ?>
    <script src="dist/js/bs.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>