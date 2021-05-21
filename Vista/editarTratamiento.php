<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql="select tr.tratFecha, tr.tratHora, an.aniComNombre, an.aniComTipo, m.medNombres, m.medEspecialidad, c.conNombre,  tr.tratEstado, tr.tratObservaciones from animalesdecompania an, medicosveterinarios m, consultorios c, tratamientos tr where (an.idAnimaldeCompania = tr.tratAniCompania) and (m.idMedico = tr.tratMedicoVeterinario) and (c.idConsultorio = tr.tratConsultorio) and (tr.tratEstado='Asignado') and 
	  (tr.idTratamiento='$_REQUEST[idTratamiento]')";	
$tratamientos = $objConexion->query($sql);
$tratamiento=$tratamientos->fetch_object();
?>
<form id="form1" name="form1" method="post" action="../Controlador/validarEditarTratamiento.php">
  <table bgcolor="#D0F5A9" width="43%" border="0" align="center">
    <tr bgcolor="#339966" class="texto">
      <td colspan="2" align="center">ATENDER TRATAMIENTO</td>
    </tr>    
     <tr>
      <td width="33%" align="right" bgcolor="#D0F5A9">Tratamiento:</td>
      <td width="67%"><label for="tratamiento"></label>
      <input name="tratamiento" type="text" id="tratamiento" readonly="readonly" size="60" 
      value="<?php echo $tratamiento->tratFecha." ".$tratamiento->tratHora?>" /></td>
    </tr>    
    <tr>
      <td width="33%" align="right" bgcolor="#D0F5A9">Animal de Compania:</td>
      <td width="67%"><label for="animaldecompania"></label>
      <input name="animaldecompania" type="text" id="animaldecompania" readonly="readonly" size="60" 
      value="<?php echo $tratamiento->aniComNombre." ".$tratamiento->aniComTipo?>" /></td>
	  </tr>      
      <tr>
      <td width="33%" align="right" bgcolor="#D0F5A9">Medico_Veterinario:</td>
      <td width="67%"><label for="medicoveterinario"></label>
      <input name="medicoveterinario" type="text" id="medicoveterinario" readonly="readonly" size="60" 
      value="<?php echo $tratamiento->medNombres." ".$tratamiento->medEspecialidad?>" /></td>
	  </tr>
      
       <td width="33%" align="right" bgcolor="#D0F5A9">Consultorio:</td>
      <td width="67%"><label for="consultorios"></label>
      <input name="consultorios" type="text" id="consultorios" readonly="readonly" size="60" 
      value="<?php echo $tratamiento->conNombre?>" /></td>
	  </tr>      
      <tr>
      <td align="right" bgcolor="#D0F5A9">Observaciones</td>
      <td><label for="observaciones"></label>
      <textarea name="observaciones" id="observaciones" cols="50" rows="10" required="required"></textarea></td>
    </tr>
    <tr bgcolor="#339966" class="texto">
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
  <input name="idTratamiento" type="hidden" value="<?php echo $_REQUEST['idTratamiento']?>" />
</form>
