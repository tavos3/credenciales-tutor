<div id="ret" class="modal fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Salida del alumn@</h4>
            </div>
            <div class="modal-body">
            <form action="modulos/retiro.php" method="POST">
            <input type="hidden" name="txtmatricula" id="ematricula">
            <input type="hidden" name="txtnombre" id="enombre">
               <p>¿Estás seguro que es el tutor seleccionado el que retira al alumn@? </p>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-ok">registrar salida con este tutor</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>