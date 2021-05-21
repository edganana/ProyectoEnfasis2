<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$sql = "select numeroConsecutivo, fecha, hora, tipoDocumento, numeroDocumento, nombre, apellido, direccion, telefono, servicio, marca, clase, procesador, teclado, placaBase, memoria, discoDuro, tarjetaRed, torre, audio, monitor, tarjetaVideo, comentarios, nombreTecnico from ordenestrabajo";
$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=uft=8" />
<title>Ordene Trabajo</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="../controlador/validarfrmAgregarOrdenTrabajo.php">
  <table bgcolor="#D0F5A9" width="489" border="1" align="center">
    <tr>
      <td colspan="2" bgcolor="#339966"><div align="center">AGREGAR ORDEN DE TRABAJO </div></td>
    </tr>
    <tr>
      <td width="160" align="right" bgcolor="#D0F5A9"><div align="right">NumeroConsecutivo </div></td>
      <td width="317"><label>
        <input name="numeroConsecutivo" type="text" id="numeroConsecutivo" size="40"style="width:270px">
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Fecha</div></td>
      <td><label>
        <input name="fecha" type="date" id="fecha" size="40"style="width:270px">
      </label></td>
    </tr>
    
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Hora</div></td>
      <td><label>
        <input name="hora" type="time" id="hora" size="40"style="width:270px">
      </label></td>
    </tr>
    
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Tipo Documento:</div></td>
      <td><label>
        <select name="tipoDocumento" id="tipoDocumento"style="width:270px">
          <option value="0">Seleccione</option>
          <option value="cedCiudadania">CedCiudadania</option>
          <option value="cedExtranjeria">CedExtranjeria</option>
          <option value="Pasaporte">Pasaporte</option>
        </select>
      </label></td>
    </tr>
     <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Numero Documento </div></td>
      <td><label>
        <input name="numeroDocumento" type="text" id="numeroDocumento" size="40"style="width:270px">
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Nombres:</div></td>
      <td><label>
        <input name="nombre" type="text" id="nombre" size="40"style="width:270px">
      </label></td>
    </tr>
    
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Apellidos:</div></td>
      <td><label>
        <input name="apellido" type="text" id="apellido" size="40"style="width:270px">
      </label></td>
    </tr>
    
	<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Telefono:</div></td>
      <td><label>
        <input name="telefono" type="text" id="telefono" size="40"style="width:270px">
      </label></td>
    </tr>
    
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Clase Servicio:</div></td>
      <td><label>
        <select name="servicio" id="servicio"style="width:270px">
          <option value="0">Seleccione</option>
          <option value="Mantenimiento">Mantenimiento</option>
          <option value="Reparacion">Reparacion</option>
          <option value="Actualizacion">Actualizacion</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Marca</div></td>
      <td><label>
        <input name="marca" type="text" id="marca" size="40"style="width:270px">
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Clase</div></td>
      <td><label>
        <input name="clase" type="text" id="clase" size="40"style="width:270px">
      </label></td>
    </tr>
     <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Procesador</div></td>
      <td><label>
        <input name="procesador" type="text" id="procesador" size="40"style="width:270px">
      </label></td>
    </tr>
    
	<tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Teclados:</div></td>
      <td><label>
        <select name="teclado" id="teclado"style="width:270px">
          <option value="">Seleccione</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
           <option value="5">5</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Placa Bases:</div></td>
      <td><label>
        <select name="placaBase" id="placaBase"style="width:270px">
          <option value="">Seleccione</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
           <option value="5">5</option>
        </select>
      </label></td>
    </tr>
    
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Memorias:</div></td>
      <td><label>
        <select name="memoria" id="memoria"style="width:270px">
          <option value="">Seleccione</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
           <option value="5">5</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Discos Duros:</div></td>
      <td><label>
        <select name="discoDuro" id="discoDuro"style="width:270px">
          <option value="">Seleccione</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Tarjetas de Red:</div></td>
      <td><label>
        <select name="tarjetaRed" id="tarjetaRed"style="width:270px">
          <option value="">Seleccione</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
           <option value="5">5</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Torres:</div></td>
      <td><label>
        <select name="torre" id="torre"style="width:270px">
          <option value="">Seleccione</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
           <option value="5">5</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Audios:</div></td>
      <td><label>
        <select name="audio" id="audio"style="width:270px">
          <option value="">Seleccione</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
           <option value="5">5</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Monitores:</div></td>
      <td><label>
        <select name="monitor" id="monitor"style="width:270px">
          <option value="">Seleccione</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
           <option value="5">5</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Tarjetas de Video:</div></td>
      <td><label>
        <select name="tarjetaVideo" id="tarjetaVideo"style="width:270px">
          <option value="">Seleccione</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
           <option value="5">5</option>
        </select>
      </label></td>
    </tr>
     <td align="right" bgcolor="#D0F5A9">Comentarios</td>
      <td><label for="comentarios"></label>
      <textarea name="comentarios" id="comentarios" cols="35" rows="5" required="required"></textarea></td>
    </tr>
      <tr>
      <td align="right" bgcolor="#D0F5A9"><div align="right">Fecha Entrega Elemento </div></td>
      <td><label>
        <input name="fechaEntrega" type="date" id="fechaEntrega" size="40"style="width:270px">
      </label></td>
    </tr>
    <td align="right" bgcolor="#D0F5A9"><div align="right">Nombre del Tecnico</div></td>
      <td><label>
        <input name="nombreTecnico" type="text" id="nombreTecnico" size="40"style="width:270px">
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#339966"><input type="submit" name="button" id="button"></td>
    </tr>
  </table>
</form>
</body>
</html>