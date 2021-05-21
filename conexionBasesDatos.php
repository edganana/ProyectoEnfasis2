<?php
function Conectarse() 
{
	$Conexion=new MySQLi("localhost","root","100818Ega?","refugioanimal");

	if ($Conexion->connect_errno)
	echo "Error de Conexion a la Base de Datos". $Conexion->connect_error;
else
	return $Conexion;
}
	 ?>
