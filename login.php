<div class="text-center m-5">
<?php session_start();?>
<html>
<head>
<meta charset="utf-8">
<title>Login de usuarios</title>
</head>
<body>
<?php
$usuario=$_POST['usuario'];
$password=md5($_POST['password']);

include("conexion.php");

$consulta=mysqli_query($conexion, "SELECT nombre, apellido, email FROM usuarios WHERE usuario='$usuario' AND password='$password'");

$resultado=mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_array($consulta);
	
	$_SESSION['nombre']=$respuesta['nombre'];
	$_SESSION['apellido']=$respuesta['apellido'];
		
		echo "Hola ".$_SESSION['nombre']." ".$_SESSION['apellido']."<br />";
		echo "Accediste al panel de usuarios.<br/>";
		echo "<a href='panel.php'>Comenzá a navegar</a>";
	

}else{
	echo "No es un usuario registrado";
	include ("acceso.html");
}

?>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">










