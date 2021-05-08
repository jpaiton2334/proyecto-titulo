<?php
session_start();
if(isset($_SESSION["usuario"])){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <ul>
     <li><a href="#">Inicio</a></li>
     <li><a href="#">Novedades</a></li>
     <li><a href="#">Contacto</a></li>
     <li><a href="#">Informacion</a></li>
     <li><a href="salir.php">Cerrar sesion</a></li>
     </ul> 
</body>
</html>
<?php 
}else{
    header('Location:login.php');
}


?>