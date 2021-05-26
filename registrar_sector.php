<?php 

require('conexion.php');

session_start();
if(!isset($_SESSION["rol"])){
  header('location: login.php');


}else{
   if($_SESSION['rol'] !=1) {
        header('location: login.php');
   }
 
}




// use the connection here
$sth = $pdo->query('SELECT * from comuna;');
$consulta2 = $pdo->query('SELECT * from parentesco;');
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
    <title>Registrar sector</title>
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

<h3 class="mt-3">Registrar sector</h3>
<form  action="guardar_nuevo_sector.php" method="post" id="formulario">

<label>comuna</label>
<select name="id_comuna" id="" class="form-control">
<?php 
foreach($resultado as $row2){
?>
 <option value="<?php echo $row2['id']?>"><?php echo $row2['nombre']?></option>
<?php
}
?>
</select>

 <label>Sector</label>
<input type="text"pattern="[A-Za-z ]+" name="sector" autocomplete="off" minlength="5" maxlength="50" class="form-control" required  placeholder="ej: Plaza de armas"/>

<input class="btn btn-primary mt-3" type="submit"  name="enviar" value="Registrar" >
</form>
</div>
</div>

<script src="validacion_formulario.js"></script>
</body>
</html>

