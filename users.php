<?php 
require ('bd.php');
session_start();

$c = new bd();
$conexion = $c->conexion();


$user = $conexion->real_escape_string(htmlentities($_POST['usuario']));
$pass = $conexion->real_escape_string(htmlentities($_POST['pass']));
$error = '';
$sha1_pass = sha1($pass);




$logeo = $conexion->query("SELECT * FROM login WHERE usuario='$user' AND pass='$sha1_pass' ");

if ($resul = mysqli_fetch_array($logeo)) {
	$user = $user;
	$user = strtoupper($user);
	echo $str;
	$_SESSION['u_usuario'] = $user;
	//header("Location:index.php");
	header('location:script/reload.php?msj=AL SISTEMA&tp=success&tl=BIENVENIDO&p=open1');


} else {
	
	
	header('location:script/reload.php?msj=DATOS INCORRECTOS&tp=error&tl=ERROR&p=error');


}


?>