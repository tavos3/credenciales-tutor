<div class="modal fade" id="edit">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header bg-blue">
                            <h4 class="modal-title">Editar datos de Administradores</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                    <div class="modal-body">
                      <form action="modulos/editadmin.php" method="post" enctype="multipart/form-data">
                      <label for="nombre">id</label>
                      <input type="text" readonly= "readonly" class="form-control" name="txtid" placeholder="id" id="iid">
                      <label for="nombre">Nombre Administrador</label>
                      <input type="text" class="form-control" name="txtnombre" placeholder="Nombre Administrador" id="enombre">
                      <label for="correo">Correo Institucional</label>
                      <input type="email" class="form-control" name="txtcorreo" placeholder="correo institucional" id="eemail">
                      <!--<label for="grado">Password</label>
                      <input type="text" class="form-control" name="txtpass" placeholder="password" id="pass">-->
                      <label for="foto">Foto Administrador</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="image/jpeg, image/JPEG, image/jpg, image/JPG" name="txtfoto">
                        <label class="custom-file-label" for="foto" id="efoto">Seleccionar foto</label>
                      </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Guardar cambios</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->