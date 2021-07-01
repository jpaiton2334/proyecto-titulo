<?php

require_once('../conexion.php');

//$codigo  = $_POST['codigo'];
$nombre  = $_POST['nombre_ins'];


 $sql = 'SELECT * FROM institucion where nombre_ins  = ?';
 $sentencia = $pdo->prepare($sql);
 $sentencia->execute(array($nombre));

 $resultado = $sentencia->fetch();

 if($resultado){
    echo json_encode('registrada');
 
  
 }else{




$consulta = $pdo->prepare("INSERT INTO institucion (nombre_ins) 
values (:nombre_ins)");

//$consulta->bindParam(':codigo',$codigo);
$consulta->bindParam(':nombre_ins',$nombre);



if($consulta->execute()){
    echo json_encode("institucion ingresada correctamente");
 

}else{
    echo json_encode("error");
}
 }//fin else registrada


?>