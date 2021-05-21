<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql= "select idAnimaldeCompania, aniComNombre, aniComObservaciones from animalesdecompania";
$resultado = $objConexion->query($sql);
?>

<form name="form1" method="post" action="../controlador/validarAgregarHistoriaClinica.php">
  
<table bgcolor="#D0F5A9" width="423" border="1" align="center">
    <tr>
      <td colspan="2" bgcolor="#339966"><div align="center">AGREGAR HISTORIA CLINICA </div></td>
    </tr>
    <tr>
      <td width="128" align="right" bgcolor="#D0F5A9"><div align="right">Creacion</div></td>
     <td width="293" bgcolor="#D0F5A9"><label>
      <input name="creacion" type="date" id="creacion" size="40"style="width:270px">
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Modificacion</div></td>
      <td bgcolor="#D0F5A9"><label>
        <input name="modificacion" type="date" id="modificacion" size="40"style="width:270px">
      </label></td>
    </tr>
<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Observaciones</div></td>
      <td bgcolor="#D0F5A9"><label for="observaciones"></label>
        <input name="observaciones" type="text" id="observaciones" size="40"style="width:270px"/></td>
    </tr>
<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Mascota</div></td>
      <td bgcolor="#D0F5A9"><label for="mascota"></label>
        <input name="mascota" type="text" id="mascota" size="40"style="width:270px"/></td>
    </tr>
    
	    <tr>
      <td colspan="2" align="center" bgcolor="#339966"><input type="submit" name="button" id="button"></td>
    </tr>
  </table>  
</form>
<p>
<?php
if ($msj==1)
	echo '<p align="center" >Se ha Agregado la Historia Clinica correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al Agregar la Historia Clinica, favor revisar';
?>
