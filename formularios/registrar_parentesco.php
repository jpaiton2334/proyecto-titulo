<?php 

require('../conexion.php');

session_start();
if(!isset($_SESSION["rol"])){
  header('location: login.php');


}else{
   if($_SESSION['rol'] !=1) {
        header('location: login.php');
   }
 
}




// use the connection here
$sth = $pdo->query('SELECT * from delincuente;');
$consulta2 = $pdo->query('SELECT * from parentesco;');
$resultado = $sth->fetchall();
$resultado2 = $consulta2->fetchall();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../estilos_formulario_registro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar parentesco</title>
   <style>
   form{
       
       width: 50%;
   }
   </style>
</head>
<body>


<div class="container">
<div class="row">
<a href="javascript:history.back()"><button class="btn btn-light">Volver Atrás</button> </a>    

<h3 class="mt-3">Registrar un parentesco</h3>
<form  action="../formularios_guardar/guardar_parentesco.php" method="post" id="formulario">

<label>nombre parentesco</label>
<input type="text"pattern="[A-Za-z]+" name="nombre_parentesco" autocomplete="off" minlength="5" maxlength="15" class="form-control" required  placeholder="ej: hermano de"/>

<input class="btn btn-primary mt-3" type="submit"  name="enviar" value="Registrar" >
</form>
</div>
</div>

<script src="validacion_formulario.js"></script>
</body>
</html>


