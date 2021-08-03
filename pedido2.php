<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" >
</head>
<body>
<?php

include("conectar.php");
mysqli_set_charset($conexion,"utf8"); 
$id=$_POST['id'];
$nombre_libro=$_POST['nombre_libro'];
$nombre_autor=$_POST['nombre_autor'];
$codigo=$_POST['codigo'];



$agregar="insert into pedido (id,nombre_libro,nombre_autor,codigo) values ('$id','$nombre_libro','$nombre_autor',$codigo)";

mysqli_query($conexion, $agregar);

if (mysqli_affected_rows($conexion)!=1) {

echo "<h2 align=center style='color:red;'>No se pudo agregar el pedido.</h2>"; } else {

echo "<h2 align=center style='color:green; '>Proceso completado con exito.</h2>";

echo '<a href="pedido1.html">Regresar</a>'; }

mysqli_close($conexion);

?>

<br><br>

</body>
</html>