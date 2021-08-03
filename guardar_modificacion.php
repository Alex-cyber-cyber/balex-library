<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
	table{
			 background-color: #D8BFAA;
			   box-shadow: 5px 10px 18px #EDD9A3;
			   margin-top: 150px;
		}
		body{
			background-color: #846C5B;
			font-family: 'Times New Roman';
		}
</style>
</head>
<body>
	<center>
<?php
include("conectar.php");
$nombre_libro=$_POST['nombre_libro'];
$nombre_autor=$_POST['nombre_autor'];
$codigo=$_POST['codigo'];
$fecha=$_POST['fecha'];
$consulta="update registrar_libro set nombre_libro='$nombre_libro', nombre_autor='$nombre_autor', fecha='$fecha' where codigo=$codigo";
mysqli_query($conexion, $consulta);

mysqli_close($conexion);
echo "<p align=center>Modificacion realizada con exito.</p>"
?>

<br><br>
<center>
<a href="two.html" class="btn-1">Regresar al menu</a>
</center>

</body>
</html>




