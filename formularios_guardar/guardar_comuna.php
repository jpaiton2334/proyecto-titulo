<?php

require_once('../conexion.php');

//$codigo  = $_POST['codigo'];
$nombre  = $_POST['comuna'];


 $sql = 'SELECT * FROM comuna where nombre  = ?';
 $sentencia = $pdo->prepare($sql);
 $sentencia->execute(array($nombre));

 $resultado = $sentencia->fetch();

 if($resultado){
   echo 'comuna ya registrada - debe ingresar otro nombre';
   echo '<a href="ingresar_instituciones.php">Volver al formulario</a>';
    die();
     echo 'comuna creada exitosamente';
 }


$consulta = $pdo->prepare("INSERT INTO comuna (nombre) 
values (:nombre)");

//$consulta->bindParam(':codigo',$codigo);
$consulta->bindParam(':nombre',$nombre);



if($consulta->execute()){
    echo 'comuna ingresada correctamente';
    echo '<a href="../index.php"> Volver al inicio</a>';

}else{
   echo 'error';
}



?>