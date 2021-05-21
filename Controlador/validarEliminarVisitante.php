<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql= "delete visitantes set identificacion= '$_REQUEST[identificacion]', nombres= '$_REQUEST[nombres]', apellidos= '$_REQUEST[apellidos]', claseVisita= '$_REQUEST[claseVisita]', dependencia= '$_REQUEST[dependencia]', funcionario= '$_REQUEST[funcionario]' , fechaIngreso='$_REQUEST[fechaIngreso]' , hora='$_REQUEST[hora]' , horaSalida='$_REQUEST[horaSalida]' , observaciones='$_REQUEST[observaciones]'
where idVisitante = '$_REQUEST[idVisitante]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header ("location:../Vista/index2.php?=listarVisitante&msj=3");//x=3 quiere decir que se actualizó bien
		
else 
	header ("location:../Vista/index2.php?=listarVisitante&msj=4"); //x=4 quiere decir que se pudo actualizar



?>