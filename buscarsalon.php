<?php
include('conexion.php');

$id = $_POST['id_salon'];

$sql = "SELECT * FROM salon WHERE id_salon = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los resultados en una tabla
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>buscar salon</title>
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
      
  <table border="1">
      <thead>
          <tr>
              <th>numero_salon</th>
              <th>capacidad</th>
              <th>edad_minima</th>
              <th>edad_maxima</th>
              <th>id_niño</th>
          </tr>
      </thead>
      <br><br>
    </body>
    </html>';
   
    echo "<table border='1'>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row['numero_salon']."</td> <td>".$row['capacidad']."</td> "."<td>".$row['edad_minima'] ."<td>".$row['edad_maxima']. "<td>".$row['id_niño']."</td> </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados";
}

$conn->close();
?>