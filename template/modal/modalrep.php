<div id="reporte" class="modal fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Reporte de retiros del alumno</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="modulos/reporteretirosalm.php" method="POST" target="_blank">
            <input type="hidden" name="matricula" id="ematricula">
               <p>¿Generar reporte de retiros del alumno seleccionado? </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success btn-ok">Generar Reporte</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>