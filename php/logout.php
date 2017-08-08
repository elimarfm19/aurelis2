<?php
	// INICIAR LA SESIÓN
	session_start();
	// PARA DESTRUIR LA SESIÓN DEL USUARIO
	session_destroy();
	// REDIRECCIÓN A INDEX.PHP PARA INICIO DE SESIÓN
	echo '<script> window.location="../index.php"; </script>';
?>
