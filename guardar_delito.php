<?php

require_once('conexion.php');


$nombre_delincuente  = $_POST['id_delincuente'];
$tipo_delito = $_POST['tipo_delito'];
$sector = $_POST['sector'];
$descripcion = $_POST['descripcion'];
$direccion_delito = $_POST['direccion_delito'];
$fecha_delito = $_POST['fecha_delito'];


//   $sql = 'SELECT * FROM institucion where nombre_ins  = ?';
//   $sentencia = $pdo->prepare($sql);
//   $sentencia->execute(array($nombre));

//  $resultado = $sentencia->fetch();

//   if($resultado){
//     echo 'delito ya registrada - debe ingresar otra descripcion';
//     echo '<a href="registrar_delito.php">Volver al formulario</a>';
//      die();
//       echo 'delito ingresado exitosamente';
//  }


$consulta = $pdo->prepare("INSERT INTO nuevo_delito_delincuente (id_delincuente,tipo_delito,sector,descripcion,direccion_delito,fecha_delito) 
values (:id_delincuente,:tipo_delito,:sector,:descripcion,:direccion_delito,:fecha_delito)");

$consulta->bindParam(':id_delincuente',$nombre_delincuente);
$consulta->bindParam(':tipo_delito',$tipo_delito);
$consulta->bindParam(':sector',$sector);
$consulta->bindParam(':descripcion',$descripcion);
$consulta->bindParam(':direccion_delito',$direccion_delito);
$consulta->bindParam(':fecha_delito',$fecha_delito);




if($consulta->execute()){
    echo 'delito ingresado correctamente';
    echo '<a href="index.php"> Volver al inicio</a>';

}else{
   echo 'error';
}





?>