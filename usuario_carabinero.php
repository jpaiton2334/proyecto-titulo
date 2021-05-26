<?php
require('conexion.php');

session_start();
if(!isset($_SESSION["rol"])){
  header('location: login.php');


}else{
   if ($_SESSION['rol'] !=1) {
        header('location: login.php');
   }
 
}
$consulta = $pdo->query('SELECT * from institucion;');
$consulta2= $pdo->query('SELECT * from estado;');
$consulta3= $pdo->query('SELECT * from comuna;');

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
    <title>Usuario Carabinero</title>
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
<h3 class="mt-3">Registrar delincuente</h3>
<form method="post" action="guardar_delincuente.php" id="formulario">
<label>rut (sin espacios ni letras  y con guion)</label>
<input type="text" pattern="[0-9-]+" name="rut" autocomplete="off" minlength="5" maxlength="13" class="form-control" required  placeholder="ej:19420189-3"/>
<label>nombres</label>
<input type="text" name="nombres" pattern="[A-Za-z ]+" autocomplete="off" minlength="5"  maxlength="50"  class="form-control" required />
<label>apellidos</label>
<input type="text" name="apellidos" pattern="[A-Za-z ]+" autocomplete="off"  minlength="5"   maxlength="50"  class="form-control" required/>
<label>apodo</label>
<input type="text" name="apodo" pattern="[A-Za-z ]+" autocomplete="off"  minlength="5"   maxlength="50"  class="form-control" required/>
<label>Comuna</label>
<select name="domicilio" id="" class="form-control">
<?php 
foreach($resultado3 as $row3){
?>
 <option value="<?php echo $row3['id']?>"><?php echo $row3['nombre']?></option>
<?php
}
?>
</select>

<label>telefono</label>
<input type="text" pattern="[0-9-]+" name="telefono" autocomplete="off" minlength="5" maxlength="13" class="form-control" required  placeholder="ej: 22234344554"/>
<label>celular</label>
<input type="text" pattern="[0-9-]+" name="celular" autocomplete="off" minlength="5" maxlength="13" class="form-control" required  placeholder="ej: 934543345"/>
<label>email</label>
<input type="email" name="email"  autocomplete="off"  minlength="5"   maxlength="50"  class="form-control" required/>
<label>fecha de nacimiento</label>
<input type="date" name="fecha_nacimiento" autocomplete="off"  class="form-control" required/>



<label>Estado</label>
<select name="estado" id="" class="form-control">
<?php 
foreach($resultado2 as $row2){
?>
 <option value="<?php echo $row2['id']?>"><?php echo $row2['nombre']?></option>
<?php
}
?>
</select>




<label>Ingresado por la institucion</label>
<select name="permisos" id="" class="form-control">
<?php 
foreach($resultado as $row){
?>
 <option value="<?php echo $row['codigo']?>"><?php echo $row['nombre_ins']?></option>
<?php
}
?>
</select>

<input class="btn btn-primary mt-3" type="submit"  name="enviar" value="Registrar" >
</form>
</div>
</div>
<?php
if(isset($_POST['rut'])&& isset($_POST['nombres'])&& isset($_POST['apellidos'])
&& isset($_POST['apodo'])&& isset($_POST['domicilio'])
&& isset($_POST['telefono'])&& isset($_POST['celular'])
&& isset($_POST['email'])&& isset($_POST['fecha_nacimiento'])
&& isset($_POST['estado'])
&& isset($_POST['permisos'])
)
require_once('conexion.php');


?>

<script src="validacion_formulario.js"></script>
</body>
</html>