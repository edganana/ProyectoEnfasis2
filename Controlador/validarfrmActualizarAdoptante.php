<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();

$sql = "update adoptantes set adoNombres = '$_REQUEST[nombres]', adoFechaNacimiento = '$_REQUEST[fechaNacimiento]', 
adoGenero = '$_REQUEST[genero]', adoTelefono = '$_REQUEST[telefono]', adoDireccion = '$_REQUEST[direccion]', 
adoCorreo = '$_REQUEST[correo]', aniComAdoptado = '$_REQUEST[mascota]' 
where adoIdentificacion = '$_REQUEST[adoIdentificacion]'";

$resultadoAdoptantes = $objConexion->query($sql);

if ($resultadoAdoptantes) {
    header("location:../Vista/index2.php?=listarAdoptante&msj=1");
}
//x=1 quiere decir que se actualizó bien

else {
    header("location:../Vista/index2.php?=listarAdoptante=2");
}
//x=2 quiere decir que se pudo actualizar