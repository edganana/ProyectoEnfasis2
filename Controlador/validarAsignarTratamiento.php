<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
//Asignar a $sql el texto de la Consulta
$sql="insert into tratamientos (tratFecha,tratHora, tratAniCompania, tratMedicoVeterinario, tratConsultorio) values ('$_REQUEST[fecha]','$_REQUEST[hora]','$_REQUEST[animaldecompania]','$_REQUEST[medicoveterinario]','$_REQUEST[consultorio]')";

$resultado=$objConexion->query($sql);

if($resultado)
{
	/*si se ejecutó bien, se retorna a la pagina y se envia variable msj=1, indicando que
	se agregó correctamente*/
	header("location:../Vista/index2.php?pag=insertarTratamiento&msj=1");
}
else
{
	/*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=2, indicando que
	no se puedo agregar*/
	header("location:../Vista/index2.php?pag=insertarTratamiento&msj=2");
}

?>
