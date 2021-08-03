<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
		body{
			font-family: 'Times New Roman';
			background-color: #846C5B;
		}
		table,tr,td{
			border-width: 3px;

		}
		table{
			box-shadow: 5px 5px 10px #888888;
			background-color: #C7A27C;
		}
		.card{
			background-color: #B2945B;
			margin-top: 100px;
			box-shadow: 5px 5px 10px #DFD5A5;
		}
		h1{
			font-size: 22px;
		}
		.texto{
			font-size: 24px;
		}
	</style>
</head>
<body>
	<center>
	<div class="card" style="width: 38rem;">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <center>
    <h3>Consulta de libros</h3>
<?php
echo "<center>";
$codigo=$_POST['codigo'];
include("conectar.php");
mysqli_select_db($conexion,$bdd);
mysqli_set_charset($conexion,"utf8");
$consulta="select * from registrar_libro where codigo='$codigo'";
$tabla=mysqli_query($conexion,$consulta);
$datos=mysqli_fetch_array($tabla, MYSQLI_ASSOC);
$registros=mysqli_num_rows($tabla);
if ($registros==0) {
	echo "<p align=center>No existe el no. de identidad</p>";
	mysqli_close($conexion);
	exit();
}

echo "<table border=1px>";
echo "<tr>";
echo "<td> Nombre del libro:"."<td>".$datos['nombre_libro']."</td>";
echo "</tr>";
echo "<td> Nombre del autor:"."<td>".$datos['nombre_autor']."</td>";
echo "</tr>";
echo "<td> Codigo del libro:"."<td>".$datos['codigo']."</td>";
echo "</tr>";
echo "<td> Fecha:"."<td>".$datos['fecha']."</td>";
echo "</tr>";
echo "</table>";
echo "<br>";
echo "<h1>Si deseas consultar otro libro Clic en consultar</h1>";
echo "<br>";
echo "<a class='btn btn-success' href='consultar.html'>Consultar</a>";
echo "</center>";
mysqli_close($conexion);
?>
  </div>
</div>
<br>
    <p class="texto">Si quieres ver el listado de los libros Clic en listado</p>
	<a class="btn btn-danger" href="listado.php">Listado</a>
	</center>
</body>
</html>