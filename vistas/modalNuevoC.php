  <div class="modal fade" id="nuevoC" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header nav navbar-inverse">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> CLIENTE NUEVO </h4>
        </div>
        <div class="modal-body" id="agregaClientes">
          <form action="http://localhost/aurelis2/php/agregarCliente.php" method="post">
            <div class="row">
              <div class="form-group col-lg-4 col-lg-offset-4">
                <?php 
                  // PARA EVITAR QUE SE MUESTREN LAS NOTICIAS DE ALERTA DE PHP
                    error_reporting(E_ALL ^ E_NOTICE);
                    // INICIAR LA SESIÓN - DEBE IR EN TODAS LAS PÁGINAS
                    session_start();
                    // CONEXION A LA BASE DE DATOS AURELIS_USUARIOS - DEBE IR EN TODAS LAS PÁGINAS
                    include '../php/conexion_aurelis.php';

                  // RECIBIR LOS DATOS DESDE EL FORMULARIO (modalNuevoC.php)
                  $nombreC = $_POST['nombreC']; // NOMBRE DEL CLIENTE
                  $apellidoC = $_POST['apellidoC']; // APELLIDO DEL CLIENTE
                  $telefonoPC = $_POST['tlfPC']; // TELEFONO PRINCIPAL DEL CLIENTE
                  $telefonoOC = $_POST['tlfOC']; // TELEFONO OPCIONAL DEL CLIENTE


                  // CONSULTA PARA BUSCAR EL ÚLTIMO ID DE CLIENTE
                  $ultimoC = pg_query("SELECT cliente FROM clientes ORDER BY cliente DESC LIMIT 1") or die (pg_last_error());
                  $cliente_ = pg_fetch_assoc($ultimoC);
                  $cliente= $cliente_['cliente'];
                  // CONVERSIÓN DE CHAR A INTEGER PARA SUMAR 1 AL ÚLTIMO ID DE CLIENTE
                  $cliente = ((int) $cliente) +1;
                ?>
                <label for="cliente">Código de Cliente</label>
                <?php 
                echo '<input type="text" class="form-control" readonly="readonly" name="cliente" placeholder='.$cliente.'>';
                ?>
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
                <input type="text" class="form-control" name="tlfPC">
              </div>
              <div class="form-group col-lg-6">
                <label for="tlfOC">Teléfono Opcional</label>
                <input type="text" class="form-control" name="tlfOC">
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Nuevo</button>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </div>
