<?php
session_start();
extract ($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion= Conectarse ();

$pass = md5($_REQUEST['pass']);
$login = $_REQUEST['login'];

$objConexion=Conectarse();

$sql="select * from usuarios where usuLogin = '$login' and usuPassword = '$pass'";

$resultado=$objConexion->query($sql);

$existe = $resultado->num_rows;

if ($existe==1)  //quiere decir que los datos estan bien
{
	$usuario=$resultado->fetch_object();
	$_SESSION['user']= $usuario->usuLogin;	
	header("location:../Vista/index2.php?=contenido");
	
}
else
{
	header("location:../Vista/index2.php?=iniciarSesion&x=1");  //x=1, quiere decir que el usuario no esta registrado
}

?>