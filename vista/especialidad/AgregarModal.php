<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <center>
          <h4 class="modal-title" id="myModalLabel">Registro de Especialidades</h4>
        </center>
      </div>
      <div class="modal-body">
        <div class="container-fluid">

          <div class="card-body">
            <form method="POST" action="../vista/especialidad/nuevo.php" autocomplete="off">
              <div class="row">

                <div class="col-md-8 pr-0">
                  <div class="form-group">
                    <label class="bmd-label-floating">Especialidad</label>
                    <input type="text" name="nombrees" class="form-control" placeholder="Ingresa una especialidad">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Descripción</label>
                    <input type="text" name="descripcion" class="form-control" placeholder="Ingresa una descripción">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group form-group-default">
                    <label>Estado</label>
                    <select class="form-control" name="estado">
                      <option value="activo">Activo</option>
                      <option value="inactivo">Inactivo</option>
                    </select>
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <!--<label class="bmd-label-floating" type ="hiden" >usuario</label>-->
                    <input type="hidden" name="usu_registro" class="form-control" value="<?php echo ucfirst($_SESSION['nombre']); ?>" placeholder="Ingresa una descripción">
                  </div>
                </div>
              </div>

              <button type="submit" name="agregar" class="btn btn-primary pull-right">Agregar</button>
              <div class="clearfix"></div>
            </form>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>
<!-- -->