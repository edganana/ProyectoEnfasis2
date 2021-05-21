<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);

$objConexion=Conectarse();

$sql= "delete from visitantes where idVisitante = '$_REQUEST[idVisitante]'";

$resultado = $objConexion->query($sql);

if ($resultado)
	header ("location: listarVisitante.php?x=3"); //x=3 quiere decir que se eliminó bien
else 
	header ("location: listarVisitante.php?x=4"); //x=4 quiere decir que no se pudo eliminar
?>
