<?php

require_once('../conexion.php');

//$codigo  = $_POST['codigo'];
$nombre  = $_POST['delito'];


 $sql = 'SELECT * FROM tipo_delito where nombre = ?';
 $sentencia = $pdo->prepare($sql);
 $sentencia->execute(array($nombre));

 $resultado = $sentencia->fetch();

 if($resultado){
    echo json_encode('registrada');
 
  
 }else{




$consulta = $pdo->prepare("INSERT INTO tipo_delito (nombre) 
values (:nombre)");

//$consulta->bindParam(':codigo',$codigo);
$consulta->bindParam(':nombre',$nombre);



if($consulta->execute()){
    echo json_encode("Tipo de delito ingresado correctamente");
 

}else{
    echo json_encode("error");
}
 }//fin else registrada


?>