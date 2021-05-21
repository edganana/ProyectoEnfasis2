<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql ="insert into empleados (empIdentificacion, empNombre, empFechaIngreso, empCorreo, empGenero, empCargo, empSueldo)
values ( '$_REQUEST[identificacion]', '$_REQUEST[nombre]', '$_REQUEST[fechaIngreso]', '$_REQUEST[correo]', 
 '$_REQUEST[genero]','$_REQUEST[cargo]', '$_REQUEST[sueldo]') ";

$resultado = $objConexion->query($sql);

if ($resultado) {
    /*si se ejecutó bien, se retorna a la pagina y se envia variable msj=1, indicando que
    se agregó correctamentw*/
    header("location:../Vista/index2.php?pag=frmAgregarEmpleado&msj=1");
} else {
    /*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=2, indicando que
    no se puedo agregar*/
    header("location:../Vista/index2.php?pag=frmAgregarEmpleado&msj=2");
}