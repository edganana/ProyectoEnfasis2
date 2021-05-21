<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
if (!isset ($_REQUEST['x']))
	$x=0;
$objConexion=Conectarse();
$sql="select codigo, numeroConsecutivo, fecha, hora, tipoDocumento, numeroDocumento, nombre, apellido, telefono, servicio, marca, clase, procesador, teclado, placaBase, memoria, discoDuro, tarjetaRed, torre, audio, monitor, tarjetaVideo, comentarios, fechaEntrega, nombreTecnico from ordenestrabajo";
$resultado = $objConexion->query($sql);
?>
<h1 align="center">LISTADO ORDENES TRABAJO</h1>
<table bgcolor="#D0F5A9" width="90%" border="1" align="center">
  <tr align="center" bgcolor="#339966">
  <td width="10%">NumeroConsecutivo</td>
    <td width="10%">Fecha</td>
    <td width="10%">Hora</td>
    <td width="20%">TipoDocumento</td>
    <td width="30%">NumeroDocumento</td>
    <td width="5%">Nombre</td>
    <td width="5%">Apellido</td>
    <td width="5%">Telefono</td>
    <td width="5%">Servicio</td>
    <td width="5%">Marca</td>
    <td width="5%">Clase</td>
    <td width="5%">Procesador</td>
    <td width="5%">Teclado</td>
    <td width="5%">PlacaBase</td>
    <td width="5%">Memoria</td>
    <td width="5%">DiscoDuro</td>
    <td width="5%">TarjetaRed</td>
    <td width="5%">Torre</td>
    <td width="5%">Audio</td>
    <td width="5%">Monitor</td>
    <td width="5%">TarjetaVideo</td>
    <td width="5%">Comentarios</td>
    <td width="5%">FechaEntrega</td>
    <td width="5%">nombreTecnico</td>
    <td width="5%">Eliminar</td>
      </tr>

   <?php
while($ordentrabajo = $resultado->fetch_object())
{
?>
    <tr>
    <td><?php echo $ordentrabajo->numeroConsecutivo?>	</td>
    <td><?php echo $ordentrabajo->fecha?>	</td>
    <td><?php echo $ordentrabajo->hora?>		</td>
    <td><?php echo $ordentrabajo->tipoDocumento?>		</td>
    <td><?php echo $ordentrabajo->numeroDocumento?>		</td>
    <td><?php echo $ordentrabajo->nombre?>	</td>
    <td><?php echo $ordentrabajo->apellido?>		</td>
    <td><?php echo $ordentrabajo->telefono?>		</td>
    <td><?php echo $ordentrabajo->servicio?>		</td>
    <td><?php echo $ordentrabajo->marca?>		</td>
    <td><?php echo $ordentrabajo->clase?>		</td>
    <td><?php echo $ordentrabajo->procesador?>		</td>
    <td><?php echo $ordentrabajo->teclado?>		</td>
    <td><?php echo $ordentrabajo->placaBase?>		</td>
    <td><?php echo $ordentrabajo->memoria?>		</td>
    <td><?php echo $ordentrabajo->discoDuro?>		</td>
    <td><?php echo $ordentrabajo->tarjetaRed?>		</td>
    <td><?php echo $ordentrabajo->torre?>		</td>
    <td><?php echo $ordentrabajo->audio?>		</td>
    <td><?php echo $ordentrabajo->monitor?>		</td>
    <td><?php echo $ordentrabajo->tarjetaVideo?>		</td>
    <td><?php echo $ordentrabajo->comentarios?>		</td>
    <td><?php echo $ordentrabajo->fechaEntrega?>		</td>
    <td><?php echo $ordentrabajo->nombreTecnico?>		</td>
    <td aling="center"><div align="center"><a href="eliminarOrdenTrabajo.php?codigo=<?php echo $ordentrabajo->codigo?>"><img src="../Recursos/eliminar.jpg" width="40" height="40" border="0" align="middle"/></a></div></td>
  </tr>
  <?php
}  //cerrando el ciclo while
?>
</table>