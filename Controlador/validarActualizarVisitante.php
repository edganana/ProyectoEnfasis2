<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql= "update visitantes set identificacion= '$_REQUEST[identificacion]', nombres= '$_REQUEST[nombres]', apellidos= '$_REQUEST[apellidos]', claseVisita= '$_REQUEST[claseVisita]', dependencia= '$_REQUEST[dependencia]', funcionario= '$_REQUEST[funcionario]', fechaIngreso='$_REQUEST[fechaIngreso]' , hora='$_REQUEST[hora]' , horaSalida='$_REQUEST[horaSalida]' , observaciones='$_REQUEST[observaciones]' where idVisitante = '$_REQUEST[idVisitante]'";
$resultado = $objConexion->query($sql);

if($resultado)
	{
	/*si se ejecutó bien, se retorna a la pagina y se envia variable msj=1, indicando que
	se actualizó correctamente*/
	header("location:../Vista/index2.php?pag=ListarVisitante&msj=1");
}
else
{
	/*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=2, indicando que
	no se puedo agregar*/
	header("location:../Vista/index2.php?pag=ListarVisitante&msj=2");
}

?>