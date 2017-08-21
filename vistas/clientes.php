<?php
    // PARA EVITAR QUE SE MUESTREN LAS NOICIAS DE ALERTA DE PHP
    error_reporting(E_ALL ^ E_NOTICE);
    // INICIAR LA SESIÓN - DEBE IR EN TODAS LAS PÁGINAS
    session_start();
    // CONEXION A LA BASE DE DATOS AURELIS_USUARIOS - DEBE IR EN TODAS LAS PÁGINAS
    include '../php/conexion_usuarios.php';
    // CONDICIONAL PARA ASEGURAR QUE SEA LA SESIÓN DEL USUARIO QUE INICIO SESIÓN
    if(isset($_SESSION['usuario'])) {?>
<!-- PHP CONTINUA AL FINAL DEL HTML -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Clientes</title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS PERSONALIZADO -->
    <link href="../css/estiloAurelis.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- FUNCIONES CRUD PARA CLIENTE -->
    <script src="../js/funcionesCliente.js"></script>
</head>

<body>
    <div id="wrapper">
        <!-- MENU SUPERIOR Y LATERAL DE LA PÁGINA PRINCIPAL -->
        <?php include '../php/menuClientes.php'; ?>

        <!-- **************************************CONTENIDO DE LA PÁGINA************************************* -->
        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- CONTENEDOR PARA HACER TABLA RESPONSIVE -->
                <div class="table-responsive col-md-10 col-md-offset-1" id="agregaClientes">
                    <!-- INCLUYE EL MODAL PARA REGISTRAR CLIENTE -->
                    <?php include '../vistas/modalNuevoC.php'; ?>
                    <!-- BOTÓN PARA LEVANTAR MODAL REGISTRAR CLIENTE -->
                    <button data-toggle="modal" data-target="#nuevoC" class="btn btnNuevoC btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span></button>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>C.I./RIF</th>
                                <th>Nombre y Apellido</th>
                                <th>Teléfono Principal</th>
                                <th>Teléfono Opcional</th>
                                <th>Dirección</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <!-- INCLUYE LA FUNCIÓN CON LA QUE SE LISTAN LOS CLIENTES EN LA TABLA -->
                        <?php include '../php/listarClientes.php'; ?>
                    </table>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- **************************************FIN CONTENIDO DE LA PÁGINA************************************* -->
    </div>

    <!-- FOOTER DE LA PÁGINA -->
    <?php include '../php/footer.php'; ?>


    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>


</body>
</html>

<?php
// CONTINUACIÓN DE PHP 
}else{
    // DE NO SER EL USUARIO QUE INICIO SESIÓN SE REDIRECCIONA A INDEX.PHP
    echo '<script> window.location="../index.php"; </script>';
}
?>
