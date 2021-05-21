<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql = "insert into adoptantes (adoIdentificacion, adoNombres, adoApellidos, adoFechaNacimiento, 
adoGenero,adoTelefono, adoDireccion,adoCorreo, aniComAdoptado) 
values ('$_REQUEST[identificacion]','$_REQUEST[nombres]', '$_REQUEST[apellidos]','$_REQUEST[fechaNacimiento]','$_REQUEST[genero]',
'$_REQUEST[telefono]', '$_REQUEST[direccion]','$_REQUEST[correo]','$_REQUEST[mascota]')";

$resultado = $objConexion->query($sql);

if ($resultado) {
    /*si se ejecutó bien, se retorna a la pagina y se envia variable msj=1, indicando que
    se agregó correctamentw*/
    header("location:../Vista/index2.php?pag=frmAgregarAdoptante&msj=1");
} else {
    /*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=6, indicando que
    no se puedo agregar*/
    header("location:../Vista/index2.php?pag=frmAgregarAdoptante&msj=2");
}

?>