<?php
require "../Modelo/conexionBasesDatos.php";
extract($_REQUEST);

$objConexion = Conectarse();

$sql = "delete from empleados where empIdentificacion = '$_REQUEST[empIdentificacion]'";

$resultado = $objConexion->query($sql);

if ($resultado) {
    header("location:listarEmpleado.php?x=3");
}
//x=3 quiere decir que se elimin� bien
else {
    header("location:listarEmpleado.php?x=4");
}
//x=4 quiere decir que no se pudo eliminar

?>