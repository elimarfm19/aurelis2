<?php
  // INICIAR LA SESIÓN - DEBE IR EN TODAS LAS PÁGINAS
  session_start();
  // CONEXION A LA BASE DE DATOS AURELIS_USUARIOS - DEBE IR EN TODAS LAS PÁGINAS
  include 'php/conexion_usuarios.php';
  // CONDICIONAL PARA ASEGURAR QUE SEA LA SESIÓN DEL USUARIO QUE INICIO SESIÓN
  if(isset($_SESSION['usuario'])){
    // REDIRECCIONAMIENTO A AURELIS.PHP (JAVASCRIPT)
    echo '<script> window.location="vistas/aurelis.php"; </script>';
  }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>.: AURELIS :.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS PERSONALIZADO -->
    <link rel="stylesheet" href="css/estiloIndex.css">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <!-- HOJA DE ESTILO PARA SWEETALERT (ALERTAS DE JAVASCRIPT) -->
    <link href="css/sweetalert.css" rel="stylesheet">
    <!-- JAVASCRIPT PARA SWEETALERT -->
    <script src="js/sweetalert.min.js"></script>
</head>
<body class="font-cover">
  <div class="container">
    <div class="container-login center-align">
        <div class="inicioSesion">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            <p>Inicio de Sesión</p>
        </div>
        <!-- FORMULARIO QUE TRABAJA CON LOGIN.PHP PARA REALIZAR EL INICIO DE SESIÓN -->
        <form action="http://localhost/aurelis2/php/login.php" method="post">
          <div class="input-field">
              <input type="text" name="usuario">
              <label><i class="zmdi zmdi-account"></i>&nbsp; Usuario</label>
          </div>
          <div class="input-field col s12">
              <input type="password" name="password">
              <label><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña</label>
          </div>
        
          <br>
          <button class="btn btn-primary waves-effect waves-light" type="submit"> INGRESAR 
            <i class="zmdi zmdi-mail-send"></i>
            <!-- <a id="login" href="vistas/aurelis.php" style="background: #26a69a; color: black;">Ingresar &nbsp; 
              <i class="zmdi zmdi-mail-send"></i>
            </a> -->
          </button>
        </form>
       <!--  <script> sweetAlert("Oops...", "Something went wrong!", "error");</script> -->
        <br><br>
    </div>
  </div>
</body>
</html>
