<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> CANCELAR MI RESERVACIÓN </title>
</head>
<body>
	<?php
	$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
	mysqli_select_db($conexion,"roses_hotel")or die("Problemas en la seleccion de la base de datos");
	$codigo=$_POST['codigo'];

	if (isset($_POST['eliminar'])) {
		$eliminar="DELETE FROM reservaciones WHERE codigo='$codigo'";
		$sql=mysqli_query($conexion, $eliminar);
	}
	echo "Se ha eliminado tu reservación correctamente";

	?>

</body>
</html>