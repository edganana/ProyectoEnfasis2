<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
if (!isset ($_REQUEST['x']))
	$x=0;
$objConexion=Conectarse();
$sql="select tr.idTratamiento, tr.tratFecha, tr.tratHora, an.aniComNombre, 
m.medNombres, c.conNombre,  tr.tratEstado, m.medEspecialidad, tr.tratObservaciones 
from animalesdecompania an, medicosveterinarios m, consultorios c, tratamientos tr
where (an. idAnimaldeCompania = tr.tratAniCompania) and 
	  (m.idMedico = tr.tratMedicoVeterinario) and 
	  (c.idConsultorio = tr.tratConsultorio)";	  
$resultado = $objConexion->query($sql);
?>
<h1 align="center">LISTADO DE TRATAMIENTOS</h1>
<table bgcolor="#D0F5A9" width="90%" border="1" align="center">
  <tr align="center" bgcolor=#"339966" class="texto">
    <td>Fecha</td>
    <td>Hora</td>
    <td>nombreAniCompania</td>
    <td>Medico</td>
    <td>Consultorio</td>
    <td>Especialidad</td>
	<td>Estado</td>
    <td>Observaciones</td>
    </tr>
  <?php
while($tratamiento = $resultado->fetch_object())
{
?>
  <tr>
   <td><?php echo $tratamiento->tratFecha?>	</td>
   <td><?php echo $tratamiento->tratHora?>	</td>
    <td><?php echo $tratamiento->aniComNombre?>	</td>
    <td><?php echo $tratamiento->medNombres?>	</td>
    <td><?php echo $tratamiento->conNombre?>	</td>
	<td><?php echo $tratamiento->medEspecialidad?>	</td>
	<td><?php echo $tratamiento->tratEstado?></td>
    <td><?php echo $tratamiento->tratObservaciones?></td>
	

  </tr>

  <?php
}  //cerrando el ciclo while
?>
</table>


	
