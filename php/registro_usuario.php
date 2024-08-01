<?php

include 'conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(nombre_completo, correo, contrasena) VALUES('$nombre_completo', '$correo', '$contrasena')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
if(mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script>
    alert("El usuario o la contraseña son incorrectos, o ya existen. Por favor, inténtelo de nuevo.");
    window.location = "../index.php";
    </script>
    ';
    exit();
}
        
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("¡Usuario almacenado exitosamente!");
    window.location = "../index.html";
    </script>';
}else{
    echo '
    <script>
    alert("¡Inténtalo de nuevo! El usuario no ha sido almacenado.");
    window.location = "../index.html";
    </script>';
}



?>