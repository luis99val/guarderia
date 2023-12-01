<?php
// Obtener datos del formulario
$id = $_POST['id'];
$numero_salon = $_POST['numero_salon'];
$capacidad = $_POST['capacidad'];
$edad_minima = $_POST['edad_minima'];
$edad_maxima = $_POST['edad_maxima'];
$id_peque = $_POST['id_niño'];


// Conectar a la base de datos
include 'conexion.php';

// Actualizar los datos en la base de datos
$sql = "UPDATE salon SET numero_salon='$numero_salon', capacidad='$capacidad', edad_minima='$edad_minima', edad_maxima='$edad_maxima', id_niño='$id_peque' WHERE id_salon=$id";

if (mysqli_query($conn, $sql)) {
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>actualizar salon</title>
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
    
    echo "<center><h1>Registro modificado correctamente<h1></center>";
    
} else {
    echo "Error al actualizar datos: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
