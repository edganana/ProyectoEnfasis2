<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql= "select * from visitantes where idVisitante= '$_REQUEST[idVisitante]'";
$resultadoVisitante = $objConexion->query($sql);
$visitante = $resultadoVisitante->fetch_object();
?>

<form name="form1" method="post" action="../controlador/validarActualizarVisitante.php">
  <table bgcolor="#D0F5A9" width="437" border="1" align="center">
    <tr>
      <td colspan="2" align="center" valign="middle" bgcolor="#339966"><div align="center">ACTUALIZAR VISITANTE </div></td>
    </tr>
    <tr>
      <td width="128" align="right" bgcolor="#D0F5A9"><div align="right">Identificacion</div></td>
      <td width="293"><label>
        <input name="identificacion" type="text" id="identificacion" value="<?php echo $visitante-> identificacion ?>" size="40"style="width:270px">
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Nombres</div></td>
      <td><label>
        <input name="nombres" type="text" id="nombres" value="<?php echo $visitante-> nombres ?>" size="40"style="width:270px">
      </label></td>
    </tr>
     <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Apellidos</div></td>
      <td><label>
        <input name="apellidos" type="text" id="apellidos" value="<?php echo $visitante-> apellidos ?>" size="40"style="width:270px">
      </label></td>
    </tr>	
		<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">ClaseVisita </div></td>
      <td><label>
          <select name="claseVisita" id="claseVisita" value="<?php echo $visitante-> claseVisita ?>"style="width:270px">
          <option value="0">Seleccione</option>
          <option value="INFORMAL">INFORMAL</option>
          <option value="CITA">CITA</option>
          <option value="INFORMACION">INFORMACION</option>
          <option value="visitaINSTALACIONES">visitaINSTALACIONES</option>
          <option value="SUPERVISION">SUPERVISION</option>
          </select>
      </label></td>
    </tr>
	<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Dependencia </div></td>
      <td><label>
        <select name="dependencia" id="dependencia" value="<?php echo $visitante-> dependencia ?>"style="width:270px">
          <option value="0">Seleccione</option>
          <option value="RECEPCION">RECEPCION</option>
          <option value="GERENCIA">GERENCIA</option>
          <option value="ADMINISTRACION">ADMINISTRACION</option>
          <option value="CONTABILIDAD">CONTABILIDAD</option>
          <option value="areaVETERINARIA">areaVETERINARIA</option>
         <option value="areaLOGISTICA">areaLOGISTICA</option>
         <option value="areaMANTENIMIENTO">areaMANTENIMIENTO</option>
         <option value="almacenPROVISIONES">almacenPROVISIONES</option>
          </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Funcionario </div></td>
      <td><label>
        <select name="funcionario" id="funcionario" value="<?php echo $visitante-> funcionario ?>"style="width:270px">
       	<option value="0">Seleccione</option>
          <option value="RECEPCIONISTA">RECEPCIONISTA</option>
          <option value="SECRETARIA">SECRETARIA</option>
          <option value="GERENTE">GERENTE</option>
          <option value="ADMINISTRADOR">ADMINISTRADOR</option>
          <option value="medVETERINARIO">medVETERINARIO</option>
         <option value="jefeLOGISTICO">jefeLOGISTICO</option>
         <option value="asesorADOPCIONES">asesorADOPCIONES</option>
         <option value="CONTADOR">CONTADOR</option>
          </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">FechaIngreso </div></td>
      <td><label>
        <input name="fechaIngreso" type="date" id="fechaIngreso" value="<?php echo $visitante-> fechaIngreso ?>"size="40"style="width:270px">
      </label></td>
    </tr>
	<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Hora </div></td>
      <td><label>
        <input name="hora" type="time" id="hora" value="<?php echo $visitante-> hora ?>"size="40"style="width:270px">
      </label></td>
    </tr>
		 <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">HoraSalida </div></td>
      <td><label>
        <input name="horaSalida" type="time" id="horaSalida" value="<?php echo $visitante-> horaSalida ?>"size="40"style="width:270px">
      </label></td>
    </tr>
          <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Observaciones </div></td>
      <td><label>
        <input name="observaciones" type="text" id="observaciones" value="<?php echo $visitante-> observaciones ?>"size="40"style="width:270px">
      </label></td>
    </tr>          
        </select></td>
      </label></td>
    </tr>
	    <tr>
      <td colspan="2" align="center" bgcolor="#339966"><input type="submit" name="button" id="button"></td>
    </tr>
  </table>
  <input name="idVisitante" type="hidden" value="<?php echo $_REQUEST['idVisitante'] ?>" /> 
</form>