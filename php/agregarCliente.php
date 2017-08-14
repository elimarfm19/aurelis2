<!DOCTYPE html>
<html>
<head>
	<title></title>
    <!-- FUNCIONES CRUD PARA CLIENTE -->
	<script src="../js/funcionesCliente.js"></script>
</head>
<body>

<?php  
	// PARA EVITAR QUE SE MUESTREN LAS NOICIAS DE ALERTA DE PHP
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
	$cliente= $result['cliente'];
	// CONVERSIÓN DE CHAR A INTEGER PARA SUMAR 1 AL ÚLTIMO ID DE CLIENTE
	$cliente = ((int) $cliente) +1;

	// CONSULTA PARA INSERTAR EN LA TABLA clientes
	$consulta = "INSERT INTO clientes (cliente, nombre, apellido, telefono1, telefono2)
				 VALUES ('$cliente', '$nombreC', '$apellidoC', '$telefonoPC', '$telefonoOC')";

	$consulta= pg_query($consulta) or die (pg_last_error());

	// SE REDIRECCIONA A LA VISTA CLIENTES.PHP 
	echo '<script> window.location="../vistas/clientes.php"; </script>';
?>

</body>
</html>