<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql = "select carNombre, carSueldo from cargos";

$resultadoCargo = $objConexion->query($sql);
$resultadoSueldo = $objConexion->query($sql);

$resultado = $objConexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Agregar Empleado</title>
</head>

<body>

    <form name="form1" method="post" action="../controlador/validarAgregarEmpleado.php">
        <table bgcolor="#D0F5A9" width="437" border="1" align="center">
            <tr>
                <td colspan="2" align="center" valign="middle" bgcolor="#339966">
                    <div align="center">AGREGAR EMPLEADO </div>
                </td>
            </tr>
            <tr>
                <td width="128" align="right" bgcolor="#D0F5A9">
                    <div align="right">Identificacion</div>
                </td>
                <td width="293"><label>
                        <input name="identificacion" type="int" id="identificacion" size="40" style="width:270px">
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Nombres</div>
                </td>
                <td><label>
                        <input name="nombre" type="text" id="nombre" size="40" style="width:270px">
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Fecha Ingreso </div>
                </td>
                <td><label>
                        <input name="fechaIngreso" type="date" id="fechaIngreso" size="40" style="width:270px">
                    </label></td>
            </tr>

            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Correo</div>
                </td>
                <td><label>
                        <input name="correo" type="email" id="correo" size="40" style="width:270px">
                    </label></td>
            </tr>

            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Genero</div>
                </td>
                <td><label>
                        <select name="genero" id="genero" style="width:270px">
                            <option value="0">Seleccione</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </label></td>
            </tr>

            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Cargo</div>
                </td>
                <td><label for="cargo"></label>
                    <select name="cargo" id="cargo" style="width:270px">
                        <option value="0">Seleccione</option>
                        <?php

while ($cargo = $resultadoCargo->fetch_object()) {
    ?>
                        <option value="<?php echo $cargo->carNombre ?> "><?php echo $cargo->carNombre ?></option>

                        <?php
}
?>
                    </select></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Sueldo</div>
                </td>
                <td><label for="sueldo"></label>
                    <select name="sueldo" id="sueldo" style="width:270px">
                        <option value="0">Seleccione Acorde al cargo</option>

                        <?php

while ($sueldo = $resultadoSueldo->fetch_object()) {
    ?>
     
                        <option value="<?php echo $sueldo->carSueldo ?>"><?php echo $sueldo->carSueldo ?>; <?php echo $sueldo->carNombre ?></option>
                        <?php
}
?>
                    </select></td>
                </label></td>
            </tr>
            <tr>
                <td colspan="2" align="center" bgcolor="#339966"><input type="submit" name="button" id="button"></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
if ($msj == 1) {
    echo '<p align="center" >Se ha Agregado el Empleado Correctamente, ';
}

if ($msj == 2) {
    echo '<p align="center"> Problemas al Agregar los datos, favor revisar';
}

?>