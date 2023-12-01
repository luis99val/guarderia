<?php
include 'conexion.php';

// Obtener el ID del formulario
$id_niño = $_POST['id'];


$sql = "DELETE FROM niños WHERE id_niño = $id_niño";

if ($conn->query($sql) === TRUE) {
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eliminar ninio</title>
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
      
      <a href="operaciones ninios.html" class="opciones" id="v">regresar</a>
    </body>
    </center>
    </html>';
    echo "Registro del ninio eliminado correctamente";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}


$conn->close();
?>