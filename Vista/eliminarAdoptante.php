<?php
require "../Modelo/conexionBasesDatos.php";
extract($_REQUEST);

$objConexion = Conectarse();

$sql = "delete from adoptantes where  adoIdentificacion= '$_REQUEST[adoIdentificacion]'";

$resultado = $objConexion->query($sql);

if ($resultado) {
    header("location: listarAdoptante.php?x=3");
}
//x=3 quiere decir que se elimin� bien

else {
    header("location: listarAdoptante.php?x=4");
}
//x=4 quiere decir que no se pudo eliminar