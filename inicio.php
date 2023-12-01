<?php
include("conexion.php");
// ... (Código de conexión)

// Datos del usuario
$nombre_usuario = "nombre_de_usuario";
$contrasena = "contraseña_sin_encriptar";

// Encriptar la contraseña
$contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);

// Inserción del usuario con la contraseña encriptada
$sql = "INSERT INTO login (usuario, password) VALUES ('$nombre_usuario', '$contrasena_encriptada')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario insertado correctamente.";
} else {
    echo "Error al insertar el usuario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
