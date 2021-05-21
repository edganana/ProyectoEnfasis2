<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql= "insert into historiasclinicas (hisFechCreacion, hisFechModificacion, hisObservaciones, nomAniCompania) values ('$_REQUEST[creacion]','$_REQUEST[modificacion]','$_REQUEST[observaciones]','$_REQUEST[mascota]')";

$resultado = $objConexion->query($sql);

if($resultado)
{
		header("location:../Vista/index2.php?pag=agregarHistoriaClinica&msj=1");
}
else
{
		header("location:../Vista/index2.php?pag=agregarHistoriaClinica&msj=2");
}
?>
