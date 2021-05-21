<?php
require "../Modelo/conexionBasesDatos.php";
extract($_REQUEST);
if (!isset($_REQUEST['msj'])) {
    $msj = 0;
}

$objConexion = Conectarse();
$sql = "select * from animalesdecompania where aniComObservaciones = 'PARA ADOPCION' ";

$resultado = $objConexion->query($sql);
?>
<h1 align="center">LISTADO MASCOTAS DISPONIBLES</h1>
<table bgcolor="#D0F5A9" width="90%" border="1" align="center">
    <tr align="center" bgcolor="#339966">
        <td width="10%">Codigo</td>
        <td width="7%">Nombre</td>
        <td width="7%">Tipo</td>
        <td width="8%">Raza</td>
        <td width="15%">Color</td>
        <td width="7%">Genero</td>
        <td width="7%">Edad</td>
        <td width="10%">Estado</td>
        <td width="5%">Editar</td>
        <td width="5%">Eliminar</td>
    </tr>

    <?php
while ($mascota = $resultado->fetch_object()) {
    ?>
    <tr>
        <td><?php echo $mascota->aniComCodigo ?> </td>
        <td><?php echo $mascota->aniComNombre ?> </td>
        <td><?php echo $mascota->aniComTipo ?> </td>
        <td><?php echo $mascota->aniComRaza ?> </td>
        <td><?php echo $mascota->aniComColor ?> </td>
        <td><?php echo $mascota->aniComGenero ?> </td>
        <td><?php echo $mascota->aniComEdad ?> </td>
        <td><?php echo $mascota->aniComObservaciones ?> </td>
        <td aling="center">
            <div align="center"><a href="frmActualizarAnimaldeCompania.php?masNombre=<?php echo $mascota->masNombre ?>"><img src="../Recursos/editar.png" width="40" height="40" border="0" align="middle" /></a></div>
        </td>
        <td aling="center">
            <div align="center"><a href="eliminarAnimaldeCompania.php?masNombre=<?php echo $mascota->masNombre ?>"><img src="../Recursos/eliminar.jpg" width="40" height="40" border="0" align="middle" /></a></div>
        </td>
    </tr>
    <?php
} //cerrando el ciclo while
?>
</table>
<p>
    <?php
if ($msj == 1) {
    echo "Se ha agregado el adoptante correctamente, ACTUALICE EL ANIMAL DE COMPANIA ADOPTADO";
}

if ($msj == 2) {
    echo "Problemas para agregar el adoptante";
}

if ($msj == 3) {
    echo "Se ha eliminado el Animal de Compania correctamente";
}

if ($msj == 4) {
    echo "Problemas para eliminar el Animal de Compania";
}

if ($msj == 5) {
    echo "Se ha agregado el animal de compania correctamente";
}

if ($msj == 6) {
    echo "Problemas para agregar el animal de compania";
}

?>
</p>