<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql = "insert into animalesdecompania (aniComCodigo, aniComNombre, aniComTipo, aniComRaza, aniComColor, aniComGenero, aniComEdad, aniComObservaciones) values ('$_REQUEST[codigo]', '$_REQUEST[nombre]', '$_REQUEST[tipo]', '$_REQUEST[raza]' , '$_REQUEST[color], '$_REQUEST[genero] , '$_REQUEST[edad]', '$_REQUEST[observaciones]')";

$resultado = $objConexion->query($sql);

if ($resultado)
	header ("location:../Vista/index2.php?=listarAnimaldeCompania&msj=1"); //x=1 quiere decir que se actualizó bien
		
else 
	header ("location:../Vista/index2.php?=listarAnimaldeCompania&msj=2"); //x=2 quiere decir que se pudo actualizar

?>
