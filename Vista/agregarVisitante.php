<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql = "select identificacion, nombres, apellidos, claseVisita, dependencia, funcionario, fechaIngreso, hora, horaSalida, observaciones from visitantes";
$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=uft=8" />
<title>Visitante</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="../controlador/validarAgregarVisitante.php">
  <table bgcolor="#D0F5A9" width="489" border="1" align="center">
    <tr>
      <td colspan="2" bgcolor="#339966"><div align="center">AGREGAR VISITANTE </div></td>
    </tr>
    <tr>
      <td width="160" align="right" bgcolor="#D0F5A9"><div align="right">Identificacion </div></td>
      <td width="317"><label>
        <input name="identificacion" type="text" id="identificacion" size="40"style="width:270px">
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Nombres:</div></td>
      <td><label>
        <input name="nombres" type="text" id="nombres" size="40"style="width:270px">
      </label></td>
    </tr>    
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Apellidos:</div></td>
      <td><label>
        <input name="apellidos" type="text" id="apellidos" size="40"style="width:270px">
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">ClaseVisita:</div></td>
      <td><label>
        <select name="claseVisita" id="claseVisita"style="width:270px">
          <option value="0">Seleccione</option>
          <option value="Informal">INFORMAL</option>
          <option value="Cita">CITA</option>
          <option value="Informacion">INFORMACION</option>
          <option value="visitaInstalaciones">visitaINSTALACIONES</option>
          <option value="Supervision">SUPERVISION</option>
          </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Dependencia:</div></td>
      <td><label>
        <select name="dependencia" id="dependencia"style="width:270px">
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
      <td align="right" bgcolor="#D0F5A9"><div align="right">fechaIngreso</div></td>
      <td><label>
        <input name="fechaIngreso" type="date" id="fechaIngreso" size="40"style="width:270px">
      </label></td>
    </tr>    
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Hora</div></td>
      <td><label>
        <input name="hora" type="time" id="hora" size="40"style="width:270px">
      </label></td>
    </tr>
     <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">horaSalida</div></td>
      <td><label>
        <input name="horaSalida" type="time" id="horaSalida" size="40"style="width:270px">
      </label></td>
    </tr>
    <tr>
     <td align="right" bgcolor="#D0F5A9">observaciones</td>
      <td><label for="obsevaciones"></label>
      <textarea name="observaciones" id="observaciones" cols="35" rows="5" ></textarea></td>
    </tr>
      <tr>
      <td colspan="2" align="center" bgcolor="#339966"><input type="submit" name="button" id="button"></td>
    </tr>
  </table>
</form>
</body>
</html>