<!DOCTYPE html>
<html>
<head>
	<title></title>
		<!-- HOJA DE ESTILO PARA SWEETALERT (ALERTAS DE JAVASCRIPT) -->
    <link href="../css/sweetalert.css" rel="stylesheet">
    <!-- JAVASCRIPT PARA SWEETALERT -->
    <script src="../js/sweetalert.min.js"></script>
</head>
<body>

<?php 

	
    // PARA EVITAR QUE SE MUESTREN LAS NOTICIAS DE ALERTA DE PHP
    error_reporting(E_ALL ^ E_NOTICE);
    // INICIAR LA SESIÓN - DEBE IR EN TODAS LAS PÁGINAS
    session_start();
    // CONEXION A LA BASE DE DATOS AURELIS_USUARIOS - DEBE IR EN TODAS LAS PÁGINAS
    include '../php/conexion_aurelis.php';
    function notificar(cliente){

    	// SE RECIBE LA CLAVE PRIMARIA cliente
	// $cliente = $_POST['cliente'];

	echo    '<script> swal({
						  title: "Eliminar Cliente",
						  text: "¿Desea Eliminar el Cliente"'; ?> <?php cliente echo '?",
						  type: "success",
						  showCancelButton: false,
						  confirmButtonColor: "#337ab7",
						  confirmButtonText: "OK",
						  closeOnConfirm: false,
						  closeOnCancel: true
						},
						function(isConfirm){
						  if (isConfirm) {
						    window.location="../php/eliminarCliente.php";
						  } else {
						    window.location="../vistas/clientes.php";
						  }
					});
			</script>';

    }
    
?>

</body>
</html>