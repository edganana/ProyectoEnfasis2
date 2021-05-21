<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql = " insert into cargos (carNombre, carSueldo)
values ( '$_REQUEST[cargo]', '$_REQUEST[sueldo]')";

$resultado = $objConexion->query($sql);

if ($resultado) {
    /*si se ejecutó bien, se retorna a la pagina y se envia variable msj=1, indicando que
    se agregó correctamentw*/
    header("location:../Vista/index2.php?pag=frmCargo&msj=1");
} else {
    /*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=2, indicando que
    no se puedo agregar*/
    header("location:../Vista/index2.php?pag=frmCargo&msj=2");
}

?>
