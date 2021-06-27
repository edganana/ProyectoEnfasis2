<?php
extract($_REQUEST);
if (!isset($_REQUEST['x'])) {
    $x = 0;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BIENVENIDO AL SITIO OFICIAL REFUGIO ANIMAL</title>
    <title>CREADO CON DOCKER</title>
    <script src="Js/menu.js"> </script>
    <link rel="stylesheet" type="text/css" href="Css/login.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="Images/images.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form id="form1" name="form1" method="post" action="Controlador/validarInicioSesion.php">

                <input name="login" type="text" id="login" class="fadeIn second" placeholder="Nombre Usuario">
                <input name="pass" type="password" id="pass" class="fadeIn third" placeholder="Contraseña">
                <input name="button" type="submit" id="button" class="fadeIn fourth" value="Enviar">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Olvidó contraseña?</a>
            </div>

        </div>
    </div>

    <?php

if ($x == 1) {
    echo "<br><p align='center'> Usuario no registrado con los datos ingresados, vuelva a intentar";
}

if ($x == 2) {
    echo "<br><p align='center'> Deben Iniciar Sesión para poder ingresar a la Aplicación";
}

if ($x == 3) {
    echo "<br><p align='center'> El Usuario ha cerrado la Sesión";
}

?><script src="librerias/sweetalert.min.js"></script>
</body>

</html>