<?php
session_start();
extract($_REQUEST);
require "../Modelo/conexionBasesDatos.php";
$objConexion=Conectarse();
$nom=$_REQUEST["txtnom"];
$foto=$_FILES["foto"] ["name"];
$ruta=$_FILES["foto"] ["tmp_name"];
$destino="fotos/".$foto;
copy($ruta, $destino);
$sql="insert into fotos (nombre, foto) values ('$nom', '$destino')";
$resultado=$objConexion->query($sql);
header("location:../Vista/index2.php?pag=frmInsertarFoto&msj=1");
?>
