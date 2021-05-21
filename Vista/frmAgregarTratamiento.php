<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql= "select idTratamiento, tratFecha, tratHora, tratAniCompania, tratMedicoVeterinario, tratConsultorio, tratEstado, tratObservaciones from tratamientos";

$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=uft=8" />
<title>Formulario Agregar Tratamiento</title>
</head>

<body>
<form name="form1" method="post" action="validarfrmAgregarTratamiento.php">
  <table bgcolor="#D0F5A9" width="437" border="1" align="center">
    <tr>
      <td colspan="2" align="center" valign="middle" bgcolor="#339966"><div align="center">ASIGNAR TRATAMIENTO </div></td>
    </tr>
	<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Fecha Tratamiento </div></td>
      <td><label>
        <input name="tratFecha" type="date" id="tratFecha" size="40"style="width:270px">
      </label></td>
    </tr>
	<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Hora Tratamiento </div></td>
      <td><label>
        <input name="tratHora" type="time" id="tratHora" size="40"style="width:270px">
      </label></td>
    </tr>
    <tr>
    
    <td width="128" align="right" bgcolor="#D0F5A9"><div align="right">NomAniCompania</div></td>
      <td width="293"><label>
        <input name="tratAniCompania" type="text" id="tratAniCompania" size="40"style="width:270px">
      </label></td>
    </tr>    
	<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">NombreMedVeterinario</div></td>
      <td><label>
        <input name="tratMedicoVeterinario" type="text" id="tratMedicoVeterinario" size="40"style="width:270px">
      </label></td>
    </tr>
	
	<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Consultorio</div></td>
      <td><label>
        <input name="tratConsultorio" type="text" id="tratConsultorio" size="40"style="width:270px">
      </label></td>
    </tr>
	
	<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Estado</div></td>
      <td><label>
        <select name="tratEstado" id="tratEstado"style="width:270px">
          <option value="0">Seleccione</option>
          <option value="Asignado">Asignado</option>
          <option value="Atendido">Atendido</option>
        </select>
      </label></td>
    </tr>
	<tr>
      <td align="right" bgcolor="#D0F5A9">Observaciones</td>
      <td><label>
        <textarea name="tratObservaciones" id="tratObservaciones" cols="35" rows="5" ></textarea>
         </label></td>
    </tr>
      <tr>
      <td colspan="2" align="center" valign="middle" bgcolor="#339966"><div align="center">
        <label>
        <input type="submit" name="Submit" value="Enviar">
        </label>
      </td>
    </tr>
  </table>
</form>
</body>
</html>

