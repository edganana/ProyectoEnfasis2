<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql= "delete animalesdecompania set codigo= '$_REQUEST[codigo]', aniComNombre= '$_REQUEST[nombre]', aniComTipo= '$_REQUEST[tipo]' , aniComRaza= '$_REQUEST[raza]' , aniComColor= '$_REQUEST[color]', aniComGenero= '$_REQUEST[genero]', aniComEdad= '$_REQUEST[edad]' , aniComObservaciones= '$_REQUEST[observaciones]', nomAdoptante= '$_REQUEST[nomAdoptante]' where idAnimaldeCompania = '$_REQUEST[idAnimaldeCompania]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header ("location:../Vista/index2.php?=eliminarAnimaldeCompania&msj=3"); //x=1 quiere decir que se eliminó correctamente

else 
	header ("location:..Vista/index2.php?pag=eliminarAnimaldeCompania&msj=4"); //x=2 quiere decir que se pudo eliminar
?>