<?php

require_once('../conexion.php');

//$codigo  = $_POST['codigo'];
$nombre  = $_POST['nombre_ins'];


 $sql = 'SELECT * FROM institucion where nombre_ins  = ?';
 $sentencia = $pdo->prepare($sql);
 $sentencia->execute(array($nombre));

 $resultado = $sentencia->fetch();

 if($resultado){
   echo 'institucion ya registrada - debe ingresar otro nombre';
   echo '<a href="formularios/registrar_institucion.php">Volver al formulario</a>';
    die();
     echo 'usuario creado exitosamente';
 }


$consulta = $pdo->prepare("INSERT INTO institucion (nombre_ins) 
values (:nombre_ins)");

//$consulta->bindParam(':codigo',$codigo);
$consulta->bindParam(':nombre_ins',$nombre);



if($consulta->execute()){
    echo 'consulta ingresada correctamente';
    echo '<a href="../index.php"> Volver al inicio</a>';

}else{
   echo 'error';
}



?>