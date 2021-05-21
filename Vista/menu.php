<!DOCTYPE html>
<html lang="es">

<head>
    <title>Refugio Animal</title>
    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap4/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../librerias/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="Css/login.css">

</head>
<!-- Navigation -->

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../images/icon1.png" alt="" width="100px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="far fa-id-card"></span>Adoptantes
                            <span class="sr-only">(current</span>
                        </a>
                        <div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                            <a style="text-decoration:none" href="index2.php?pag=frmagregarAdoptante">&nbsp agregar</a>
                            <a style="text-decoration:none" href="index2.php?pag=listarAdoptante">&nbsp &nbsp &nbsp &nbsp Listar</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="fas fa-people-carry"></span> Empleados</a>
                        <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                            <a style="text-decoration:none" href="index2.php?pag=frmAgregarEmpleado">&nbsp Agregar</a>
                            <a style="text-decoration:none" href="index2.php?pag=listarEmpleado">&nbsp &nbsp &nbsp &nbsp Listar</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="fas fa-people-carry"></span> Cargos</a>
                        <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                            <a style="text-decoration:none" href="index2.php?pag=frmCargo">Agregar</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="fas fa-ambulance"></span>Tratamientos</a>
                        <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                            <a style="text-decoration:none" href="index2.php?pag=insertarTratamiento"> &nbsp Agregar</a> <br>
                            <a style="text-decoration:none" href="index2.php?pag=listarTratamiento"> &nbsp Atender</a> <br>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="fas fa-clipboard-list"></span> Historia Clinica</a>
                        <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                            <a style="text-decoration:none" href="index2.php?pag=agregarHistoriaClinica"> &nbsp Agregar</a>
                            <a style="text-decoration:none" href="index2.php?pag=listarHistoriaClinica"> &nbsp &nbsp &nbsp Listar</a>
                        </div>
                    </li>
      
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="fas fa-dog"></span> Mascotas Disponibles</a>
                        <div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                            <a style="text-decoration:none" href="index2.php?pag=frmAgregarAnimaldeCompania"> &nbsp Agregar</a>
                            <a style="text-decoration:none" href="index2.php?pag=listarAnimaldeCompania"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspListar</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="fas fa-paw"></span> Mascotas Adoptadas</a>
                        <div id="m7" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                            <a style="text-decoration:none" href="index2.php?pag=listarAnimaldeCompaniaAdoptado"> &nbsp Listar</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="fas fa-user-friends"></span> Medicos</a>
                        <div id="m8" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                            <a style="text-decoration:none" href="index2.php?pag=agregarMedico"> &nbsp Agregar</a>
                            <a style="text-decoration:none" href="index2.php?pag=listarMedicos"> &nbsp &nbsp &nbsp Listar</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="fas fa-user-friends"></span>Ordenes Trabajo</a>
                        <div id="m9" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                            <a style="text-decoration:none" href="index2.php?pag=frmAgregarOrdenTrabajo"> &nbsp Agregar</a>
                            <a style="text-decoration:none" href="index2.php?pag=listarOrdenTrabajo"> &nbsp &nbsp &nbsp Listar</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#"> <span class="fas fa-user-friends"></span>Visitantes</a>
                        <div id="m10" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                            <a style="text-decoration:none" href="index2.php?pag=agregarVisitante"> &nbsp Reg_Ingreso</a>
                            <a style="text-decoration:none" href="index2.php?pag=listarVisitante"> &nbsp Listar</a>
                        </div>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="salir.php" onmouseover="mopen('m9')" onmouseout="mclosetime()">Salir</a>

    </li>
</ul></nav>
<div>Usuario: <?php echo $_SESSION['user'] ?> </div>
<div style="clear:both"></div>

<div style="clear:both"></div>

</body>

</html>


