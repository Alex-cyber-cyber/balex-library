<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
			body{
			background-color: #846C5B;
			font-family: 'Times New Roman';
		}
		.card{
			width: 900px;
			margin-top: 100px;
  box-shadow: 5px 10px 18px #EDD9A3;

		}
		.card{
			 background-color: #D8BFAA;
		}
	</style>
</head>
<body>
	<center>
	<div class="card" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title">Registrar Usuario</h5>
   <?php
include("conectar.php");
mysqli_set_charset($conexion,"utf8"); 
$identidad=$_POST['identidad'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$password=$_POST['password']; 
$consulta="SELECT * FROM registro WHERE id='$identidad'";
$busqueda=mysqli_query($conexion,$consulta); 
$nr=mysqli_num_rows($busqueda); 
if ($nr!=0){
    echo "<h3 align=center style='color: red;'>Ya existe ese No. de identidad.</h3>";
    mysqli_close($conexion); 
    echo '<a href="registrar_usuario.html">Regresar</a>'; 
exit();
}
$agregar="insert into registro (id,nombre,correo,telefono,contraseña) values ('$identidad','$nombre','$correo',$telefono,'$password')";
mysqli_query($conexion,$agregar);
if (mysqli_affected_rows($conexion)!=1) {
echo "<h2 align=center style='color:red;'>No se pudo agregar el registro.</h2>"; } 
else {
	echo "<center>";
	echo "<div class='card1'>";
echo "<h2 align=center style='color:green; '>Proceso completado con exito.</h2>";
echo '<a href="two.html" class="btn btn-primary">Continuar</a>';
echo "</div>";
echo "</center>";
 }
mysqli_close($conexion);
?>
   
  </div>
</div>
	</center>
</body>
</html>