  <div class="modal fade" id="nuevoC" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header nav navbar-inverse">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> CLIENTE NUEVO </h4>
        </div>
        <div class="modal-body">
          <form role="form" id="formularioC" onsubmit="return agregarCliente();">
            <div class="row">
              <div class="form-group col-lg-4 col-lg-offset-4">
                <label for="cliente">Código de Cliente</label>
                <input type="text" class="form-control" readonly="readonly" name="cliente">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">
                <label for="nombreC">Nombre</label>
                <input type="text" class="form-control" name="nombreC">
              </div>
              <div class="form-group col-lg-6">
                <label for="apellidoC">Apellido</label>
                <input type="text" class="form-control" name="apellidoC">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">
                <label for="tlfPC">Teléfono Principal</label>
                <input type="text" class="form-control" id="tlfPC">
              </div>
              <div class="form-group col-lg-6">
                <label for="tlfOC">Teléfono Opcional</label>
                <input type="text" class="form-control" id="tlfOC">
              </div>
            </div>
            <div id="mensaje"></div>
            <div class="modal-footer">
              <input type="submit" value="Nuevo" class="btn btn-info" id="nuevo"/>
              <input type="submit" value="Editar" class="btn btn-warning"  id="editar"/>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
