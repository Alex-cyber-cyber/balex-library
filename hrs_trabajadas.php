<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style type="text/css">
	body{
			background-color: #846C5B;
			font-family: 'Times New Roman';
		}
		.card{
			width: 900px;
			margin-top: 20px;
  box-shadow: 5px 10px 18px #EDD9A3;
  text-align: center;
		}
		.card{
			 background-color: #D8BFAA;
		}
		h5{
			font-size: 32px;
		}
</style>
</head>
<body>
	<center>
	<div class="card" style="width: 28rem;">
  <div class="card-body">
    <h5 class="card-title">Registro de horas trabajadas</h5>
   <center>
<?php
include("conectar.php");
mysqli_set_charset($conexion,"utf8"); 
$id_usuario=$_POST['id_usuario'];
$nombre=$_POST['nombre'];
$cobro_hrs=$_POST['cobro_hrs'];
$inicio_hrs=$_POST['inicio_hrs'];
$fin_hrs=$_POST['fin_hrs'];
$total=($inicio_hrs-$fin_hrs)*$cobro_hrs;
$consulta="SELECT * FROM hrs_trabajadas WHERE id_usuario='$id_usuario'";
$busqueda=mysqli_query($conexion,$consulta); 
$nr=mysqli_num_rows($busqueda); 
if ($nr!=0){
    echo "<h3 align=center style='color: red;'>Ya existe ese No. de identidad.</h3>";
    mysqli_close($conexion); 
    echo '<a href="hrs_trabajadas.html">Regresar</a>'; 
exit();
}
$agregar="insert into hrs_trabajadas (id_usuario,nombre,cobro_hrs,inicio_hrs,fin_hrs,total) values ('$id_usuario','$nombre',$cobro_hrs,$inicio_hrs,$fin_hrs,$total)";
mysqli_query($conexion,$agregar);
if (mysqli_affected_rows($conexion)!=1) {
echo "<h2 align=center style='color:red;'>No se pudo agregar el registro.</h2>"; } 
else {
echo "<h2 align=center style='color:green; '>Proceso completado con exito.</h2>";
echo '<a href="hrs_trabajadas.html">Regresar</a>'; }
mysqli_close($conexion);
?>
<br><br>
<center>
<a href="hrs_trabajadas.html" class="btn-1">Regresar al menu</a>
  </div>
</div>
	
</center>
</center>
</body>
</html>