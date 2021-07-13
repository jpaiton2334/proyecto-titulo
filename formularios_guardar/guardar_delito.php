<?php

require_once('../conexion.php');


$nombre_delincuente  = $_POST['id_delincuente'];
$tipo_delito = $_POST['tipo_delito'];
$sector = $_POST['sector'];
$descripcion = $_POST['descripcion'];
$direccion_delito = $_POST['direccion_delito'];
$fecha_delito = $_POST['fecha_delito'];


  $sql = 'SELECT * FROM nuevo_delito_delincuente WHERE descripcion = ? ';
  $sentencia = $pdo->prepare($sql);
  $sentencia->execute(array($descripcion));




 $resultado = $sentencia->fetch();




if($resultado){
    echo json_encode('registrada');
    // echo "<p style='color:white; border:2px red solid;  border-radius: 10px;margin-top:5px; background-color: red;'>La comuna ya se encuentra registrada</p>";
   
    
       
   }else{
  
$consulta = $pdo->prepare("INSERT INTO nuevo_delito_delincuente (id_delincuente,tipo_delito,sector,descripcion,direccion_delito,fecha_delito) 
values (:id_delincuente,:tipo_delito,:sector,:descripcion,:direccion_delito,:fecha_delito)");

$consulta->bindParam(':id_delincuente',$nombre_delincuente);
$consulta->bindParam(':tipo_delito',$tipo_delito);
$consulta->bindParam(':sector',$sector);
$consulta->bindParam(':descripcion',$descripcion);
$consulta->bindParam(':direccion_delito',$direccion_delito);
$consulta->bindParam(':fecha_delito',$fecha_delito);




if($consulta->execute()){
    echo json_encode('delito ingresado correctamente');
   

}else{
    echo json_encode('error');
   
}

   }



?>