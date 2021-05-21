<?php
require "../Modelo/conexionBasesDatos.php";
extract($_REQUEST);
if (!isset($_REQUEST['msj'])) {
    $msj = 0;
}

$objConexion = Conectarse();

$sql = "SELECT * FROM empleados";

$resultado = $objConexion->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>

<h1 align="center">LISTADO DE EMPLEADOS</h1>
<table bgcolor="#D0F5A9" width="90%" border="1" align="center">
    <tr align="center" bgcolor="#339966">
        <td width="11%">Identificacion</td>
        <td width="16%">Nombres</td>
        <td width="12%">FechaIngreso</td>
        <td width="19%">Correo</td>
        <td width="19%">Genero</td>
        <td width="15%">Cargo</td>
        <td width="10%">Sueldo</td>
        <td width="5%">Editar</td>
        <td width="5%">Eliminar</td>
    </tr>

    <?php
while ($empleado = $resultado->fetch_object()) {
    ?>
    <tr>
        <td><?php echo $empleado->empIdentificacion ?> </td>
        <td><?php echo $empleado->empNombre ?> </td>
        <td><?php echo $empleado->empFechaIngreso ?> </td>
        <td><?php echo $empleado->empCorreo ?> </td>
        <td><?php echo $empleado->empGenero ?> </td>
        <td><?php echo $empleado->empCargo ?> </td>
        <td><?php echo $empleado->empSueldo ?> </td>
        <td aling="center">
            <div align="center"><a href="frmActualizarEmpleado.php?empIdentificacion=<?php echo $empleado->empIdentificacion ?>"><img src="../Recursos/editar.png" width="40" height="40" border="0" align="middle" /></a></div>
        </td>
        <td aling="center">
            <div align="center"><a href="eliminarEmpleado.php?empIdentificacion=<?php echo $empleado->empIdentificacion ?>"><img src="../Recursos/eliminar.jpg" width="40" height="40" border="0" align="middle" /></a></div>

        </td>
    </tr>
    <?php
} //cerrando el ciclo while
?>
</table>

<?php
if ($msj == 1) {
    echo "Se ha actualizado el Empleado correctamente";
}

if ($msj == 2) {
    echo "Problemas al actualizar el empleado";
}

if ($msj == 3) {
    echo "Se ha eliminado el Empleado correctamente";
}

if ($msj == 4) {
    echo "Problemas al eliminar el empleado";
}

?>

</html>