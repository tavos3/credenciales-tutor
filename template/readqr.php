<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tutores COLMEX</title>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="readqr/style.css"> 
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">TUTORES COLMEX</a>
        </div>
      </nav>
      <section-bg>
      <div class="container">
        <div class="table-responsive">
          <table class="table-align-middle">
              <tbody>
              <td>
                <div class="video-container">
                  <video id="preview"></video>
                </div>
                </td>
                <td>
                  <div class="video-container" id="respuesta">
                  </div> 
                </td>
              </tr>
              
            </tbody>
          </table>
          <table class="table" id="tabla">
            <thead id="cabecera">
            <tr style='background-color:#F3F726;'>
              <th scope="col" style="text-align: center; color: BLACK;></th>
                  <th scope="col"><h1><b>¡COLOCA EL QR FRENTE AL ESCÁNER!</b><h1></th>
            </tr>
            </thead>
            <tbody id="contenido">        
            </tbody>
          </table>
          <table class="table" id="tabla2">
            <thead id="cabecera2">
            </thead>
          </table>
          <table class="table" id="tabla1">
            <thead id="cabecera1">
            </thead>
            <tbody id="contenido1">        
            </tbody>
          </table>
          <table class="table" id="tabla3">
            <thead id="cabecera3">
            </thead>
          </table>
    </div>
          <script>
            var sonido = new Audio("images/sound/bip.mp3");

            document.addEventListener("DOMContentLoaded", event => {
              let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });

              Instascan.Camera.getCameras().then(cameras => {
                scanner.camera = cameras[cameras.length - 1];
                scanner.start();
              }).catch(e => console.error(e));
            
              scanner.addListener('scan', content => {
                                sonido.play();
                                var datos = new FormData();    
                                datos.append("qr", content);
                                  fetch('qrcheck.php',{
                                    method: 'POST',
                                    body: datos})
                                    .then( res => res.json())
                                    .then( data => {
                                        if (data.error) {
                                          contenido.innerHTML = ''
                                          respuesta.innerHTML = `
                                            <br>
                                              <div class="alerta" style="text-align: center; background-color: blue; color: white;">
                                            <br>
                                            <h1>¡Este QR no pertenece a ninguno de los tutores del alumno!<h1>
                                            <br>
                                              </div> `
                                            cabecera.innerHTML = ''
                                            cabecera2.innerHTML = ''
                                            cabecera1.innerHTML = ''
                                            cabecera3.innerHTML = ''
                                            contenido1.innerHTML = ''
                                            cabecera.innerHTML =  `
                                            <tr style='background-color:#286BF0;'>
                                              <th scope="col" style="text-align: center; color: white;></th>
                                              <th scope="col"><h1>¡SIN DATOS A MOSTRAR!<h1></th>

                                            </tr>`
                                            cabecera2.innerHTML =  `
                                            <tr style='background-color:red;'>
                                              <th scope="col" style="text-align: center; color: white;></th>
                                              <th scope="col"><h1>¡Precaución no entregar al alumno!<h1></th>

                                            </tr>`
                                        }else{
                                          if(data.matricula){
                                            respuesta.innerHTML = `
                                            <br>
                                              <div class="alerta" style="text-align: center; background-color: green; color: white;">
                                            <br>
                                            <h1>¡Este QR pertenece a los tutores del alumno!<h1>
                                            <br>
                                              </div> `
                                              tabla(data)
                                          function tabla(data){
                                            cabecera.innerHTML = ''
                                            cabecera.innerHTML =  `
                                            <tr style="text-align: center; background-color: green; color: white;">
                                              <th scope="col">Matrícula</th>
                                              <th scope="col">Nombre Alumno</th>
                                              <th scope="col">Nivel</th>
                                              <th scope="col">Grado</th>
                                              <th scope="col">Grupo</th>
                                              <th scope="col">Foto del Alumno</th>
                                            </tr>`
                                            contenido.innerHTML = ''
                                            contenido.innerHTML =  `
                                              <tr>
                                                    <td id="mat" style="text-align: center; background-color: #6FF2AB; color: BLACK;"><b>${data.matricula}</b></td>
                                                    <td style="text-align: center; background-color: #6FF2AB; color: BLACK;"><b>${data.nombre}</b></td>
                                                    <td style="text-align: center; background-color: #6FF2AB; color: BLACK;"><b>${data.nivel}</b></td>
                                                    <td style="text-align: center; background-color: #6FF2AB; color: BLACK;"><b>${data.grado}</b></td>
                                                    <td style="text-align: center; background-color: #6FF2AB; color: BLACK;"><b>${data.grupo}</b></td>
                                                    <td style="text-align: center; background-color: #6FF2AB; color: BLACK;"><img src="${data.foto}"  height="100px" width="100px"/></td>
                                              </tr>`
                                            cabecera2.innerHTML = ''
                                            cabecera2.innerHTML =  `
                                              <tr style='background-color:#F3F726;'>
                                                   <th scope="col" style="text-align: center; color: BLACK;></th>
                                                    <th scope="col"><h3><b>¡Tutores autorizados para retirar al alumno del plantel!</b><h3></th>
                                              </tr>` 
                                            cabecera1.innerHTML = ''
                                            cabecera1.innerHTML =  `
                                              <thead>
                                                    <tr style="text-align: center; background-color: green; color: white;">
                                                      <th scope="col">Tutor 1</th>
                                                      <th scope="col"></th>
                                                      <th scope="col">Tutor 2</th>
                                                      <th scope="col"></th>
                                                      <th scope="col">Tutor 3</th>
                                                      <th scope="col"></th>
                                                    </tr>
                                              </thead>`
                                            contenido1.innerHTML = ''
                                            contenido1.innerHTML =  `
                                              <tr>
                                                    <td id1="id1" style="text-align: center; background-color: #6FF2AB; color: BLACK;"><b>${data.nombre1}</b></td>
                                                    <td style="text-align: center; background-color: #6FF2AB; color: BLACK;"><img src="${data.foto1}"  height="100px" width="100px"/></td>
                                                    <td style="text-align: center; background-color: #6FF2AB; color: BLACK;"><b>${data.nombre2}</b></td>
                                                    <td style="text-align: center; background-color: #6FF2AB; color: BLACK;"><img src="${data.foto2}"  height="100px" width="100px"/></td>
                                                    <td style="text-align: center; background-color: #6FF2AB; color: BLACK;"><b>${data.nombre3}</b></td>
                                                    <td style="text-align: center; background-color: #6FF2AB; color: BLACK;"><img src="${data.foto3}"  height="100px" width="100px"/></td>
                                              </tr>`  
                                            cabecera3.innerHTML = ''
                                            cabecera3.innerHTML =  `
                                            <tr style="text-align: center; background-color: green; color: white;">
                                              <th scope="col"><button class="btn btn-danger addret" type="button" value="${data.matricula}"  data-toggle="modal"  data-target="#ret">Retira Tutor 1</button></th>
                                              <th scope="col"></th>
                                              <th scope="col"><button class="btn btn-danger addret2" type="button" value="${data.matricula}"  data-toggle="modal"  data-target="#ret">Retira Tutor 2</button></th>
                                              <th scope="col"></th>
                                              <th scope="col"><button class="btn btn-danger addret3" type="button" value="${data.matricula}"  data-toggle="modal"  data-target="#ret">Retira Tutor 3</button></th>
                                              <th scope="col"></th>
                                            </tr>`                             
                                          }
                                          $(document.getElementById).on('click', '.addret', function(){
                                            $('#ret').modal('show');
                                            $('#enombre').val(data.nombre1);
                                            $('#ematricula').val(data.matricula);	
                                          });
                                          $(document.getElementById).on('click', '.addret2', function(){
                                            $('#ret').modal('show');
                                            $('#enombre').val(data.nombre2);
                                            $('#ematricula').val(data.matricula);	
                                          });
                                          $(document.getElementById).on('click', '.addret3', function(){
                                            $('#ret').modal('show');
                                            $('#enombre').val(data.nombre3);
                                            $('#ematricula').val(data.matricula);	
                                          });

                                            }}
                                          })  
                                        scanner.start();
                                      });
                                    });
            </script>    
</section>   
    <script src="readqr/script.js"></script>
    <?php include('modal/modalret.php'); ?>
    <script src="dist/js/bs.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>