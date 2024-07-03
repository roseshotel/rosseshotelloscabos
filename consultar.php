<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> CONSULTAS </title>
</head>
<body>
	<?php
	$conexion=mysqli_connect("localhost","root","") or die("Problemas en la conexion");
	mysqli_select_db($conexion,"roses_hotel") or die("Problemas en la selección de la base de datos");
	$contrasena=$_POST['contrasena'];
	

	 if (isset($_POST['consultar'])) {
	 	$consultar="SELECT * FROM reservaciones WHERE contrasena='$contrasena'";
	 	$sql=mysqli_query($conexion, $consultar);
	 	while ($mostrar=mysqli_fetch_array($sql)){

	 		echo "CODIGO DE RESERVACION:".$mostrar['codigo'];
	 		echo "<br><br>";
	 		echo "Nombre(S):".$mostrar['nombre'];
	 		echo "<br><br>";
	 		echo "APELLIDO:".$mostrar['apellido'];
	 		echo "<br><br>";
	 		echo "CORREO ELECTRÓNICO:".$mostrar['correo'];
	 		echo "<br><br>";
	 		echo "CONTRASEÑA:".$mostrar['contrasena'];
	 		echo "<br><br>";
	 		echo "TELÉFONO:".$mostrar['telefono'];
	 		echo "<br><br>";
	 		echo "HABITACIÓN:".$mostrar['habitaciones'];
	 		echo "<br><br>";
	 		echo "CHECK-IN:".$mostrar['entrada'];
	 		echo "<br><br>";
	 		echo "CHECK-OUT:".$mostrar['salida'];
	 		echo "<br><br>";
	 		echo "ADULTOS:".$mostrar['adultos'];
	 		echo "<br><br>";
	 		echo "NIÑOS:".$mostrar['ninos'];
	 		echo "<br><br>";
	 		echo "<br> <hr>";
	 	}
	 }
	?>

</body>
</html>