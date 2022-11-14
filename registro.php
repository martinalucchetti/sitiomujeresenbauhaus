<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>

<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$password = md5($_POST['password']);



	include("conexion.php");

	$_SESSION['nombre'] = $nombre;

	$consulta = mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, email, usuario, password) VALUES('$nombre','$apellido','$email', '$usuario', '$password')");


	header("Location:form_login.php");

?>	
    

</body>
</html>