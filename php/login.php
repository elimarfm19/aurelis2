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
	// INICIAR LA SESIÓN
	session_start(); 
	// CONEXION A LA BASE DE DATOS AURELIS_USUARIOS
	include 'conexion_usuarios.php';
	// VARIABLES QUE RECIBEN LOS DATOS ENVIADOS DESDE EL FORMULARIO UBICADO EN
	// INDEX.PHP MEDIANTE EL METODO POST
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	// CONDICIONAL PARA ASEGURAR QUE LAS VARIABLES NO ESTEN VACIAS
	if (isset($usuario) && isset($password)) {
		// CONSULTA A LA BD, DONDE SE EXTRAE EL USUARIO DE LA BD
		$query = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
		// EJECUTA LA FUNCION DE CONSULTA CON PG_QUERY
		$consulta = pg_query($query);
		// CONDICIONAL PARA ASEGURAR QUE SE OBTUVO ALGÚN REGISTRO DE LA BD MEDIANTE LA FUNCIÓN
		// PG_NUM_ROWS, RESULTADO BOOLEANO
		if(pg_num_rows($consulta) == true){
			// VARIABLE QUE GUARDA EL REGISTRO OBTENIDO PARA ACCEDER A SUS VALORES COMO UN ARRAY
			$fila = pg_fetch_array($consulta);
			// VARIABLE DE SESIÓN QUE GUARDA EL USUARIO QUE SE LOGUEO
			$_SESSION['usuario']=$fila['usuario'];
			// REDIRECCIÓN A LA PÁGINA PRINCIPAL AURELIS.PHP (JAVASCRIPT)
			echo '<script> window.location="../vistas/aurelis.php"; </script>';
		}else{
			// MENSAJE DE VALORES INCORRECTOS (JAVASCRIPT)
			echo '<script> swal({
					  title: "ERROR",
					  text: "Usuario o Contraseña Incorrectos",
					  type: "error",
					  showCancelButton: false,
					  confirmButtonColor: "#DD6B55",
					  confirmButtonText: "OK",
					  closeOnConfirm: false,
					  closeOnCancel: false
					},
					function(isConfirm){
					  if (isConfirm) {
					    window.location="../index.php";
					  } else {
					    swal("Cancelled", "Your imaginary file is safe :)", "error");
					  }
					});
					</script>';
			// echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
			// REDIRECCIÓN AL INDEX.PHP PARA QUE INICIE SESIÓN
			// echo '<script> window.location="../index.php"; </script>';
		}
	}
?>
</body>
</html>