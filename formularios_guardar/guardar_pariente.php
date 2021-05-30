<?php 
require('conexion.php');



$id_delincuente = $_POST['id_delincuente'];
$id_parentesco = $_POST['id_parentesco'];
$id_delincuente2 = $_POST['id_delincuente2'];
    
    
    $consulta = $pdo->prepare("INSERT INTO parientes (id_delincuente,id_parentesco,id_delincuente2) 
    values (:id_delincuente,:id_parentesco,:id_delincuente2)");
    
    $consulta->bindParam(':id_delincuente',$id_delincuente);
    $consulta->bindParam(':id_parentesco',$id_parentesco);
    $consulta->bindParam(':id_delincuente2',$id_delincuente2);

    
  
if($consulta->execute()){
    echo 'consulta ingresada correctamente';
    echo '<a href="index.php"> Volver al inicio</a>';

}else{
   echo 'error';
}






?>