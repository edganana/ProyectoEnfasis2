<?php
require "../Modelo/ConexionBasesDatos.php";
extract($_REQUEST);
if (!isset($_REQUEST['msj'])) {
    $msj = 0;
}

$objConexion = Conectarse();
$sql = " select an.aniComCodigo, an.aniComNombre, an.aniComTipo, an.aniComRaza, an.aniComColor, 
an.aniComGenero, an.aniComEdad, a.adoIdentificacion, a.adoNombres from animalesdecompania an, 
adoptantes a where (a.adoNombres = an.aniComNombre)";

$resultado = $objConexion->query($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=uft-8" />
    <title>Listar Animal de Compania</title>
</head>

<body>
    <h1 align="center">LISTADO DE MASCOTAS ADOPTADAS</h1>
    <table bgcolor="#D0F5A9" width="90%" border="1" align="center">
        <tr align="center" bgcolor="#339966">
            <td width="5%">Codigo</td>
            <td width="5%">Nombre</td>
            <td width="5%">Tipo</td>
            <td width="8%">Raza</td>
            <td width="8%">Color</td>
            <td width="5%">Genero</td>
            <td width="5%">Edad_Meses</td>
            <td width="8%">ID_Adoptante</td>
            <td width="10%">Nom_Adoptante</td>
            <td width="5%">Editar</td>
        </tr>

</body>
<?php
while ($animaldecompania = $resultado->fetch_object()) {
    ?>
<tr>
    <td><?php echo $animaldecompania->aniComCodigo ?></td>
    <td><?php echo $animaldecompania->aniComNombre ?></td>
    <td><?php echo $animaldecompania->aniComTipo ?></td>
    <td><?php echo $animaldecompania->aniComRaza ?></td>
    <td><?php echo $animaldecompania->aniComColor ?></td>
    <td><?php echo $animaldecompania->aniComGenero ?></td>
    <td><?php echo $animaldecompania->aniComEdad ?></td>
    <td><?php echo $animaldecompania->adoIdentificacion ?></td>
    <td><?php echo $animaldecompania->adoNombres ?></td>
    <td aling="center">

        <div align="center"><a href="frmActualizarAnimaldeCompaniaAdoptado.php?masNombre=<?php echo $animaldecompania->aniComNombre ?>"><img src="../Recursos/editar.png" width="30" height="30" border="0" align="middle" /></a></div>
    </td>
    <?php
} //cerrando el ciclo while
?>
    </table>

    <?php
if ($msj == 1) {
    echo "Se ha actualizado el Animal de Compañia correctamente";
}

if ($msj == 2) {
    echo "Problemas al actualizar el Animal de Compañia";
}

if ($msj == 3) {
    echo "Se ha eliminado el Animal de Compañia correctamente";
}

if ($msj == 4) {
    echo "Problemas al eliminar el Animal de Compañia";
}

?>

</html>