<?php
// Declarar las variables en donde se guardaran los valores de la conexion
$servidor="localhost";
$usuario="root";
$password="";
$Bd="actividades";
$conecta= mysqli_connect($servidor, $usuario, $password, $Bd);
if($conecta->connect_error){
	die("Error al conectar la base de datos de la pagina".$conecta->connect_error);
}
?>   