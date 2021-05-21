<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
//Consulta Datos Medico para poder Mostrar Medico en la Lista
$sql="Select idMedico, medNombres, medApellidos, medEspecialidad from medicosveterinarios";
$medicosveterinarios=$objConexion->query($sql);
//Consulta Datos Animalde Compania para poder Mostrar Animales de Compania en la Lista
$sql= "select idAnimaldeCompania, aniComCodigo, aniComNombre, aniComTipo from animalesdecompania";
$animalesdecompania=$objConexion->query($sql);
//Consulta Datos Consltorios para poder Mostrar Consultorios en la Lista
$sql="select * from consultorios";
$consultorios=$objConexion->query($sql);
?>

<form id="form1" name="form1" method="post" action="../Controlador/validarAsignarTratamiento.php">
  <table bgcolor="#D0F5A9" width="43%" border="1" align="center">
    <tr bgcolor="#339966" class="texto">
      <td colspan="2" align="center">ASIGNAR TRATAMIENTO</td>
    </tr>
    <tr>
      <td width="33%" align="right" bgcolor="#D0F5A9">Animales_de_Compania:</td>
      <td width="67%"><select name="animaldecompania" id="animaldecompania" style="width:300px">
        <option value="0">Seleccione</option>
        <?php
		//Agrego a la lista animal de compania los animales de compania existentes para poder seleccionar		
		while ($animaldecompania=$animalesdecompania->fetch_object())
		{
			?>
             <option value="<?php echo $animaldecompania->idAnimaldeCompania;?> ">
			 	<?php echo $animaldecompania->aniComCodigo. "-".$animaldecompania->aniComNombre."-".$animaldecompania->aniComTipo;?>
             </option>
		<?php	
		}//cerrando el ciclo while		
		?>
      </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9">Fecha:</td>
      <td><label for="fecha"></label>
      <input type="date" name="fecha" id="fecha" required="required" style="width:290px" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9">Hora:</td>
      <td><input type="time" name="hora" id="hora" required="required" style="width:290px"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9">Medicos_Veterinarios:</td>
      <td><label for="medicoveterinario"></label>
        <select name="medicoveterinario" id="medicoveterinario" style="width:300px">
          <option value="0">Seleccione</option>
          <?php
		  //Agrego a la lista Medicos_Veterinarios los Medicos Veterinarios existentes para poder seleccionar
		while ($medicoveterinario=$medicosveterinarios->fetch_object())
		{
		?>
             <option value="<?php echo $medicoveterinario->idMedico;?>">
				<?php echo $medicoveterinario->medNombres." ".$medicoveterinario->medApellidos. "-->".$medicoveterinario->medEspecialidad?> 
             </option>
		<?php	
		}//Cerrando ciclo while		
		?>          
      </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9">Consultorio</td>
      <td><select name="consultorio" id="consultorio" style="width:300px">
        <option value="0">Seleccione</option>
        <?php
		//Agrego a la lista Consultorio los Consultorios existentes para poder seleccionar
		while ($consultorio=$consultorios->fetch_object())
		{
		?>
             <option value="<?php echo $consultorio->idConsultorio;?> ">
			 	<?php echo $consultorio->conNombre?>
             </option>
		<?php	
		}	//cerrando ciclo while	
		?>        
      </select></td>
    </tr>
    <tr bgcolor="#339966" class="texto">
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
</form>

<?php
if ($msj==1)
	echo '<p align="center" >Se ha Asignado el tratamiento correctamente';
if ($msj==2)
	echo '<p align="center"> Problemas al asignar el tratamiento, favor revisar';
?>