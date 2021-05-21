<?php
require "../Modelo/conexionBasesDatos.php";
extract ($_REQUEST);
if (!isset ($_REQUEST['x']))
	$x=0;	
$objConexion=Conectarse();
$sql="select numHistoria, hisFechCreacion, hisFechModificacion, hisObservaciones, nomAniCompania from historiasclinicas";
$resultado = $objConexion->query($sql);

?>
<h1 align="center">HISTORIAS CLINICAS</h1>
<table width="90%" border="1" align="center" bgcolor="#D0F5A9">
  <tr align="center" bgcolor="#339966">
    <td width="11%">Fecha_Creacion</td>
    <td width="16%">Fecha_Modificacion</td>
    <td width="11%">Observaciones</td>
    <td width="11%">Nombre_AniCompania</td>
        <td width="5%">Actualizar</td>
      </tr>
  
  <?php  
  while ($historia = $resultado->fetch_object())
  {
 ?>  
  <tr>
    <td><?php echo $historia->hisFechCreacion ?></td>
    <td><?php echo $historia->hisFechModificacion ?></td>
 <td><?php echo $historia->hisObservaciones ?></td>
    <td><?php echo $historia->nomAniCompania ?></td>
       	 <td aling="center"><div align="center"><a href="actualizarHistoriaClinica.php?numHistoria=<?php echo  $historia->numHistoria?>"><img src="../Recursos/editar.png" width="40" height="40" border="0" align="middle"/></a></div></td>
	  
  </tr>
  <?php
}  //cerrando el ciclo while
?>
</table>
<p>
<?php
if ($msj==1)
	echo "Se ha actualizado la Historia Clinica correctamente";
	if ($msj==2)
	echo "Problemas para actualizar la Historia Clinica";
	?>
</p>