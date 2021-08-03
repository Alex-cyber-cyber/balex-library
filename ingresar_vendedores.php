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
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$contraseña=$_POST['contraseña']; 
$consulta="SELECT * FROM registro WHERE id='$id'";
$busqueda=mysqli_query($conexion,$consulta); 
$nr=mysqli_num_rows($busqueda); 
if ($nr!=0){
    echo "<h3 align=center style='color: red;'>Ya existe ese No. de identidad.</h3>";
    mysqli_close($conexion); 
    echo '<a href="ingresar_vendedores.html">Regresar</a>'; 
exit();
}
$agregar="insert into registro (id,nombre,correo,telefono,contraseña) values ('$id','$nombre','$correo',$telefono,'$contraseña')";
mysqli_query($conexion,$agregar);
if (mysqli_affected_rows($conexion)!=1) {
echo "<h2 align=center style='color:red;'>No se pudo agregar el registro.</h2>"; } else {
echo "<h2 align=center style='color:green; '>Proceso completado con exito.</h2>";
echo '<a href="ingresar_vendedores.html">Regresar</a>'; }
mysqli_close($conexion);
?>
<br><br>
<center>
<a href="../menu/index.html" class="btn-1">Regresar al menu</a>
</center>
</body>
</html>