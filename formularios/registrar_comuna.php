<?php 


require('../conexion.php');

session_start();
if(!isset($_SESSION["rol"])){
  header('location: login.php');


}else{
   if ($_SESSION['rol'] !=1) {
        header('location: login.php');
   }
 
}




?>
<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../estilos_formulario_registro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de comunas</title>
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

<h3 class="mt-3">Registrar Comuna</h3>
<form method="post" action="../formularios_guardar/guardar_comuna.php" id="formulario">
<!-- <label>Nombre de la institucion</label>
<input type="text" pattern="[0-9-]+" name="codigo" autocomplete="off" minlength="5" maxlength="10" class="form-control" required  placeholder="ej: 2024"/> -->
<label>Nombre de la comuna</label>
<input type="text" pattern="[A-Za-z ]+" name="comuna" autocomplete="off" minlength="2" maxlength="20" class="form-control" required  placeholder="ej: Santiago"/>



  
<!-- <label>permisos</label>
<input type="number" name="permisos" autocomplete="off" minlength="5"  maxlength="4" class="form-control" required/> -->

<input class="btn btn-success mt-3" type="submit"  name="enviar" value="Registrar" >
</form>
</div>
</div>



<script src="../validacion_formulario.js"></script>
</body>
</html>