<?php
session_start();
extract($_REQUEST); //recoger todas las variables que pasan Método GET o POST
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
//Guardamos en una variable la sentencia sql que permite actualizar la Cita
$sql="update tratamientos 
set tratObservaciones='$_REQUEST[observaciones]', tratEstado='Atendido' 
where idTratamiento='$_REQUEST[idTratamiento]'";
//Ejecutamos la consulta llamando al método query del objeto conexión y pasando la sentencia sql
$resultado=$objConexion->query($sql);

if ($resultado)	
	header("location:../Vista/index2.php?pag=atenderTratamiento&msj=1");
else
	header("location:../Vista/index2.php?pag=atenderTratamiento&msj=2");
$objConexion->close();
?>





