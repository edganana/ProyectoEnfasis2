<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
/*hacemos la sentencia sql que me permita traer datos de las tablas medicos, adoptantes y tratamientos, para los tratamientos con estado Asignado, o sea que no se han atendido*/
$sql="select tr.idTratamiento, tr.tratFecha, tr.tratHora, an.aniComNombre, an.aniComTipo, m.medNombres, m.medEspecialidad, c.conNombre,  tr.tratEstado, tr.tratObservaciones from animalesdecompania an, medicosveterinarios m, consultorios c, tratamientos tr 
where (an.idAnimaldeCompania = tr.tratAniCompania) 
and (m.idMedico = tr.tratMedicoVeterinario) and (
c.idConsultorio = tr.tratConsultorio) and 
(tr.tratEstado='Asignado')";	  
$tratamientos = $objConexion->query($sql);
?>
<h1 align="center">LISTADO DE ANIMALES DE COMPANIA POR ATENDER</h1>
<table bgcolor="#D0F5A9" width="90%" border="1" align="center">
  <tr align="center" bgcolor="#339966" class="texto">
  
  <td>Fecha</td>
  <td>Hora</td>
    <td>Animal_de_Compania</td>	
     <td>Tipo</td> 
    <td>NombreMedvetrinario</td>
   <td>Especialidad</td>
	<td>Consultorio</td>
    <td>Estado</td>
    <td>Observaciones</td>
	<td>Atender</td>
  </tr>
 <?php
while($tratamiento=$tratamientos->fetch_object())
{
?>
  <tr>
  <td><?php echo $tratamiento->tratFecha?></td>
  <td><?php echo $tratamiento->tratHora?></td>  
  <td><?php echo $tratamiento->aniComNombre?></td>
  <td><?php echo $tratamiento->aniComTipo?></td>
  <td><?php echo $tratamiento->medNombres?></td>
  <td><?php echo $tratamiento->medEspecialidad?></td>
  <td><?php echo $tratamiento->conNombre?></td>  
  <td><?php echo $tratamiento->tratEstado?></td>
  <td><?php echo $tratamiento->tratObservaciones?></td>
  <td align="center">	   
    <a href="index2.php?pag=editarTratamiento&idTratamiento=<?php echo $tratamiento->idTratamiento?>" title="Clic para Atender el tratamiento">
    	<img src="../Recursos/editarTratamiento.png" width="31" height="30" /></a>
    
  </tr>
	    
 <?php
}  //cerrando el ciclo while
?>
</table>
<?php
if ($msj==1)
	echo "<br><p align='center'> El Tratamiento se Actualizó Correctamente";
if ($msj==2)
	echo "<br><p align='center'> Problemas para Actualizar el Tratamiento";
?>

