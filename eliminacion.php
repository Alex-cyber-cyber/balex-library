<!DOCTYPE html>
<html>
<head>
	<title>Eliminacion por codigo</title>

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
	<h3 align="center">ELIMINACION DE LIBROS SEGUN CODIGO</h3>
	<?php
	$codigo=$_POST['codigo'];
	include("conectar.php");
	mysqli_set_charset($conexion,"utf8");
	$consulta="select * from registrar_libro where codigo='$codigo'";
	$tabla=mysqli_query($conexion,$consulta);
	$datos=mysqli_fetch_array($tabla,MYSQLI_ASSOC);
	$registros=mysqli_num_rows($tabla);
	if ($registros==0){
		echo "<p align=center>No existe el codigo.</p>";
		mysqli_close($conexion);
		exit();
	}
	?>
	<form action="borrar_libros.php" method="POST">
		<table border="1" align="center">
			<tr>
				<td>nombre_libro</td>
				<td><input type="text" name="nombre_libro" readonly="" value="<?php echo $datos['nombre_libro'] ?>"></td>
			</tr>

			<tr>
				<td>nombre_autor</td>
				<td><input type="text" name="nombre_autor" readonly="" value="<?php echo $datos['nombre_autor'] ?>"></td>
			</tr>
			<tr>
				<td>codigo</td>
				<td><input type="text" name="codigo" readonly="" value="<?php echo $datos['codigo'] ?>"></td>
			</tr>
			<tr>
				<td>fecha</td>
				<td><input type="text" name="fecha" readonly="" value="<?php echo $datos['fecha'] ?>"></td>
			</tr>
			<tr>
				<td align="center" colspan="2">
					<input type="submit" value="Eliminar">
				</td>
			</tr>
		</table>
	</center>
	</form>

</body>
</html>