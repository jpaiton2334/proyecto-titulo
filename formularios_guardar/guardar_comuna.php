<?php

require_once('../conexion.php');

//$codigo  = $_POST['codigo'];
$nombre  = $_POST['comuna'];
      
if($nombre === ''){
  echo json_encode('error');
 
}else{
 

   
   // echo "<p style='color:white; border:2px red solid;  border-radius: 10px;margin-top:5px; background-color: red;'>El campo comuna está vacío</p>";
  
 $sql = 'SELECT * FROM comuna where nombre  = ?';
 $sentencia = $pdo->prepare($sql);
 $sentencia->execute(array($nombre));

 $resultado = $sentencia->fetch();

 if($resultado){
  echo json_encode('registrada');
  // echo "<p style='color:white; border:2px red solid;  border-radius: 10px;margin-top:5px; background-color: red;'>La comuna ya se encuentra registrada</p>";
 
  
     
 }else{

  $consulta = $pdo->prepare("INSERT INTO comuna (nombre) 
  values (:nombre)");
  
  //$consulta->bindParam(':codigo',$codigo);
  $consulta->bindParam(':nombre',$nombre);
  
  
  
  if($consulta->execute()){
      
      echo json_encode("Comuna ingresada correctamente");
     
  }else{
     echo 'error';
  }
  

 }



} //fin del else campos vacios

?>