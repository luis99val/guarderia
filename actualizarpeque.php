<?php
// Obtener datos del formulario
$id = $_POST['id'];
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apepat = $_POST['appat'];
$apemat = $_POST['apmat'];
$edad = $_POST['edad'];
$nomtutor = $_POST['nomtutor'];


// Conectar a la base de datos
include 'conexion.php';

// Actualizar los datos en la base de datos
$sql = "UPDATE niños SET nombre1='$nombre1', nombre2='$nombre2', apellido_paterno='$apepat', apellido_materno='$apemat', edad='$edad' , id_padres='$nomtutor' WHERE id_niño=$id";

if (mysqli_query($conn, $sql)) {
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>actualizar ninio</title>
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
      <a href="operaciones ninios.html" class="opciones" id="v">regresar</a>
    </body>
    </html>';
    echo "<center><h1> Datos actualizados correctamente <h1></center>";
} else {
    echo "Error al actualizar datos: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
