<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" >
</head>
<body>
<?php
include("conectar.php");
mysqli_set_charset($conexion,"utf8"); 
$id_empleado=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$fecha_iniciar=$_POST['fecha_iniciar'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$hrs_trabajadas=$_POST['hrs_trabajadas'];
$cargo=$_POST['cargo']; 
$consulta="SELECT * FROM registrar_empleado WHERE id_empleado='$id_empleado'";
$busqueda=mysqli_query($conexion,$consulta); 
$nr=mysqli_num_rows($busqueda); 
if ($nr!=0){
    echo "<h3 align=center style='color: red;'>Ya existe ese No. de identidad.</h3>";
    mysqli_close($conexion); 
    echo '<a href="registrar_empleado.html">Regresar</a>'; 
exit();
}
$agregar="insert into registrar_empleado (id_empleado,nombre,fecha_iniciar,correo,telefono,hrs_trabajadas,cargo) values ('$id_empleado','$nombre','$fecha_iniciar','$correo',$telefono,$hrs_trabajadas,'$cargo')";
mysqli_query($conexion,$agregar);
if (mysqli_affected_rows($conexion)!=1) {
echo "<h2 align=center style='color:red;'>No se pudo agregar el registro.</h2>"; } else {
echo "<h2 align=center style='color:green; '>Proceso completado con exito.</h2>";
echo '<a href="registrar_empleado.html">Regresar</a>'; }
mysqli_close($conexion);
?>
<br><br>
<center>
<a href="registrar_empleado.html" class="btn-1">Regresar al menu</a>
</center>
</body>
</html>