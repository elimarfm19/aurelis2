<?php
	
	$user = 'postgres';         #USUARIO DE POSTGRES
	$password = '1234';           #PASSWORD DE POSTGRES
	$db = 'aurelis_usuarios';   #NOMBRE DE LA BASE DE DATOS
	$port = 5432;               #NUMERO DEL PUERTO
	$host = 'localhost';        #HOST

	#DETALLES DE LA CONEXIÓN
	$con = "host=$host port=$port dbname=$db user=$user password=$password";
 	
 	#FUNCION PARA LA CONEXION, FUNCION PARA CAPTURAR ERROR
	$dbconn = pg_connect($con) or die ("Error de conexion: ". pg_last_error());        

	// echo "Conexion exitosa <hr>";
 
?>