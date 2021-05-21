<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
if (!isset ($_REQUEST['msj']))
	$msj=0;
$objConexion=Conectarse();
$sql="select idVisitante, identificacion, nombres, apellidos, claseVisita, dependencia, funcionario, fechaIngreso, hora, horaSalida, observaciones from visitantes";
$resultado = $objConexion->query($sql);
?>
<h1 align="center">LISTADO VISITANTES</h1>
<table bgcolor="#D0F5A9" width="90%" border="1" align="center">
  <tr align="center" bgcolor="#339966">
  <td width="10%">Identificacion</td>
    <td width="10%">Nombres</td>
    <td width="10%">Apellidos</td>
    <td width="20%">ClaseVisita</td>
    <td width="30%">Dependencia</td>
	<td width="5%">Funcionario</td>
	<td width="5%">FechaIngreso</td>
    <td width="10%">Hora</td>
    <td width="5%">HoraSalida</td>
    <td width="5%">Observaciones</td>
    <td width="5%">Actualizar</td> 
    <td width="5%">Eliminar</td>   
   <?php
while($visitante = $resultado->fetch_object())
{
?>
    <tr>
    <td><?php echo $visitante->identificacion?>	</td>
	<td><?php echo $visitante->nombres?>	</td>
    <td><?php echo $visitante->apellidos?>		</td>
    <td><?php echo $visitante->claseVisita?>		</td>
    <td><?php echo $visitante->dependencia?>		</td>
	<td><?php echo $visitante->funcionario?>	</td>
	<td><?php echo $visitante->fechaIngreso?>		</td>
	<td><?php echo $visitante->hora?>		</td>
    <td><?php echo $visitante->horaSalida?>		</td>
    <td><?php echo $visitante->observaciones?>		</td>
     <td aling="center"><div align="center"><a href="actualizarVisitante.php?idVisitante=<?php echo  $visitante->idVisitante?>"><img src="../Recursos/editar.png" width="40" height="40" border="0" align="middle"/></a></div></td>
    <td aling="center"><div align="center"><a href="eliminarVisitante.php?idVisitante=<?php echo $visitante->idVisitante?>"><img src="../Recursos/eliminar.jpg" width="40" height="40" border="0" align="middle"/></a></div></td>
  </tr>
  <?php
}  //cerrando el ciclo while
?>   
</table>
<p>
<?php
if ($msj==1)
	echo "Se ha actualizado el Visitante correctamente";
	if ($msj==2)
	echo "Problemas al actualizar el Visitante";
	if ($msj==3)
	echo "Se ha eliminado el Visitante correctamente";
	if ($msj==4)
	echo "Problemas al eliminar el Visitante";
	?>
	</p>