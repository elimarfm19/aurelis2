<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    // PARA EVITAR QUE SE MUESTREN LAS NOICIAS DE ALERTA DE PHP
    error_reporting(E_ALL ^ E_NOTICE);
    // INICIAR LA SESIÓN
    session_start();
    // CONEXION A LA BASE DE DATOS AURELIS
	include('../php/conexion_aurelis.php');

	$consulta1 = pg_query("SELECT * FROM clientes") or die (pg_last_error());

	while($consulta = pg_fetch_array($consulta1)){
		echo '<tr>
				<td>'.$consulta['idCliente'].'</td>
				<td>'.$consulta['nombre'].' '.$consulta['apellido'].'</td>
				<td>'.$consulta['telefono1'].'</td>
				<td>'.$consulta['telefono2'].'</td>
			</tr>';
	}
?>

	<style type="text/css">
		td{
			text-align: center;
		}	
	</style>
</body>
</html>
