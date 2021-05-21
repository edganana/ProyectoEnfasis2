<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql = "insert into animalesdecompania (aniComCodigo, aniComNombre, aniComTipo, aniComRaza, 
aniComColor, aniCOmGenero, aniComEdad, aniComObservaciones, nomAdoptante) 
values ('$_REQUEST[codigo]', '$_REQUEST[nombre]', '$_REQUEST[tipo]', '$_REQUEST[raza]', 
'$_REQUEST[color]', '$_REQUEST[genero]' , '$_REQUEST[edad]', '$_REQUEST[estado]', '$_REQUEST[adoptante]')";

$resultado = $objConexion->query($sql);

if ($resultado) {
    /*si se ejecutó bien, se retorna a la pagina y se envia variable msj=1, indicando que
    se agregó correctamentw*/
    header("location:../Vista/index2.php?pag=frmAgregarAnimaldeCompania&msj=1");
} else {
    /*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=6, indicando que
    no se puedo agregar*/
    header("location:../Vista/index2.php?pag=frmAgregarAnimaldeCompania&msj=2");
}

?>
