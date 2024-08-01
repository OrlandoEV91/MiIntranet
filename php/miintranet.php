<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("Por favor, debes iniciar sesión");
        window.location = "../index.php";
    </script>
    ';
    session_destroy();
    die();
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="../css/miintranet.css">
        <link rel="icon" href="../imagenes/logo.png" type="image/x-icon">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <div class="header__superior">
                <div class="logo">
                    <img src="../imagenes/logo.png" alt="">
                </div>
                <div class="search">
                    <input type="search" placeholder="¿Qué deseas buscar?">
                </div>
            </div>
            <div class="container__menu">
                <input type="checkbox" id="check__menu">
                <label for="check__menu">
                    <i class="&#9776;"></i>
                </label>
                <div class="menu">
                    <nav>
                        <ul>
                            <li><a href="miintranet.php" id="selected"></a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contactos</a></li>
                            <li><a href="#">Cursos</a></li>
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">Servicios</a><ul>
                                <li><a href="#">Analistas</a></li>
                                <li><a href="#">Diseño gráficos</a></li>
                                <li><a href="#">Diseño web</a></li>
                                <li><a href="#">Ordenadores</a></li>
                                <li><a href="#">Servidores</a></li></ul>
                                <li><a href="../index.php">Cerrar sesión</a><ul>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </body>
</html>