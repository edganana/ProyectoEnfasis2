<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql = "update animalesdecompania set codMascota= '$_REQUEST[codigo]',  masTipo= '$_REQUEST[tipo]', masRaza= '$_REQUEST[raza]' , masColor= '$_REQUEST[color]', masGenero = '$_REQUEST[genero]' , masEdad= '$_REQUEST[edad]', masEstado= '$_REQUEST[estado]' where masNombre = '$_REQUEST[masNombre]'";
$resultado = $objConexion->query($sql);

if ($resultado) {
    header("location:../Vista/index2.php?=listarAnimaldeCompania&msj=3");
}
//x=1 quiere decir que se actualizó bien

else {
    header("location:../Vista/index2.php?=listarAnimaldeCompania&msj=4");
}
//x=2 quiere decir que se pudo actualizar