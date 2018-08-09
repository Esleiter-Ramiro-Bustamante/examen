<?php 

session_start();
session_destroy();

//header("Location:../view/inicio.php");

header('location:script/reload.php?msj=DEL SISTEMA&tp=error&tl=CERRANDO SESION&p=error');
 ?>