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
			echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
			// REDIRECCIÓN AL INDEX.PHP PARA QUE INICIE SESIÓN
			echo '<script> window.location="../index.php"; </script>';
		}
	}



// if(!empty($_POST)){
// 	if(isset($_POST["usuario"]) &&isset($_POST["password"])){
// 		if($_POST["usuario"]!=""&&$_POST["password"]!=""){
// 			include ("../php/conexion_sesion.php");
// 			$usuario = $_POST['usuario'];
// 			$password = $_POST['password'];
// 			$user_id=null;
// 			$sql1= "SELECT * FROM usuario WHERE usuario = '$usuario' AND password = '$password'";
// 			$query = pg_query($sql1) or die (pg_last_error());
// 			while ($r=pg_fetch_array ($query)) {
// 				$user_id=$r["usuario"];
// 				break;
// 			}
// 			if($user_id==null){
// 				print "<script>alert(\"Acceso invalido.\");window.location='../vistas/login.php';</script>";
// 			}else{
// 				session_start();
// 				$_SESSION["user_id"]=$user_id;
// 				print "<script>window.location='../vistas/home.php';</script>";
// 			}
// 		}
// 	}
// }
?>