<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre_usuario_ingresado = $_POST["nombre_usuario"];
    $contrasena_ingresada = $_POST["contrasena"];

  include ("conbexion");

    // Obtener la contraseña almacenada en la base de datos
    $sql = "SELECT password FROM login WHERE usuario = '$nombre_usuario_ingresado'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contrasena_almacenada = $row["password"];

        // Verificar la contraseña
        if (password_verify($contrasena_ingresada, $contrasena_almacenada)) {
            echo "Inicio de sesión exitoso.";
        } else {
            echo "Nombre de usuario o contraseña incorrectos.";
        }
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }

    // Cerrar la conexión
    $conn->close();
}
?>
