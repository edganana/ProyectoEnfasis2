<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
$objConexion=Conectarse();
$sql= "delete animaldecompania set aniComCodigo= '$_REQUEST[codigo]', aniComNombre= '$_REQUEST[nombre]', 
aniComTipo= '$_REQUEST[tipo]' , aniComRaza= '$_REQUEST[raza]' , aniComColor= '$_REQUEST[color]', 
aniComGenero= '$_REQUEST[genero]', aniComEdad= '$_REQUEST[edad]' , aniComObservaciones= '$_REQUEST[observaciones]' 
where idAnimaldeCompania = '$_REQUEST[idAnimaldeCompania]'";

$resultado = $objConexion->query($sql);

if($resultado)
{
	/*si se ejecut� bien, se retorna a la pagina y se envia variable msj=3, indicando que
	se agreg� correctamentw*/
	header("location:../Vista/index2.php?pag=ListarAnimaldeCompania&msj=3");
}
else
{
	/*si no se ejecut� bien, se retorna a la pagina y se envia variable msj=4, indicando que
	no se puedo agregar*/
	header("location:../Vista/index2.php?pag=ListarAnimaldeCompania&msj=4");
}