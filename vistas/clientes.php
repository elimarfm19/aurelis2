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
    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <!-- MENU SUPERIOR Y LATERAL DE LA PÁGINA PRINCIPAL -->
        <?php include '../php/menuClientes.php'; ?>

        <!-- **************************************CONTENIDO DE LA PÁGINA************************************* -->
        <div id="page-wrapper" style="background-image: url('../img/fondo_2.jpeg'); background-size: 100% 100%; width: 1141px; height: 559px;">

            <div class="container-fluid">

                <table class="tableClientes table-striped table-condensed table-hover">
            <tr>
                <th>ID Cliente</th>
                <th>Nombre y Apellido</th>
                <th>Telefono 1</th>
                <th>Telefono 2</th>
            </tr>
            <?php include '../php/listarClientes.php'; ?>
        </table>

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
    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

    <style type="text/css">
        /* PARA BAJAR LA TABLA (margin-top) */
        .tableClientes {
            width: 100%;
            max-width: 100%;
            margin-top: 10%;
            margin-bottom: 0px;
        }
        /* ALINEAR TEXTO DEL ENCABEZADO DE LA TABLA */
        th{
            text-align: center;
        }
        /* PARA EVITAR EL SCROLL VERTICAL */
        html,body { 
          overflow:hidden; 
        }
    </style>

</body>
</html>

<?php
// CONTINUACIÓN DE PHP 
}else{
    // DE NO SER EL USUARIO QUE INICIO SESIÓN SE REDIRECCIONA A INDEX.PHP
    echo '<script> window.location="../index.php"; </script>';
}
?>
