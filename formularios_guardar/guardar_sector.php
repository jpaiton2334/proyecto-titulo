<?php 
require('conexion.php');



    $id  = $_POST['id'];
    $nombre  = $_POST['codigo'];
    
    
    $consulta = $pdo->prepare("INSERT INTO cantidad_sectores (id_sector,id_institucion) 
    values (:id_sector,:id_institucion)");
    
    $consulta->bindParam(':id_sector',$id);
    $consulta->bindParam(':id_institucion',$nombre);
    
  
if($consulta->execute()){
    echo 'consulta ingresada correctamente';
    echo '<a href="index.php"> Volver al inicio</a>';

}else{
   echo 'error';
}






?>