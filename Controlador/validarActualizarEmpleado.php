<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql = "UPDATE empleados SET empNombres = '$_REQUEST[nombre]', empFechaIngreso= '$_REQUEST[fechaIngreso]', empCorreo= '$_REQUEST[correo]', empGenero= '$_REQUEST[genero]', nomCargo='$_REQUEST[cargo]', carSueldo='$_REQUEST[sueldo]' WHERE empIdentificacion = '$_REQUEST[empIdentificacion]' and carSueldo=carSueldo";
$resultado = $objConexion->query($sql);

if ($resultado) {
    /*si se ejecutó bien, se retorna a la pagina y se envia variable msj=1, indicando que
    se actualizó correctamente*/
    header("location:../Vista/index2.php?pag=ListarEmpleado&msj=1");
} else {
    /*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=2, indicando que
    no se puedo agregar*/
    header("location:../Vista/index2.php?pag=ListarEmpleado&msj=2");
}