<!DOCTYPE html>
<html>
<head>
	<title>Listado de libros</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
		h3{margin: 0;}
		body{
			font-family: 'Times New Roman';
			background-color: #846C5B;
			
		}
		table{
			box-shadow: 5px 10px 18px #EDD9A3;
		}
		td{
			text-align: center;

		}
		th{
			background-color: #04AA6D;
			border-width: 4px;
		}
		tr:nth-child(even){
			background-color: #CBBF7A;
			border-width: 4px;
		}
		tr:hover{
			background-color: white;
			border-width: 4px;
		}
	</style>
</head>
<body>

	<center>
	<h3>Listado de libros 2021</h3>
	<?php
	include("conectar.php");
	mysqli_set_charset($conexion,"utf8");
	$consulta="SELECT * FROM registrar_libro";
	$tabla=mysqli_query($conexion,$consulta);
	$registros=mysqli_num_rows($tabla);
	echo "<table align=center border=1>";
	echo "<tr>";
	echo "<th>Nombre del libro</th>";
	echo "<th>Nombre del autor</th>";
	echo "<th>Codigo</th>";
	echo "<th>Fecha de ingreso</th>";
	echo "</tr>";
	for ($fila=1; $fila<=$registros;$fila++){ 
		echo "<tr>";
		$datos=mysqli_fetch_array($tabla);
		echo "<td>".$datos[0]."</td>";
		echo "<td>".$datos[1]."</td>";
		echo "<td>".$datos[2]."</td>";
		echo "<td>".$datos[3]."</td>";
		echo "</tr>";
	}
	echo "</table>";

	?>
	<p>Si deseas modificar dale clic al boton</p>
	<a class="btn btn-light" href="modificar_libro.html" role="button">Modificar</a>
</center>
</body>
</html>