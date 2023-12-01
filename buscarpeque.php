<?php
include('conexion.php');

$id = $_POST['id_niño'];

$sql = "SELECT * FROM niños WHERE id_niño = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los resultados en una tabla
    echo '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buscar ninio</title>
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
  <h1>Datos del ninio<h1>
  <table border="1">
      <thead>
          <tr>
              <th>nombre 1</th>
              <th>nombre 2</th>
              <th>apellido_materno</th>
              <th>apellido_paterno</th>
              <th>correo</th>
              <th>telefono</th>
          </tr>
      </thead>
      <br><br>
  <center>
  <a href="operaciones ninios.html" class="opciones" id="v">regresar</a>
</body>
</html>';
    echo "<center> <table border='1'>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row['nombre1']."</td> <td>".$row['nombre2']."</td> "."<td>".$row['apellido_paterno'] ."<td>".$row['apellido_materno']. "<td>".$row['edad']."<td>".$row['id_padres']."</td> </tr>";
    }
    echo "</center></table>";
    
} else {
    echo "No se encontraron resultados";
}

$conn->close();
?>
