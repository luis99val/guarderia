<?php
include('conexion.php');

$numero_salon = $_POST['numero_salon'];
$capacidad = $_POST['capacidad'];
$edad_minima = $_POST['edad_minima'];
$edad_maxima = $_POST['edad_maxima'];
$id_niño = $_POST['id_niño'];
$sql = "INSERT INTO  salon (numero_salon,capacidad,edad_minima,edad_maxima,id_niño) VALUES ('$numero_salon', '$capacidad','$edad_minima','$edad_maxima','$id_niño')";

if ($conn->query($sql) === TRUE) {
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>insertar salon</title>
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
      <a href="operaciones_salones.html" class="opciones" id="v">regresar</a>
    </body>
    </html>';
    echo "<center><h1>salon registrado correctamente<h1></center>";
} else {
    echo "Error al registrar un salon: " . $conn->error;
}

$conn->close();
?>