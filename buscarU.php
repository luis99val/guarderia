<?php
include('conexion.php');

$id = $_POST['id_login'];

$sql = "SELECT * FROM login WHERE id_login = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los resultados en una tabla
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>buscar usuario</title>
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
      <h1>Usuario encontrado<h1>
      <table border="1">
          <thead>
              <tr>
                  <th>usuario</th>
                  <th>password</th>
                  
              </tr>
          </thead>
          <br><br>
      <center>
      
      <a href="operaciones_usuario.html" class="opciones" id="v">regresar</a>
    </body>
    </center>
    </html>';
    
    echo "<table border='1'>";
    
    while ($row = $result->fetch_assoc()) {
        
        echo "<tr> <td>" . $row['usuario']."</td> <td>".$row['password']."</td> </tr>";
    }
    
    echo "</center></table>";
    
} else {
    echo "No se encontraron resultados";
}

$conn->close();
?>
