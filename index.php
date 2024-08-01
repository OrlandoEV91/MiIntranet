<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("location: miintranet.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="css/index.css">
        <link rel="icon" href="imagenes/logo.png" type="image/x-icon">
        <title>Mi Intranet</title>
    </head>
    <body>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login"><!
                        <h3><!--¿Ya tienes una cuenta?--></h3>
                        <p><!--Inicié sesión para ingresar a Mi Intranet--></p>
                        <!--<button id="btn__iniciar-sesion">Iniciar sesión</button>-->
                    </div>
                    <div class="caja__trasera-register">
                        <h3><!--Aún no tienes una cuenta?--></h3>
                        <p><!--Regístrate para poder iniciar sesión--></p>
                        <!--<button id="btn__registrarse">Registrarse</button>-->
                    </div>
                </div>
                <div class="contenedor__login-register">
                    <form action="php/login_usuario.php" method="POST" class="formulario__login">
                        <h2>Iniciar sesión</h2>
                        <input type="text" placeholder="&#128231; Correo Electrónico" name="correo" required>
                        <input type="password" placeholder="&#128272; Contraseña" name="contrasena" required>
                        <button>Entrar</button>
                    </form>
                    <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="&#128100; Nombres Completos" name="nombre_completo" required>
                        <input type="text" placeholder="&#128231; Correo" name="correo" required>
                        <input type="password" placeholder="&#128272; Contraseña" name="contrasena" required>
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
        </main>
        <script src="js/script.js"></script>
    </body>
</html>