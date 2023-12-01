<?php
include('conexion.php');

$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apepat = $_POST['apellido_paterno'];
$apemat = $_POST['apellido_materno'];
$edad = $_POST['edad'];
$id_padres = $_POST['id_padres'];
$sql = "INSERT INTO  niños (nombre1,nombre2,apellido_paterno,apellido_materno,edad,id_padres) 
VALUES ('$nombre1 ', '$nombre2','$apepat','$apemat','$edad','$id_padres')";

if ($conn->query($sql) === TRUE) {
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>insertar ninio</title>
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
      <h1>creacion de niño<h1>
      
          <br><br>
      <center>
      
      <a href="operaciones ninios.html" class="opciones" id="v">regresar</a>
    </body>
    </center>
    </html>';
    
    
    
    echo "El ninio se registrado correctamente";
} else {
    echo "Error al registrar a un peque: " . $conn->error;
}

$conn->close();
?>
