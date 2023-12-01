<?php
include('conexion.php');

$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apepat = $_POST['apellido_paterno'];
$apemat = $_POST['apellido_materno'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$idsalon = $_POST['salon'];
$sql = "INSERT INTO  maestros (nombre1,nombre2,apellido_paterno,apellido_materno,correo,telefono, id_salon) VALUES ('$nombre1 ', '$nombre2','$apepat','$apemat','$correo','$telefono', '$idsalon')";

if ($conn->query($sql) === TRUE) {
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>crear maestro</title>
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
      
      <a href="operaciones_maestros.html" class="opciones" id="v">regresar</a>
    </body>
    </center>
    </html>';
    echo "registrado correctamente";
} else {
    echo "Error al registrar: " . $conn->error;
}

$conn->close();
?>