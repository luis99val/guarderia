<?php

require("conexion.php");
/*
if (isset($_POST['clave']) and $_POST['clave'] <> ""){
//

$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if($conexion){
    echo "puto";
}else{
    echo "no conectado";
}


}else{
    
    
    //echo "verifica los datos";
}
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_maestros = $_POST["id_maestros"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "guarderia";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "DELETE FROM maestros WHERE id_maestros = $id_maestros";

    if ($conn->query($sql) === TRUE) {
        echo '
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>eliminar maestro</title>
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
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }

    $conn->close();
}
?>