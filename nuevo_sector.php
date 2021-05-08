<?php 

require('conexion.php');

session_start();
if(!isset($_SESSION["rol"])){
  header('location: login.php');


}else{
   if($_SESSION['rol'] !=2) {
        header('location: login.php');
   }
 
}




// use the connection here
$sth = $pdo->query('SELECT * from sector;');
$consulta2 = $pdo->query('SELECT * from institucion;');
$resultado = $sth->fetchall();
$resultado2 = $consulta2->fetchall();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="estilos_formulario_registro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar una zona para la institucion</title>
   <style>
   form{
       
       width: 50%;
   }
   </style>
</head>
<body>


<div class="container">
<div class="row">
<button class="btn btn-light mt-3"><a href="index.php">Volver al inicio</a></button>

<h3 class="mt-3">Registrar una zona para la institucion</h3>
<form  action="guardar_sector.php" method="post" id="formulario">
 <label>Zona</label>
<select name="id" id="" class="form-control">
<?php 
foreach($resultado as $row){
?>
 <option value="<?php echo $row['id']?>"><?php echo $row['nombre']?></option>
<?php
}
?>
</select>
<label>Institucion</label>
<select name="codigo" id="" class="form-control">
<?php 
foreach($resultado2 as $row2){
?>
 <option value="<?php echo $row2['codigo']?>"><?php echo $row2['nombre_ins']?></option>
<?php
}
?>
</select>

<input class="btn btn-primary mt-3" type="submit"  name="enviar" value="enviar" >
</form>
</div>
</div>



<script src="validacion_formulario.js"></script>
</body>
</html>




