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
    <title>Inicio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS PERSONALIZADO -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
</head>
<body class="font-cover" style="background-image: url('img/MaterialFontLogin.jpg')">
  <div class="container">
    <div class="container-login center-align" style="border-radius: 10px; box-shadow: 8px 8px 8px black;">
        <div style="margin:15px 0;">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            <p>Inicio de Sesión</p>
        </div>
        <!-- FORMULARIO QUE TRABAJA CON LOGIN.PHP PARA REALIZAR EL INICIO DE SESIÓN -->
        <form action="http://localhost/aurelis2/php/login.php" method="post">
          <div class="input-field">
              <input type="text" style="margin:20px 0;" name="usuario">
              <label><i class="zmdi zmdi-account"></i>&nbsp; Usuario</label>
          </div>
          <div class="input-field col s12">
              <input type="password" style="margin:20px 0;" name="password">
              <label><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña</label>
          </div>
        
          <br>
          <button class="btn btn-primary waves-effect waves-light" type="submit" style="color: black;"> INGRESAR 
            <i class="zmdi zmdi-mail-send"></i>
            <!-- <a id="login" href="vistas/aurelis.php" style="background: #26a69a; color: black;">Ingresar &nbsp; 
              <i class="zmdi zmdi-mail-send"></i>
            </a> -->
          </button>
        </form>
        <br><br>
    </div>
  </div>
</body>
</html>
