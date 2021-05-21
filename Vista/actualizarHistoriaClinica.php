<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql= "select * from historiasclinicas where numHistoria= '$_REQUEST[numHistoria]'";
$resultadoHistoriaClinica = $objConexion->query($sql);
$historia = $resultadoHistoriaClinica->fetch_object();
?>

<form name="form1" method="post" action="../controlador/validarActualizarHistoriaClinica.php">
  <table  bgcolor="#D0F5A9" width="437" border="1" align="center">
    <tr>
      <td colspan="2" align="center" valign="middle" bgcolor="#339966"><div align="center">ACTUALIZAR HISTORIA CLINICA </div></td>
    </tr>
    <tr>
      <td width="128" align="right" bgcolor="#D0F5A9"><div align="right">Fecha_Creacion</div></td>
      <td width="293"><label>
        <input name="hisFechCreacion" type="date" id="hisFechCreacion" value="<?php echo $historia-> hisFechCreacion ?>"size="40"style="width:270px">
       </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Fecha_Modificacion</div></td>
      <td><label>
        <input name="hisFechModificacion" type="date" id="hisFechModificacion" value="<?php echo $historia-> hisFechModificacion ?>"size="40"style="width:270px">
            
        </select>
      </label></td>
    </tr>

 <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Observaciones</div></td>
      <td><label>
        <input name="hisObservaciones" type="text" id="hisObservaciones" value="<?php echo $historia-> hisObservaciones ?>"size="40"style="width:270px">
      </label></td>
    </tr>
	
	<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Nombre_AniCompania</div></td>
      <td><label>
        <input name="nomAniCompania" type="text" id="nomAniCompania" value="<?php echo $historia-> nomAniCompania ?>"size="40"style="width:270px">
   
        
        </select>
      </label></td>
    </tr>
    
      	    <tr>
      <td colspan="2" align="center" bgcolor="#339966"><input type="submit" name="button" id="button"></td>
    </tr>
  </table>
    <input name="numHistoria" type="hidden" value="<?php echo $_REQUEST['numHistoria'] ?>" />
</form>