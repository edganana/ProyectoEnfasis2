<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql= "update empleados
set  empCargo = '$_REQUEST[cargo]', empSueldo = '$_REQUEST[sueldo]'
where empIdentificacion = '$_REQUEST[empIdentificacion]'";

$resultadoEmpleado = $objConexion->query($sql);

if ($resultadoEmpleado)	
	header("location:../Vista/index2.php?pag=listarEmpleado&msj=1");
else
	header("location:../Vista/index2.php?pag=listarEmpleado&msj=2");
$objConexion->close();
?>
