<?php 
require('conexion.php');


$id_comuna= $_POST['id_comuna'];
$sector= $_POST['sector'];

    
    $consulta = $pdo->prepare("INSERT INTO sector (id_comuna,nombre) 
    values (:id_comuna,:nombre)");
    
    $consulta->bindParam(':id_comuna',$id_comuna);
    $consulta->bindParam(':nombre',$sector);


    
  
if($consulta->execute()){
    echo 'consulta ingresada correctamente';
    echo '<a href="index.php"> Volver al inicio</a>';

}else{
   echo 'error';
}






?>