<div class="modal fade" id="edit">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header bg-blue">
                            <h4 class="modal-title">Editar datos de credencial</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                    <div class="modal-body">
                      <form action="modulos/editaralumnos.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" class="form-control" name="txtid" placeholder="Nombre Alumno" id="iid">
                      <label for="nombre">Nombre Alumno</label>
                      <input type="text" onkeyup="mayus(this);" class="form-control" name="txtnombre" placeholder="Nombre Alumno" id="enombre">
                      <label for="matricula">Matrícula</label>
                      <input type="text" readonly= "readonly" class="form-control" name="txtmatricula" placeholder="Matrícula" id="ematricula">
                      <label for="correo">Correo Institucional</label>
                      <input type="email" onkeyup="mayus(this);" class="form-control" name="txtcorreo" placeholder="correo institucional" id="eemail">
                      <label for="grado">Grado</label>
                      <select name='txtgrado' class="form-control Input" id="egrado" required="required" >
                                    <option selected disabled>Seleccione un Grado</option>                                       
                                    <option value="1">PRIMERO</option>
                                    <option value="2">SEGUNDO</option>
                                    <option value="3">TERCERO</option>
                                    <option value="4">CUARTO</option>
                                    <option value="5">QUINTO</option>
                                    <option value="6">SEXTO</option>
                    </select>
                      <label for="grado">Grupo</label>
                      <select name='txtgrupo' class="form-control Input" id="egrupo" required="required" >
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
                      <label for="grado">nivel</label>
                      <select name='txtnivel' class="form-control Input" id="enivel" required="required" >
                                    <option selected disabled>Seleccione un Nivel</option>                                       
                                    <option value="preescolar">PREESCOLAR</option>
                                    <option value="primaria">PRIMARIA</option>
                                    <option value="secundaria">SECUNDARIA</option>
                                    <option value="preparatoria">PREPARATORIA</option>
                      </select>
                      <label for="grado">ciclo</label>
                      <input type="text" onkeyup="mayus(this);" class="form-control" name="txtciclo" placeholder="ciclo escolar" id="eciclo">
                      <label for="nombre">Nombre Tutor 1</label>
                      <input type="text" onkeyup="mayus(this);" class="form-control" name="txttutor1" placeholder="Tutor1" id="etutor1">
                      <label for="nombre">Nombre Tutor 2</label>
                      <input type="text" onkeyup="mayus(this);" class="form-control" name="txttutor2" placeholder="Tutor2" id="etutor2">
                      <label for="nombre">Nombre Tutor 3</label>
                      <input type="text" onkeyup="mayus(this);" class="form-control" name="txttutor3" placeholder="Tutor3" id="etutor3">
                      <label for="foto">Foto de alumno</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="image/jpeg, image/JPEG, image/jpg, image/JPG" name="txtfoto">
                        <label class="custom-file-label" for="foto" id="efoto">Seleccionar foto</label>
                      </div>
                      <label for="foto">Foto Tutor1</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="image/jpeg, image/JPEG, image/jpg, image/JPG" name="txtfoto1">
                        <label class="custom-file-label" for="foto" id="efoto1">Seleccionar foto</label>
                      </div>
                      <label for="foto">Foto Tutor2</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="image/jpeg, image/JPEG, image/jpg, image/JPG" name="txtfoto2">
                        <label class="custom-file-label" for="foto" id="efoto2">Seleccionar foto</label>
                      </div>
                      <label for="foto">Foto Tutor3</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="image/jpeg, image/JPEG, image/jpg, image/JPG" name="txtfoto3">
                        <label class="custom-file-label" for="foto" id="efoto3">Seleccionar foto</label>
                      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Guardar cambios</button>
            </div>
            </form>
          </div>
          <script>function mayus(e) {
                e.value = e.value.toUpperCase();
                }
        </script>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->