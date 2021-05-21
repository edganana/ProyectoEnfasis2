<?php
require "../Modelo/conexionBasesDatos.php";

$objConexion=Conectarse();

$sql= "select aniComCodigo, aniComNombre, aniComTipo, aniComRaza, aniComColor, aniComGenero, aniComEdad, aniComObservaciones from animalesdecompania";

$resultado = $objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=uft=8" />
<title>Formulario Agregar Animalde Compania</title>
</head>


<body>
<form id="form1" name="form1" method="post" action="validarfrmAgregarAnimaldeCompaniaAdoptado.php">
  <table bgcolor="#D0F5A9" width="423" border="1" align="center">
    <tr>
      <td colspan="2" bgcolor="#339966"><div align="center">AGREGAR ANIMAL DE COMPANIA </div></td>
    </tr>
    <tr>
      <td width="130" bgcolor="#C0C0C0"><div align="right">Codigo</div></td>
      <td width="277"><label>
        <input name="aniComCodigo" type="text" id="aniComCodigo" size="30" />
      </label></td>
    </tr>	
    <tr>
      <td bgcolor="#C0C0C0"><div align="right">Nombre</div></td>
      <td><label>
        <input name="aniComNombre" type="text" id="aniComNombre" size="30" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#C0C0C0"><div align="right">Tipo</div></td>
      <td><label>
        <select name="aniComTipo" id="aniComTipo" style= "width:242px">
          <option value="0">Seleccione</option>
          <option value="Perruno">Perruno</option>
          <option value="Gatuno">Gatuno</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#C0C0C0"><div align="right">Raza</div></td>
      <td><label>
        <input name="aniComRaza" type="text" id="aniComRaza" size="30" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#C0C0C0"><div align="right">Color</div></td>
      <td><label>
        <input name="aniComColor" type="text" id="aniComColor" size="30" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#C0C0C0"><div align="right">Genero</div></td>
      <td><label>
        <select name="aniComGenero" id="aniComGenero" style="width:242px">
          <option value="0">Seleccione</option>
          <option value="Hembra">Hembra</option>
          <option value="Macho">Macho</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#C0C0C0"><div align="right">Edad</div></td>
      <td><label>
        <input name="aniComEdad" type="text" id="aniComEdad" size="30" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#C0C0C0"><div align="right">Observaciones</div></td>
      <td><label>
        <input name="aniComObservaciones" type="text" id="aniComObservaciones" size="30" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#339966"><div align="center">
        <label>
        <input type="submit" name="Submit" value="Enviar" />
        </label>
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>

