<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql = "select * from mascotas where masNombre= '$_REQUEST[masNombre]'";
$resultado = $objConexion->query($sql);
$mascota = $resultado->fetch_object();

?>
<html>

<body>

    <head>

    </head>
    <form name="form1" method="post" action="../controlador/validarfrmActualizarAnimaldeCompania.php">
        <table bgcolor="#D0F5A9" width="437" border="1" align="center">
            <tr>
                <td colspan="2" align="center" valign="middle" bgcolor="#339966">
                    <div align="center">ACTUALIZAR MASCOTAS </div>
                </td>
            </tr>

            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Codigo:</div>
                </td>
                <td><label>
                        <input name="codigo" type="text" id="codigo" value="<?php echo $mascota->codMascota ?>" size="40" style="width:270px">
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Tipo</div>
                </td>
                <td><label>
                        <input name="tipo" type="text" id="tipo" value="<?php echo $mascota->masTipo ?>" size="40" style="width:270px">
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Raza</div>
                </td>
                <td><label>
                        <input name="raza" type="text" id="raza" value="<?php echo $mascota->masRaza ?>" size="40" style="width:270px">
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Color</div>
                </td>
                <td><label>
                        <input name="color" type="text" id="color" value="<?php echo $mascota->masColor ?>" size="40" style="width:270px">
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

if ($mascota->Genero == "Hembra") {
    ?>

                            <option value="Hembra" selected="selected">Hembra</option>
                            <option value="Macho">Macho</option>
                            <?php
} else {
    ?>

                            <option value="Macho" selected="selected">Macho</option>
                            <option value="Hembra">Hembra</option>
                            <?php
}
?>

                        </select>
                    </label></td>
            </tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Edad</div>
            </td>
            <td><label>
                    <input name="edad" type="text" id="edad" value="<?php echo $mascota->masEdad ?>" size="40" style="width:270px">
                </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Estado</div>
                </td>
                <td><label>
                        <select name="estado" id="estado" style="width:270px">
                            <option value="0">Seleccione</option>

                            <?php

if ($mascota->Estado == "ADOPTADO") {
    ?>

                            <option value="ADOPTADO" selected="selected">ADOPTADO</option>
                            <option value="PARA ADOPCION">PARA ADOPCION</option>
                            <?php
} else {
    ?>

                            <option value="PARA ADOPCION" selected="selected">PARA ADOPCION</option>
                            <option value="ADOPTADO">ADOPTADO</option>
                            <?php
}
?>
                        </select>
                    </label></td>
            </tr>
            <tr>
                <td colspan=" 2" align="center" bgcolor="#339966">
                    <input type="submit" name="button" id="button"></td>
            </tr>
        </table>
        <input name="masNombre" type="hidden" value="<?php echo $_REQUEST['masNombre']
?>">
    </form>
</body>

</html>