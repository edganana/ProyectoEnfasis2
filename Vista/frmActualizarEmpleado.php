<?php
require "../Modelo/conexionBasesDatos.php";
if (!isset($_REQUEST['msj'])) {
    $msj = 0;
}
$objConexion = Conectarse();

$sql = "select carNombre, carSueldo from cargos";

$resultadoCargos = $objConexion->query($sql);
$resultadoSueldos = $objConexion->query($sql);

$sql = "select * from empleados where empIdentificacion = '$_REQUEST[empIdentificacion]' ";
$resultadoEmpleado = $objConexion->query($sql);
$empleado = $resultadoEmpleado->fetch_object();
?>

<form name="form1" method="post" action="../controlador/validarActualizarEmpleado.php">
    <table bgcolor="#D0F5A9" width="437" border="1" align="center">
        <tr>
            <td colspan="2" align="center" valign="middle" bgcolor="#339966">
                <div align="center">ACTUALIZAR EMPLEADO </div>
            </td>
        </tr>

        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Identificacion</div>
            </td>
            <td><label>
                    <input name="identificacion" type="text" id="identificacion" value="<?php echo $empleado->empIdentificacion ?>" size="40" style="width:270px">
                </label></td>
        </tr>

        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Nombres</div>
            </td>
            <td><label>
                    <input name="nombre" type="text" id="nombre" value="<?php echo $empleado->empNombre ?>" size="40" style="width:270px">
                </label></td>
        </tr>
        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">FechaIngreso </div>
            </td>
            <td><label>
                    <input name="fechaIngreso" type="date" id="fechaIngreso" value="<?php echo $empleado->empFechaIngreso ?>" size="40" style="width:270px">
                </label></td>
        </tr>

        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Correo</div>
            </td>
            <td><label>
                    <input name="correo" type="email" id="correo" value="<?php echo $empleado->empCorreo ?>" size="40" style="width:270px">
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
if ($empleado->empGenero == "Femenino") {
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
                <div align="right">Cargo</div>
            </td>
            <td><label for="cargo"></label>
                <select name="cargo" id="cargo" style="width:270px">
                    <option value="0">Seleccione</option>

                    <?php

while ($cargo = $resultadoCargos->fetch_object()) {
    ?>

                    <?php
if ($cargo->carNombre == $empleado->carNombre) {
        ?>
                    <option value="<?php echo $cargo->carNombre ?>" selected="selected"> <?php echo $cargo->carNombre ?></option>
                    <?php
}
    ?>
                    <option value="<?php echo $cargo->carNombre ?>"><?php echo $cargo->carNombre ?></option>
                    <?php
}
?>
                </select></td>
            </label></td>
        </tr>
        <tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Sueldo</div>
            </td>
            <td><label for="sueldo"></label>
                <select name="sueldo" id="sueldo" style="width:270px">
                    <option value="0">Seleccione</option>

                    <?php

while ($sueldo = $resultadoSueldos->fetch_object()) {
    ?>
                    <?php
if ($sueldo->carSueldo == $empleado->carSueldo) {
        ?>
                    <option value="<?php echo $sueldo->carSueldo ?>" selected="selected"> <?php echo $sueldo->carSueldo ?></option>
                    <?php
}
    ?>
                    <option value="<?php echo $sueldo->carSueldo ?>"><?php echo $sueldo->carSueldo ?> <?php echo $sueldo->carNombre ?></option>
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
    <input name="empIdentificacion" type="hidden" value="<?php echo $_REQUEST['empIdentificacion'] ?>" />
</form>