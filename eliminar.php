<?php
include 'conexion.php';

// Obtener el ID del formulario
$id_padres = $_POST['id'];


$sql = "DELETE FROM padres WHERE id_padres = $id_padres";

if ($conn->query($sql) === TRUE) {
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>eliminar padre</title>
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
    
    echo "<center><h1>Registro eliminado correctamente<h1></center>";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}


$conn->close();
?>
