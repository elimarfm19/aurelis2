<?php
    include('../php/conexion_aurelis.php');

    $cliente = $_POST['cliente'];

//OBTENEMOS LOS VALORES--------------------------------------------------------------------

    $consulta = pg_query("SELECT * FROM clientes WHERE ci_rif = '$cliente'");
    $consulta2 = pg_fetch_array($consulta) or die (pg_last_error());

    $datos = array(
				0 => $consulta2['nacionalidad'], 
				1 => $consulta2['ci_rif'], 
				2 => $consulta2['nombre'], 
				3 => $consulta2['apellido'], 
				4 => $consulta2['telefono1'],
                5 => $consulta2['telefono2'],
                6 => $consulta2['direccion'],
				);
    echo json_encode($datos);
?>