<?php
require ("conexion.php");

if(isset($_POST["id"], $_POST["nuevo"])and $_POST["id"] != "" and $_POST["nuevo"]!= ""){
$conexion=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($conexion) {
   
$clave=$_POST["id"];
$nombre=$_POST["nuevo"];

$consulta="UPDATE login SET usuario = '$nombre' WHERE  id_login= '$clave'";

$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página con Imagen de Fondo</title>
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
      <h1>usuario modificado<h1>
      
          <br><br>
      <center>
      
      <a href="operaciones_usuario.html" class="opciones" id="v">regresar</a>
    </body>
    </center>
    </html>';
    
    

}else{
echo "<p> no se modifico <p/>";
}

mysqli_close($conexion);

}else{
    die("error de conexion".mysqli_connect_error());
}

}else{
    echo "verifique los datos";
}

?>