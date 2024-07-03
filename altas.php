<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> ALTAS </title>
</head>
<body>
	<?php
	$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
	mysqli_select_db($conexion,"roses_hotel")or die("Problemas en la seleccion de la base de datos");
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


	if (isset($_POST['insertar'])) {
		$insertar="INSERT INTO reservaciones (nombre, apellido, correo, contrasena, telefono, habitaciones, entrada, salida,
		adultos, ninos) VALUES ('$nombre', '$apellido', '$correo', '$contrasena', '$telefono', '$habitaciones', '$entrada', '$salida',
		'$adultos', '$ninos')";
		$sql=mysqli_query($conexion, $insertar); 
	}
	echo "Se ha registrado correctamente tu reservación";
	echo("<br>"); 
	echo "Gracias por reservar en ROSSE'S HOTEL";
	?>
</body>
</html>