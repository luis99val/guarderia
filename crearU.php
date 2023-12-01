<?php

include('conexion.php');

$usuario = $_POST['nombre_de_usuario'];
$pass = $_POST['contraseña_sin_encriptar'];
$sql = "INSERT INTO  login (usuario,password) VALUES ('$usuario ', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>creacion de usuario</title>
        <style>
            body {
                background-image:url("madera.png");
                background-size: cover;
                color: white;
            }
            .opciones{
                position: relative;
                            top: 350px;
                            width: 200px;
                            left: 30px;
                            background-color:cadetblue;
                            text-align: center;
                            padding: 10px;
                            box-shadow: rgb(255, 181, 21) 5px 5px 10px;
                            border-radius: 15px;
                            text-decoration: white;
                            color: white;
            }
        </style>
    </head>
    <body>
    <center>
      
      
          <br><br>
      <center>
      
      <a href="operaciones_usuario.html" class="opciones" id="v">regresar</a>
    </body>
    </center>
    </html>';
    
    echo "<h1>usuario registrado <h1>";
} else {
    echo "Error al registrar usuario: " . $conn->error;
}

$conn->close();

?>
