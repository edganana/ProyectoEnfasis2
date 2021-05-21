<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql= "update historiasclinicas set hisFechCreacion= '$_REQUEST[hisFechCreacion]', hisFechModificacion= '$_REQUEST[hisFechModificacion]', hisObservaciones= '$_REQUEST[hisObservaciones]', nomAniCompania= '$_REQUEST[nomAniCompania]' where numHistoria= '$_REQUEST[numHistoria]' ";
$resultado=$objConexion->query($sql);

if ($resultado)	
	header("location:../Vista/index2.php?pag=listarHistoriaClinica&msj=1");
else
	header("location:../Vista/index2.php?pag=listarHistoriaClinica&msj=2");
$objConexion->close();
?>