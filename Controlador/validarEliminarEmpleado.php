<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql= "delete empleados set empIdentificacion= '$_REQUEST[identificacion]', empNombre= '$_REQUEST[nombre]', empFechaIngreso= '$_REQUEST[fechaIngreso]', empCorreo= '$_REQUEST[correo]', empGenero= '$_REQUEST[genero]', empcargo='$_REQUEST[cargo]'
where idEmpleado = '$_REQUEST[idEmpleado]'";

$resultado = $objConexion->query($sql);

if($resultado)
	{
	/*si se ejecutó bien, se retorna a la pagina y se envia variable msj=3, indicando que
	se actualizó correctamente*/
	header("location:../Vista/index2.php?pag=listarEmpleado&msj=3");
}
else
{
	/*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=4, indicando que
	no se puedo eliminar*/
	header("location:../Vista/index2.php?pag=listarEmpleado&msj=4");
}

?>