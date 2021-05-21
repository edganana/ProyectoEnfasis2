<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INSERTAR RUTA DE FOTOS A LA BD</title>
</head>
<body style='background-image:url(fondo/wallpaper.jpg); background-attachment:fixed;background-repeat:no-repeat;background-position:50'>
<center><strong><h1>INSERTAR RUTA DE FOTOS A LA BD</h1></strong></center>
<p>
<form action="../controlador/valida_foto.php"method="POST"enctype = "multipart/form-data">
<center><table bgcolor="#D0F5A9" border="1">
<tr>
<tr>
      <td colspan="2" align="center" valign="middle" bgcolor="#D0F5A9"><div align="center">INSERTAR FOTO ANIMALES DE COMPANIA </div></td>
    </tr>
<td bgcolor="#D0F5A9"><strong>nombre:</strong></td><td> <input type="text" name="txtnom" value=""> </td>
</tr>
<tr >
<td bgcolor="#D0F5A9"><strong>foto:</strong></td><td> <input type="file" name="foto" id="foto"> </td>
</tr>
<tr>
<td colspan="2"align="center"bgcolor="#339966"><input type="submit" name="enviar" value="enviar"> </td>
</tr>
</table>
</form>
<br><br>
</body>
</html>