<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql = "select idAnimaldeCompania, aniComNombre from animalesdeCompania where aniComObservaciones= 'PARA ADOPCION' ";
$mascotas=$objConexion->query($sql);

?>

<form name="form1" method="post" action="../controlador/validarfrmAgregarAdoptante.php">

    <table width="437" border="1" align="center">
        <tr>
            <td colspan="2" align="center" valign="middle" bgcolor="#339966">
                <div align="center">AGREGAR ADOPTANTE </div>
            </td>
        </tr>
        <tr>
            <td width="128" align="right" bgcolor="#D0F5A9">
                <div align="right">Identificacion:</div>
            </td>
            <td width="293" bgcolor="#D0F5A9"><label>
                    <input name="identificacion" type="text" id="identificacion" size="40" style="width:270px">
                </label></td>
        </tr>
        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Nombres:</div>
            </td>
            <td bgcolor="#D0F5A9"><label>
                    <input name="nombres" type="text" id="nombres" size="40" style="width:270px">
                </label></td>
        </tr>
        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Apellidos:</div>
            </td>
            <td bgcolor="#D0F5A9"><label>
                    <input name="apellidos" type="text" id="apellidos" size="40" style="width:270px">
                </label></td>
        </tr>
        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Fecha Nacimiento: </div>
            </td>
            <td bgcolor="#D0F5A9"><label>
                    <input name="fechaNacimiento" type="date" id="fechaNacimiento" size="40" style="width:270px">
                </label></td>
        </tr>
        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Genero:</div>
            </td>
            <td bgcolor="#D0F5A9"><label>
                    <select name="genero" id="genero" style="width:270px">
                        <option value="0">Seleccione</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </label></td>
        </tr>

        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Telefono:</div>
            </td>
            <td bgcolor="#D0F5A9"><label>
                    <input name="telefono" type="text" id="telefono" size="40" style="width:270px">
                </label></td>
        </tr>

        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Direccion:</div>
            </td>
            <td bgcolor="#D0F5A9"><label>
                    <input name="direccion" type="text" id="direccion" size="40" style="width:270px">
                </label></td>
        </tr>

        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Correo:</div>
            </td>
            <td bgcolor="#D0F5A9"><label>
                    <input name="correo" type="text" id="correo" size="40" style="width:270px">
                </label></td>
        </tr>

        <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Nom_Mascota:</div>
                    </td>
                <td width="67%"><select name="mascota" id="mascota" style="width:300px">
        <option value="0">Seleccione</option>
        <?php
            //Agrego a la lista paciente los pacientes existentes para poder seleccionar
         while ($mascota = $mascotas->fetch_object()) {
    ?>
                    <option value="<?php echo $mascota->idAnimaldeCompania ?>">
                    <?php echo $mascota->aniComNombre ?></option>

                    <?php
}//cerrando el ciclo while		
?>
</select></td>
</tr>
      <tr>
          <td colspan="2" bgcolor="#339966">
              <div align="center">
                  <label>
                      <input type="submit" name="Submit" value="Enviar" />
                  </label>
              </div>
          </td>
      </tr>
  </table>
</form>
</body>

</html>

<?php

if ($msj == 1) {
    echo '<p align="center" >Adoptante agregado Correctamente, ';
}

if ($msj == 2) {
    echo '<p align="center"> Problemas al Agregar los datos, DEBE SELECCIONAR UNA MASCOTA';
}

?>