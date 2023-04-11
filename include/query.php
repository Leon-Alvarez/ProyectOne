<?php 
include 'include/conecta.php';
$usuarios="SELECT * FROM usuario";
$ejecutar=$conecta->query($usuarios);
$separar=$ejecutar->fech->array();
?>