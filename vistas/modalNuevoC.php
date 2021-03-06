<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- CSS PESONALIZADO -->
  <link href="../css/estiloAurelis.css" rel="stylesheet">
</head>
<body>
<div class="modal fade" id="nuevoC" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header nav navbar-inverse">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> CLIENTE NUEVO </h4>
        </div>
        <div class="modal-body" id="agregaClientes">
          <form action="http://localhost/aurelis2/php/agregarCliente.php" method="post" autocomplete="off">
            <div class="row">
              <div class="form-group col-lg-12">
                <label for="cliente">C.I. o RIF de Cliente</label> <br>
                <div class="col-lg-3">
                  <input type="radio" name="nacionalidad" value="V" required=""> Venezolano <br>
                  <input type="radio" name="nacionalidad" value="E" required=""> Extranjero <br>
                  <input type="radio" name="nacionalidad" value="J" required=""> Jurídico <br> 
                </div>
                <div class="col-lg-5"> <br>
                  <input type="text" class="form-control" name="ciRif" required="" pattern="[0-9]*" title="Utilice números">
                </div>
                <div class="col-lg-4">
                  <img class="imgCliente" src="../img/user.png" alt="UserImage">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">
                <label for="nombreC">Nombre</label>
                <input type="text" class="form-control" name="nombreC" required="" pattern="[a-zA-Z]*" title="Utilice letras">
              </div>
              <div class="form-group col-lg-6">
                <label for="apellidoC">Apellido</label>
                <input type="text" class="form-control" name="apellidoC" required="" pattern="[a-zA-Z]*" title="Utilice letras">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-6">
                <label for="tlfPC">Teléfono Principal</label>
                <input type="text" class="form-control" name="tlfPC" required="" pattern="[0-9]*" title="Utilice números">
              </div>
              <div class="form-group col-lg-6">
                <label for="tlfOC">Teléfono Opcional</label>
                <input type="text" class="form-control" name="tlfOC" pattern="[0-9]*" title="Utilice números">
              </div>
              <div class="form-group col-lg-12">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" name="direccion" required="">
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

</body>
</html>
  
