<?php
require('conexion.php');

session_start();
if(!isset($_SESSION["rol"])){
  header('location: login.php');


}else{
   if ($_SESSION['rol'] !=6) {
        header('location: login.php');
   }
 
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="estilos_formulario_registro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario PDI</title>
</head>
<body>
Usuario PDI

</body>
</html>