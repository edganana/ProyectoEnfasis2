<?php
require "../Modelo/conexionBasesDatos.php";
$objConexion = Conectarse();
$sql = "SELECT idAdoptante, adoNombres FROM adoptantes WHERE aniComAdoptado=0";
$adoptantes=$objConexion->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=uft=8" />
    <title>Formulario Agregar Animalde Compania</title>
</head>

<body>
    <form id="form1" name="form1" method="post" action="../controlador/validarfrmAgregarAnimaldeCompania.php">
        <table bgcolor="#D0F5A9" width="423" border="1" align="center">
            <tr>
                <td colspan="2" bgcolor="#339966">
                    <div align="center">AGREGAR MASCOTAS </div>
                </td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Codigo:</div>
                </td>
                <td><label>
                        <input name="codigo" type="text" id="codigo" size="40" style="width:270px">
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Nombre:</div>
                </td>
                <td><label>
                        <input name="nombre" type="text" id="nombre" size="40" style="width:270px">
                    </label></td>
            </tr>

            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Tipo:</div>
                </td>
                <td><label>
                        <select name="tipo" id="tipo" style="width:270px">
                            <option value="0">Seleccione</option>
                            <option value="Perruno">Perruno</option>
                            <option value="Gatuno">Gatuno</option>
                        </select>
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Raza</div>
                </td>
                <td><label>
                        <input name="raza" type="text" id="raza" size="40" style="width:270px">
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Color</div>
                </td>
                <td><label>
                        <input name="color" type="text" id="color" size="40" style="width:270px">
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Genero:</div>
                </td>
                <td><label>
                        <select name="genero" id="genero" style="width:270px">
                            <option value="0">Seleccione</option>
                            <option value="Hembra">Hembra</option>
                            <option value="Macho">Macho</option>
                        </select>
                    </label></td>
            </tr>
            <td align="right" bgcolor="#D0F5A9">
                <div align="right">Edad</div>
            </td>
            <td><label>
                    <input name="edad" type="text" id="edad" size="40" style="width:270px">
                </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Estado:</div>
                </td>
                <td><label>
                        <select name="estado" id="estado" style="width:270px">
                            <option value="0">Seleccione</option>
                            <option value="Adoptado">Adoptado</option>
                            <option value="Para Adopcion">Para Adopcion</option>
                        </select>
                    </label></td>
            </tr>
            <tr>
                <td align="right" bgcolor="#D0F5A9">
                    <div align="right">Nom_Adoptante:</div>
                    </td>
                <td width="67%"><select name="adoptante" id="adoptante" style="width:300px">
        <option value="0">Seleccione</option>
        <?php
		//Agrego a la lista paciente los pacientes existentes para poder seleccionar		
		while ($adoptante=$adoptantes->fetch_object())
		{
			?>
             <option value="<?php echo $adoptante->idAdoptante;?> ">
			 	<?php echo $adoptante->adoNombres;?>
             </option>
		<?php	
		}//cerrando el ciclo while		
		?>
      </select></td>
    </tr>
            <tr>
                <td colspan="2" bgcolor="#339966">
                    <div align="center">
                        <label>
                            <input type="submit" name="Submit" value="Enviar" />
                        </label>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php

if ($msj == 1) {
    echo '<p align="center" >Se ha Agregado la mascota Correctamente, ';
}

if ($msj == 2) {
    echo '<p align="center"> Problemas al Agregar los datos, favor revisar';
}

?>