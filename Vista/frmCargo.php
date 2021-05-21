<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Agregar Cargo</title>
</head>

<body>

    <form name="form1" method="post" action="../controlador/validarCargo.php">
        <table bgcolor="#D0F5A9" width="437" border="1" align="center">
            <tr>
                <td colspan="2" align="center" valign="middle" bgcolor="#339966">
                    <div align="center">AGREGAR CARGO </div>
                </td>
            </tr>
            <tr>
                <td width="128" align="right" bgcolor="#D0F5A9">
                    <div align="right">Nombre Cargo</div>
                </td>
                <td width="293"><label>
                        <input name="cargo" type="int" id="cargo" size="40" style="width:270px">
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Sueldo Cargo</div>
                </td>
                <td><label>
                        <input name="sueldo" type="text" id="sueldo" size="40" style="width:270px">
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
    echo '<p align="center" >Se ha Agregado el Cargo Correctamente, ';
}

if ($msj == 2) {
    echo '<p align="center"> Problemas al Agregar los datos, favor revisar';
}

?>


