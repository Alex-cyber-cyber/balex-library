<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.card{
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
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Borrar</h5>
    <?php
include("conectar.php");
$codigo=$_POST['codigo'];
$borrar="delete from registrar_libro where codigo='$codigo'";
mysqli_query($conexion,$borrar);
mysqli_close($conexion);
echo "<p align=center>Eliminacion exitosa.</p>";
?>

  </div>
</div>
</center>
</body>
</html>