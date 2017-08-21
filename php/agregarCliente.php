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

    // RECIBIR LOS DATOS DESDE EL FORMULARIO (modalNuevoC.php)
    $nacionalidad = $_POST['nacionalidad']; // NACIONALIDAD DEL CLIENTE
    $ciRif = $_POST['ciRif']; // CÉDULA O RIF DEL CLIENTE
	$nombreC = $_POST['nombreC']; // NOMBRE DEL CLIENTE
	$apellidoC = $_POST['apellidoC']; // APELLIDO DEL CLIENTE
	$telefonoPC = $_POST['tlfPC']; // TELÉFONO PRINCIPAL DEL CLIENTE
	$telefonoOC = $_POST['tlfOC']; // TELÉFONO OPCIONAL DEL CLIENTE
	$direccion = $_POST['direccion']; // DIRECCIÓN DEL CLIENTE

	// CONSULTA PARA VERIFICAR SI EL CLIENTE YA EXISTE
	$cedula = pg_query("SELECT ci_rif FROM clientes WHERE ci_rif = '$ciRif'");
	$cedula = pg_fetch_assoc($cedula);
	$cedula = $cedula['ci_rif'];

	// CONDICIONAL PARA VERIFICAR SI EL CLIENTE YA EXISTE
	if ($cedula == $ciRif) {
		// MENSAJE DE VALORES INCORRECTOS (JAVASCRIPT)
		echo '<script> swal({
				  title: "ERROR",
				  text: "Cliente ya existente.",
				  type: "error",
				  showCancelButton: false,
				  confirmButtonColor: "#DD6B55",
				  confirmButtonText: "OK",
				  closeOnConfirm: false,
				  closeOnCancel: false
				},
				function(isConfirm){
				  if (isConfirm) {
				    window.location="../vistas/clientes.php";
				  } else {
				    swal("Cancelled", "Your imaginary file is safe :)", "error");
				  }
				});
				</script>';
	  // CONDICIONAL PARA ASEGURAR QUE LAS VARIABLES NO ESTEN VACIAS
	} elseif (($nacionalidad) && ($ciRif) && ($nombreC) && ($apellidoC) && ($telefonoPC) && ($telefonoOC) && ($direccion)) {

			// CONSULTA PARA INSERTAR EN LA TABLA clientes
			$consulta = "INSERT INTO clientes (nacionalidad, ci_rif, nombre, apellido, telefono1, telefono2, direccion)
						 VALUES ('$nacionalidad', '$ciRif', '$nombreC', '$apellidoC', '$telefonoPC', '$telefonoOC', '$direccion')";

			$consulta= pg_query($consulta) or die (pg_last_error());

			// SE REDIRECCIONA A LA VISTA CLIENTES.PHP 
		    echo '  <script> swal({
							  title: "Nuevo Cliente",
							  text: "¡Cliente Registrado con Éxito!",
							  type: "success",
							  showCancelButton: false,
							  confirmButtonColor: "#337ab7",
							  confirmButtonText: "OK",
							  closeOnConfirm: false,
							  closeOnCancel: false
							},
							function(isConfirm){
							  if (isConfirm) {
							    window.location="../vistas/clientes.php";
							  } else {
							    swal("Cancelled", "Your imaginary file is safe :)", "error");
							  }
							});
					</script>';
			// CONDICIONAL PARA ASEGURAR QUE LAS VARIABLES NO ESTEN VACIAS, EXCEPTO EL TELEFONO OPCIONAL
		}elseif (($nacionalidad) && ($ciRif) && ($nombreC) && ($apellidoC) && ($telefonoPC) && ($direccion)) {
			// CONSULTA PARA INSERTAR EN LA TABLA clientes
			$consulta = "INSERT INTO clientes (nacionalidad, ci_rif, nombre, apellido, telefono1, telefono2, direccion)
						 VALUES ('$nacionalidad', '$ciRif', '$nombreC', '$apellidoC', '$telefonoPC', '', '$direccion')";

			$consulta= pg_query($consulta) or die (pg_last_error());

			// SE REDIRECCIONA A LA VISTA CLIENTES.PHP 
		    echo '  <script> swal({
							  title: "Nuevo Cliente",
							  text: "¡Cliente Registrado con Éxito!",
							  type: "success",
							  showCancelButton: false,
							  confirmButtonColor: "#337ab7",
							  confirmButtonText: "OK",
							  closeOnConfirm: false,
							  closeOnCancel: false
							},
							function(isConfirm){
							  if (isConfirm) {
							    window.location="../vistas/clientes.php";
							  } else {
							    swal("Cancelled", "Your imaginary file is safe :)", "error");
							  }
							});
					</script>';
		}else {
			// MENSAJE DE VALORES INCORRECTOS (JAVASCRIPT)
				echo '<script> swal({
						  title: "ERROR",
						  text: "Falta llenar campo(s).",
						  type: "error",
						  showCancelButton: false,
						  confirmButtonColor: "#DD6B55",
						  confirmButtonText: "OK",
						  closeOnConfirm: false,
						  closeOnCancel: false
						},
						function(isConfirm){
						  if (isConfirm) {
						    window.location="../vistas/clientes.php";
						  } else {
						    swal("Cancelled", "Your imaginary file is safe :)", "error");
						  }
						});
						</script>';
		}
?>

</body>
</html>
