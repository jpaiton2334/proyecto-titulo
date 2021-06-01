<?php 
require('../conexion.php');

$parentesco = $_POST['nombre_parentesco'];

$sql = 'SELECT * FROM parentesco where nombre_parentesco = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($parentesco));
$resultado = $sentencia->fetch();

if($resultado){
   echo 'parentesco ya registrado - debe ingresar otro parentesco';
   echo '<a href="formularios_guardar/registrar_parentesco.php">Volver al formulario</a>';
    die();
    echo 'delincuente ingresado exitosamente';
}

    $consulta = $pdo->prepare("INSERT INTO parentesco (nombre_parentesco) 
    values (:nombre_parentesco)");
    
    $consulta->bindParam(':nombre_parentesco',$parentesco);


    
  
if($consulta->execute()){
    echo 'consulta ingresada correctamente';
    echo '<a href="../index.php"> Volver al inicio</a>';

}else{
   echo 'error';
}






?>