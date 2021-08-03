<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" >
</head>
<body>
<?php

include("conectar.php");
mysqli_set_charset($conexion,"utf8"); 
$nombre_libro=$_POST['nombre_libro'];
$nombre_autor=$_POST['nombre_autor'];
$codigo=$_POST['codigo'];
$fecha=$_POST['fecha'];


$consulta="SELECT * FROM registrar_libro WHERE nombre_libro='$nombre_libro'";
$busqueda=mysqli_query($conexion,$consulta); 
$nr=mysqli_num_rows($busqueda); 
if ($nr!=0){
    echo "<h3 align=center style='color: red;'>Ya existe ese libro.</h3>";

    mysqli_close($conexion); 
    echo '<a href="libro1.html">Regresar</a>'; 
exit();

}
$agregar="insert into registrar_libro (nombre_libro,nombre_autor,codigo,fecha) values ('$nombre_libro','$nombre_autor',$codigo,'$fecha')";

mysqli_query($conexion, $agregar);

if (mysqli_affected_rows($conexion)!=1) {

echo "<h2 align=center style='color:red;'>No se pudo agregar el registro.</h2>"; } else {

echo "<h2 align=center style='color:green; '>Proceso completado con exito.</h2>";

echo '<a href="libro1.html">Regresar</a>'; }

mysqli_close($conexion);

?>

<br><br>

</body>
</html>