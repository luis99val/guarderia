<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE usuario='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['usuario'] = $username;
        header("location: index.php");
    } else {
        echo "Nombre de usuario o contraseña incorrectos";
        
    }

    $conn->close();
}

?>
