<?php
require "../Modelo/conexionBasesDatos.php";
extract($_REQUEST);

$objConexion = Conectarse();

$sql = "delete from animalesdecompania where aniComNombre = '$_REQUEST[idAnimaldeCompania]'";

$resultado = $objConexion->query($sql);

if ($resultado) {
    header("location: listarAnimaldeCompaniaAdoptado.php?x=3");
}
//x=3 quiere decir que se elimin� bien
else {
    header("location: listarAnimaldeCompaniaAdoptado.php?x=4");
}
//x=4 quiere decir que se no se pudo eliminar