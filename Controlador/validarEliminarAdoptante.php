<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql = "delete adoptantes set =adoIdentificacion '$_REQUEST[identificacion]', adoNombres= '$_REQUEST[nombres]', adoFechaNacimiento= '$_REQUEST[fechaNacimiento]' , adoGenero= '$_REQUEST[genero]', adoTelefono= '$_REQUEST[telefono]' , adoDireccion= '$_REQUEST[direccion]' , adoCorreo= '$_REQUEST[correo]' where adoIdentificacion = '$_REQUEST[adoIdentificacion]'";

$resultado = $objConexion->query($sql);

if ($resultado) {
    /*si se ejecutó bien, se retorna a la pagina y se envia variable msj=4, indicando que
    se agregó correctamentw*/
    header("location:../Vista/index2.php?pag=ListarAnimaldeCompania&msj=3");
} else {
    /*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=4, indicando que
    no se puedo agregar*/
    header("location:../Vista/index2.php?pag=ListarAnimaldeCompania&msj=4");
}