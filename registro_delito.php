<?php 



require_once('conexion.php');
session_start();
if(!isset($_SESSION["rol"])){
  header('location: login.php');


}else{
   if ($_SESSION['rol'] !=1) {
        header('location: login.php');
   }
 
}
// use the connection here

$consulta = $pdo->query('SELECT * from delincuente;');
$consulta2= $pdo->query('SELECT * from tipo_delito;');
$consulta3= $pdo->query('SELECT * from sector;');

$resultado= $consulta->fetchall();
$resultado2= $consulta2->fetchall();
$resultado3= $consulta3->fetchall();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="estilos_formulario_registro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de delitos</title>
   <style>
   form{
       
       width: 50%;
   }
   </style>
</head>
<body>


<div class="container">
<div class="row">
<a href="index.php">Volver al inicio</a>
<h3 class="mt-3">Registrar delito de delincuente</h3>
<form method="post" action="guardar_delito.php" id="formulario">
<label>Nombre delincuente</label>
<select name="id_delincuente" id="" class="form-control">
<?php 
foreach($resultado as $row){
?>
 <option value="<?php echo $row['id']?>"><?php echo $row['nombres'];  echo " ";echo $row['apellidos']?></option>
<?php
}
?>
</select>
<label>Tipo de delito</label>
<select name="tipo_delito" id="" class="form-control">
<?php 
foreach($resultado2 as $row1){
?>
 <option value="<?php echo $row1['id']?>"><?php echo $row1['nombre']?></option>
<?php
}
?>
</select>

<label>Sector</label>
<select name="sector" id="" class="form-control">
<?php 
foreach($resultado3 as $row2){
?>
 <option value="<?php echo $row2['id']?>"><?php echo $row2['nombre']?></option>
<?php
}
?>
</select>
<label>Descripcion</label>
<textarea  required name="descripcion"  id="" cols="30" rows="4" autocomplete="off" minlength="10" maxlength="100" class="form-control" > </textarea>
<label>direccion del delito</label>
<input type="text" name="direccion_delito" autocomplete="off" minlength="5" maxlength="100" class="form-control" required />

<label>fecha del delito</label>
<input type="date" name="fecha_delito" autocomplete="off"  class="form-control" required/>


<input class="btn btn-primary mt-3" type="submit"  name="enviar" value="Registrar" >
</form>
</div>
</div>
<?php
if(isset($_POST['id_delincuente'])&& isset($_POST['típo_delito'])&& isset($_POST['sector'])
&& isset($_POST['descripcion'])&& isset($_POST['direccion_delito'])
&& isset($_POST['fecha_delito']))
require_once('conexion.php');


?>

<script src="validacion_formulario.js"></script>
</body>
</html>