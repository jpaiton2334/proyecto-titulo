<?php

require_once('../conexion.php');

$rut  = $_POST['rut'];
$pass = $_POST['pass'];

$nombres  = $_POST['nombres'];
$apellidos  = $_POST['apellidos'];
$nombre_institucion = $_POST['nombre_institucion'];
$fecha_ha  = $_POST['fecha_habilitacion'];
$permisos  = $_POST['permisos'];
$pass_cifrado = password_hash($pass, PASSWORD_DEFAULT);



$sql = 'SELECT * FROM usuario where rut = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($rut));
$resultado = $sentencia->fetch();

if($resultado){
   echo 'usuario ya registrado - debe ingresar otro rut';
   echo '<a href="formularios_guardar/registro_usuario.php">Volver al formulario</a>';
    die();
    echo 'usuario creado exitosamente';
}


$consulta = $pdo->prepare("INSERT INTO usuario (rut, pass,nombres
,apellidos,nombre_institucion,fecha_habilitacion,permisos) 
values (:rut,:pass,:nombres,:apellidos,:nombre_institucion,
:fecha_habilitacion,:permisos)");

$consulta->bindParam(':rut',$rut);
$consulta->bindParam(':pass',$pass_cifrado);  
$consulta->bindParam(':nombres',$nombres);
$consulta->bindParam(':apellidos',$apellidos);
$consulta->bindParam(':nombre_institucion',$nombre_institucion);
$consulta->bindParam(':fecha_habilitacion',$fecha_ha);
$consulta->bindParam(':permisos',$permisos);

if($consulta->execute()){
    echo 'consulta ingresada correctamente';
    echo '<a href="../index.php"> Volver al inicio</a>';

}else{
   echo 'error';
}



?>

