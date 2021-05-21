<?php
require "../Modelo/conexionBasesDatos.php";
extract($_REQUEST);
if (!isset($_REQUEST['msj'])) {
    $msj = 0;
}

$objConexion = Conectarse();
$sql = "select * from adoptantes";
$resultado = $objConexion->query($sql);
?>


<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>
<h1 align="center">LISTADO DE ADOPTANTES</h1>
<table width="90%" border="1" align="center" bgcolor="#D0F5A9">
    <tr align="center" bgcolor="#339966">
        <td width="6%">Identificacion</td>
        <td width="15%">Nombres</td>
        <td width="6%">FechNacimiento</td>
        <td width="5%">Genero</td>
        <td width="6%">Telefono</td>
        <td width="20%">Direccion</td>
        <td width="15%">Correo</td>
        <td width="10%">Nombre Mascota</td>
        <td width="5%">Editar</td>
        <td width="5%">Eliminar</td>
    </tr>

    <?php
while ($adoptante = $resultado->fetch_object()) {
    ?>
    <tr>
        <td><?php echo $adoptante->adoIdentificacion ?></td>
        <td><?php echo $adoptante->adoNombres ?></td>
        <td><?php echo $adoptante->adoFechaNacimiento ?></td>
        <td><?php echo $adoptante->adoGenero ?></td>
        <td><?php echo $adoptante->adoTelefono ?></td>
        <td><?php echo $adoptante->adoDireccion ?></td>
        <td><?php echo $adoptante->adoCorreo ?></td>
        <td><?php echo $adoptante->aniComAdoptado ?></td>
        <td aling="center">
            <div align="center"><a href="frmActualizarAdoptante.php?adoIdentificacion=<?php echo $adoptante->adoIdentificacion ?>"><img src="../Recursos/editar.png" width="40" height="40" border="0" align="middle" /></a></div>
        </td>
        <td aling="center">
            <div align="center"><a href="eliminarAdoptante.php?adoIdentificacion=<?php echo $adoptante->adoIdentificacion ?>"><img src="../Recursos/eliminar.jpg" width="40" height="40" border="0" align="middle" /></a></div>
        </td>
    </tr>
    <?php
} //cerrando el ciclo while
?>
</table>
<p>
    <?php
if ($msj == 1) {
    echo "Se ha actualizado el Adoptante correctamente";
}

if ($msj == 2) {
    echo "Problemas para actualizar el Adoptante";
}

if ($msj == 3) {
    echo "Se ha eliminado el Adoptante correctamente";
}

if ($msj == 4) {
    echo "Problemas para eliminar el Adoptante";
}

?>
</p>

</html>