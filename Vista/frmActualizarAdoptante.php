<?php
require "../Modelo/conexionBasesDatos.php";
if (!isset($_REQUEST['msj'])) {
    $msj = 0;
}

$objConexion = Conectarse();
$sql = "select idAnimaldeCompania, aniComNombre from animalesdecompania";

$resultadoMascotas = $objConexion->query($sql);

$sql = "select * from adoptantes where adoIdentificacion= '$_REQUEST[adoIdentificacion]'";
$resultadoAdoptantes = $objConexion->query($sql);
$adoptante = $resultadoAdoptantes->fetch_object();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=uft=8" />
    <title>Formulario Actualizar Adoptante</title>
</head>

<body>
    <form name="form1" method="post" action="../controlador/validarfrmActualizarAdoptante.php">
        <table bgcolor="#D0F5A9" width="437" border="1" align="center">
            <tr>
                <td colspan="2" align="center" valign="middle" bgcolor="#339966">
                    <div align="center">ACTUALIZAR DATOS ADOPTANTE </div>
                </td>
            </tr>

            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Nombres</div>
                </td>
                <td><label>
                        <input name="nombres" type="text" id="nombres" value="<?php echo $adoptante->adoNombres ?>" size="40" style="width:270px">

                        </select>
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">FechaNacimiento </div>
                </td>
                <td><label>
                        <input name="fechaNacimiento" type="date" id="fechaNacimiento" value="<?php echo $adoptante->adoFechaNacimiento ?>" size="40" style="width:270px">
                        </select>
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Genero</div>
                </td>
                <td><label>
                        <select name="genero" id="genero" style="width:270px">
                            <option value="0">Seleccione</option>

                            <?php

if ($adoptante->adoGenero == "Femenino") {
    ?>

                            <option value="Femenino" selected="selected">Femenino</option>
                            <option value="Masculino">Masculino</option>
                            <?php
} else {
    ?>

                            <option value="Masculino" selected="selected">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <?php
}
?>

                        </select>
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Telefono</div>
                </td>
                <td><label>
                        <input name="telefono" type="text" id="telefono" value="<?php echo $adoptante->adoTelefono ?>" size="40" style="width:270px">
                    </label></td>
            </tr>

            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Direccion</div>
                </td>
                <td><label>
                        <input name="direccion" type="text" id="direccion" value="<?php echo $adoptante->adoDireccion ?>" size="40" style="width:270px">
                    </label></td>
            </tr>

            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Correo</div>
            </td>
            <td><label for="correo"></label>
                <input name="correo" type="email" id="correo" value=" <?php echo $adoptante->adoCorreo ?>" size="40" style="width:270px">

            </td>

            </tr>

            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Seleccione Mascota</div>
                </td>
                <td>
                    <label for="mascota">
                        <select name="mascota" id="mascota" style="width:270px">
                            <option value="0">Seleccione</option>

                            <?php

while ($mascota = $resultadoMascotas->fetch_object()) {
    ?>
                            <option value="<?php echo $mascota->idAnimaldeCompania ?>"><?php echo $mascota->idAnimaldeCompania ?>; <?php echo $mascota->aniComNombre ?>
                            </option>

                            <?php
}
?>
                        </select>
                </td>
                </label></td>
            </tr>
            <tr>
                <td colspan="2" align="center" bgcolor="#339966">
                    <input type="submit" name="button" id="button"></td>
            </tr>
        </table>
        <input name="adoIdentificacion" type="hidden" value="<?php echo $_REQUEST['adoIdentificacion'] ?>">
    </form>
    <br><br>
    <div align="center">
        <tr>
            <td>
                <div align="center">Mascota Adoptada</div>
            </td>
            <td><label for="adoptada"></label>
                <input name="adoptada" type="text" id="adoptada" value="<?php echo $adoptante->aniComAdoptado ?>" size="20" style="width:100px">

            </td>
        </tr>
    </div>
</body>

</html>