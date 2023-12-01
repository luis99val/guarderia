<?php
include 'conexion.php';




// Obtener datos del formulario
$id = $_POST['id'];
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apepat = $_POST['appat'];
$apemat = $_POST['apmat'];
$correo = $_POST['correo'];
$telefono = $_POST['tel'];


// Conectar a la base de datos


// Actualizar los datos en la base de datos
$sql = "UPDATE maestros SET nombre1='$nombre1', nombre2='$nombre2', apellido_paterno='$apepat', apellido_materno='$apemat', correo='$correo' , telefono='$telefono' WHERE id_maestros=$id";

if (mysqli_query($conn, $sql)) {
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>modificar maestro</title>
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
    
    echo "Datos actualizados correctamente";
} else {
    echo "Error al actualizar datos: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
