<?php 
require('../conexion.php');


$id_comuna= $_POST['id_comuna'];
$sector= $_POST['sector'];

$sql = 'SELECT * FROM sector where nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($sector));

$resultado = $sentencia->fetch();

if($resultado){
 echo json_encode('registrada');
}else{    

    $consulta = $pdo->prepare("INSERT INTO sector (id_comuna,nombre) 
    values (:id_comuna,:nombre)");
    
    $consulta->bindParam(':id_comuna',$id_comuna);
    $consulta->bindParam(':nombre',$sector);


    
  
if($consulta->execute()){
    echo json_encode("nuevo sector ingresado correctamente");

}else{
   echo json_encode('error');
}

}





?>