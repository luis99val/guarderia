<?php
include('conexion.php');

$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apepat = $_POST['apellido_paterno'];
$apemat = $_POST['apellido_materno'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$sql = "INSERT INTO  padres (nombre1,nombre2,apellido_paterno,apellido_materno,correo,telefono) 
VALUES ('$nombre1 ', '$nombre2','$apepat','$apemat','$correo','$telefono')";

if ($conn->query($sql) === TRUE) {
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>insertar padre</title>
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
            #v:hover{
                background-color: rgb(255, 181, 21);
                       }
        </style>
    </head>
    <body>
    <center>
      <center>
      <a href="operaciones_padres.html" class="opciones" id="v">regresar</a>
    </body>
    </html>';
    echo "<center><h1>padre registrado correctamente<h1></center>";
} else {
    echo "Error al registrar un padre: " . $conn->error;
}

$conn->close();
?>


