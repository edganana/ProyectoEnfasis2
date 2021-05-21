<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql = "insert into ordenestrabajo (numeroConsecutivo, fecha, hora, tipoDocumento, numeroDocumento, nombre, apellido, direccion, telefono, servicio, marca, clase, procesador, teclado, placaBase, memoria, discoDuro, tarjetaRed, torre, audio, monitor, tarjetaVideo, comentarios, fechaEntrega, nombreTecnico) values ('$_REQUEST[numeroConsecutivo]', '$_REQUEST[fecha]', '$_REQUEST[hora]', '$_REQUEST[tipoDocumento]' , '$_REQUEST[numeroDocumento]', '$_REQUEST[nombre]' , '$_REQUEST[apellido]', '$_REQUEST[direccion]', '$_REQUEST[telefono]', '$_REQUEST[servicio]', '$_REQUEST[marca]', '$_REQUEST[clase]', '$_REQUEST[procesador]', '$_REQUEST[teclado]', '$_REQUEST[placaBase]', '$_REQUEST[memoria]', '$_REQUEST[discoDuro]', '$_REQUEST[tarjetaRed]', '$_REQUEST[torre]', '$_REQUEST[audio]', '$_REQUEST[monitor]', '$_REQUEST[tarjetaVideo]', '$_REQUEST[comentarios]', '$_REQUEST[fechaEntrega]', '$_REQUEST[nombreTecnico]')";
$resultado = $objConexion->query($sql);
        
if ($resultado)
	{
	/*si se ejecutó bien, se retorna a la pagina y se envia variable msj=1, indicando que
	se agregó correctamentw*/
	header("location:../Vista/index2.php?pag=listarOrdenTrabajo&msj=1");
}
else
{
	/*si no se ejecutó bien, se retorna a la pagina y se envia variable msj=2, indicando que
	no se puedo agregar*/
	header("location:../Vista/index2.php?pag=listarOrdenTrabajo&msj=2");
}

?>