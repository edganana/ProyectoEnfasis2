<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql = "insert into visitantes (identificacion, nombres, apellidos, claseVisita, dependencia, funcionario, fechaIngreso, hora, horaSalida, observaciones) values ('$_REQUEST[identificacion]', '$_REQUEST[nombres]', '$_REQUEST[apellidos]', '$_REQUEST[claseVisita]' , '$_REQUEST[dependencia]', '$_REQUEST[funcionario]' , '$_REQUEST[fechaIngreso]', '$_REQUEST[hora]', '$_REQUEST[horaSalida]', '$_REQUEST[observaciones]')";
$resultado = $objConexion->query($sql);
        
if($resultado)
{
	/*si se ejecutó bien, se retorna a la pagina y se envia variable msj=1, indicando que
	se agregó correctamentw*/
	header("location:../Vista/index2.php?pag=ListarVisitante&msj=1");
}
else
{
	/*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=2, indicando que
	no se puedo agregar*/
	header("location:../Vista/index2.php?pag=ListarVisitante&msj=2");
}

?>