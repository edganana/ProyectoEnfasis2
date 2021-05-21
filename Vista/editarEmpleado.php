<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();

$sql = "update e.empNombres, e.empFechaIngreso, e.empCorreo, e.empGenero, ca.nomCargo, ca.carSueldo from empleados e, cargos ca";

$empleados = $objConexion->query($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=uft=8" />
    <title>Formulario Editar Empleado</title>
</head>

<body>
    <form name="form1" method="post" action="validarActualizarEmpleado.php">
        <table width="437" border="1" align="center">
            <tr>
                <td colspan="2" align="center" valign="middle" bgcolor="#339966">
                    <div align="center">EDITAR EMPLEADO </div>
                </td>
            </tr>

            <tr>
                <td align="right" bgcolor="#CCCCCC">
                    <div align="right">Nombres</div>
                </td>
                <td><label>
                        <input name="nombre" type="text" id="nombre" size="40" style="width:270px">
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#CCCCCC">
                    <div align="right">Fecha Ingreso </div>
                </td>
                <td><label>
                        <input name="fechaIngreso" type="date" id="fechaIngreso" size="40" style="width:270px">
                    </label></td>
            </tr>

            <tr>
                <td align="right" bgcolor="#CCCCCC">
                    <div align="right">Correo</div>
                </td>
                <td><label>
                        <input name="correo" type="email" id="correo" size="40" style="width:270px">
                    </label></td>
            </tr>

            <tr>
                <td align="right" bgcolor="#CCCCCC">
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
                <td align="right" bgcolor="#CCCCCC">
                    <div align="right">Cargo</div>
                </td>
                <td><label for="cargo"></label>
                    <select name="cargo" id="cargo" style="width:270px">
                        <option value="0">Seleccione</option>

                        <?php

while ($cargo = $resultado->fetch_object()) {
    ?>
                        <option value="<?php echo $cargo->nomCargo ?>"><?php echo $cargo->nomCargo ?></option>
                        <?php
}
?>
                    </select></td>
            </tr>
            <tr>
                <td colspan="2" align="center" bgcolor="#339966"><input type="submit" name="button" id="button"></td>
            </tr>
        </table>

    </form>
</body>

</html>