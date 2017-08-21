<!DOCTYPE html>
<html>
<head>
	<title></title>
    <!-- FUNCIONES CRUD PARA CLIENTE -->
	<script src="../js/funcionesCliente.js"></script>
</head>
<body>
<?php
    // PARA EVITAR QUE SE MUESTREN LAS NOTICIAS DE ALERTA DE PHP
    error_reporting(E_ALL ^ E_NOTICE);
    // INICIAR LA SESIÓN
    session_start();
    // CONEXION A LA BASE DE DATOS AURELIS
	include('../php/conexion_aurelis.php');
	// CONSULTA PARA OBTENER TODOS LOS REGISTROS DE LA TABLA clientes
	$consulta1 = pg_query("SELECT * FROM clientes") or die (pg_last_error());
	// CICLO PARA MOSTRAR REGISTRO POR REGISTRO EN LA TABLA
	while($consulta = pg_fetch_array($consulta1)){
		echo '<tr>
				<td>'.$consulta['nacionalidad'].'.-'.$consulta['ci_rif'].'</td>
				<td>'.$consulta['nombre'].' '.$consulta['apellido'].'</td>
				<td>'.$consulta['telefono1'].'</td>
				<td>'.$consulta['telefono2'].'</td>
				<td>'.$consulta['direccion'].'</td>

				<td>
					<!-- REFERENCIA A LA FUNCIÓN editarCliente UBICADA EN funcionesCliente.js -->
					<a href="javascript:modificarCliente('.$consulta['cliente'].');" class="glyphicon glyphicon-edit">
					</a>
					<!-- REFERENCIA A LA FUNCIÓN eliminarCliente UBICADA EN funcionesCliente.js -->
					<a href="javascript:eliminarCliente('.$consulta['ci_rif'].');" class="glyphicon glyphicon-remove-circle">
					</a>
				</td>
			</tr>';
	}
?>

</body>
</html>
