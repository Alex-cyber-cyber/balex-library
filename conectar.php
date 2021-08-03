<?php
$servidor="localhost";
$usuario="root"; 
$password="";
$bdd="libreria";
$conexion=mysqli_connect($servidor, $usuario, $password); 
mysqli_select_db($conexion, $bdd);

?>