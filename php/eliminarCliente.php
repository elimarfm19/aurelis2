<?php

    // PARA EVITAR QUE SE MUESTREN LAS NOTICIAS DE ALERTA DE PHP
    error_reporting(E_ALL ^ E_NOTICE);
    // INICIAR LA SESIÓN - DEBE IR EN TODAS LAS PÁGINAS
    session_start();
    // CONEXION A LA BASE DE DATOS CONEXIÓN-AURELIS - DEBE IR EN TODAS LAS PÁGINAS
    include '../php/conexion_aurelis.php';

    // SE RECIBE LA CLAVE PRIMARIA ci_rif
	$cliente = $_POST['cliente'];  

	// CONSULTA PARA ELIMINAR EL REGISTRO
	pg_query("DELETE FROM clientes WHERE ci_rif = '$cliente'");

	// SE REDIRECCIONA A LA VISTA CLIENTES.PHP 
	echo '<script> window.location="../vistas/clientes.php"; </script>';
?>

