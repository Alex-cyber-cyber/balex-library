<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CONSULTA POR CODIGO</title>
</head>
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
<body>
<div class="caja">
	<center>
<h3 align=center>CONSULTA DE LIBROS SEGUN CODIGO</h3>

<?php
$codigo=$_POST["codigo"];
include("conectar.php");
mysqli_set_charset($conexion, "utf8");
   $consulta="select * from registrar_libro where codigo='$codigo'"; 
   $tabla=mysqli_query($conexion, $consulta); 
   $datos=mysqli_fetch_array($tabla, MYSQLI_ASSOC); 
   $registros=mysqli_num_rows($tabla);
   if ($registros==0){ 
   	  echo "<p align=center>No existe el libro.";
   	  mysqli_close($conexion); 
      exit();
   }
?>
<form action="guardar_modificacion.php" method="POST"> 
<table border=1 align=center>

<tr>
<td>NOMBRE DEL LIBRO:</td>
<td>
<input type="text" name="nombre_libro"  value="<?php echo $datos['nombre_libro']?>">
</td>
</tr>

<tr>
<td>NOMBRE DEL AUTOR</td>
<td>
<input type="text" name="nombre_autor" value="<?php echo $datos['nombre_autor'] ?>">
</td> 
</tr>

<tr>
<td>CODIGO</td>
<td> <input type="text" name="codigo" value="<?php echo $datos['codigo'] ?>">
</td>
</tr>

<tr>
<td>FECHA </td> 
<td>
<input type="text" name="fecha" value="<?php echo $datos['fecha'] ?>"> 
</td>
</tr>

<tr>
<td align="center" colspan="2"> 
<input type="submit" value="Modificar">
</td>
</tr>

</table>
</form>
</div>
<br><br>
<center>
<a href="two.html" class="btn-1">Regresar al menu</a>
</center>

</body>
</html>