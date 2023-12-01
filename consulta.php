<?php
// ID del registro que deseas modificar
$id_registro = 1;

// Consulta SQL para obtener los datos del registro
$sql = "SELECT * FROM padres WHERE id_padres = $id_registro";
$resultado = mysqli_query($conn, $sql);

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los datos del registro
    $fila = mysqli_fetch_assoc($resultado);
} else {
    echo "Error al obtener datos: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
