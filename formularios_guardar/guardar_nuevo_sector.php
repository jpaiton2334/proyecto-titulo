<?php 
require('../conexion.php');



    $id  = $_POST['id'];
    $nombre  = $_POST['codigo'];
    
    $sql = 'SELECT * FROM cantidad_sectores  where id_sector =?';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($id));
   
    $resultado = $sentencia->fetch();
   
    if($resultado){
     echo json_encode('registrada');
    }else{


  
    
    $consulta = $pdo->prepare("INSERT INTO cantidad_sectores (id_sector,id_institucion) 
    values (:id_sector,:id_institucion)");
    
    $consulta->bindParam(':id_sector',$id);
    $consulta->bindParam(':id_institucion',$nombre);
    
  
if($consulta->execute()){
    echo json_encode("sector ingresado correctamente");

}else{
   echo json_encode('error');
}

}//fin repetida




?>