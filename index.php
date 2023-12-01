<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página de inicio</title>
</head>
<style type="text/css">
    .main {

        background-image: url("mosaico.jpg");
 
 height: 950px;
    }
    .opciones{
    position: relative;
                top: 200px;
                width: 200px;
                left: 50px;
                background-color:cadetblue;
                text-align: center;
                padding: 10px;
                border-radius: 15px;
                
}
.cerrar{
    position: relative;
    top: 400px;
    background-color:cadetblue;
    left: 700px;
    color:white;
    border-radius: 15px;
    padding: 10px;
}
.bienvenida{
    position: relative;
    left: 100px;
    top: 200px;
                width: 500px;
                background-color:cadetblue;
                text-align: center;
                padding: 10px;
                
                border-radius: 15px;
}
#v{
                
                color: white;
            }
            #v:hover{
                background-color: rgb(255, 181, 21);
            }
        #cerrar:hover{
            background-color:red;
        }
</style>
<body>
<main class="main">
    <center>
    <h1 class="bienvenida">Bienvenido <?php echo $_SESSION['usuario']; ?>||selecciona una opcion</h1>
    
    <a href="logout.php" class="cerrar" id="cerrar">Cerrar sesión</a>
    <a href="operaciones_usuario.html" class="opciones" id="v">usuarios</a>
    <a href="operaciones_padres.html" class="opciones" id="v">padres</a>
    <a href="operaciones ninios.html" class="opciones" id="v">niños</a>
    <a href="operaciones_maestros.html" class="opciones" id="v">maestros</a>
    <a href="operaciones_salones.html" class="opciones" id="v">salones</a>
</center>
</main>
</body>
</html>
