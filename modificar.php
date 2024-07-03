<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> MODIFICACIONES </title>
</head>
<body>
	<?php
	$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
	mysqli_select_db($conexion,"roses_hotel")or die("Problemas en la seleccion de la base de datos");
	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
	$contrasena=$_POST['contrasena'];
	$telefono=$_POST['telefono'];
	$habitaciones=$_POST['habitaciones'];
	$entrada=$_POST['entrada'];
	$salida=$_POST['salida'];
	$adultos=$_POST['adultos'];
	$ninos=$_POST['ninos'];

	if (isset($_POST['modificar'])) {
		$modificar="UPDATE  reservaciones SET nombre='$nombre', apellido='$apellido', correo='$correo', contrasena='$contrasena', telefono='$telefono', habitaciones='$habitaciones', entrada='$entrada', salida= '$salida', adultos='$adultos', ninos='$ninos' WHERE codigo='$codigo' ";
		$sql=mysqli_query($conexion, $modificar);
	}
	echo "Se ha modificado correctamente tu reservación";
	?>
</body>
</html>