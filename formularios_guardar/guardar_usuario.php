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


if($rut === '' || $pass_cifrado === '' || $nombres === ''|| $apellidos === '' || $fecha_ha === ''
){
    echo json_encode('error');
   
  }else{
     

    
if($resultado){
    echo json_encode('registrada');
  }// ya registrada
  
  else{


 

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
    echo json_encode("Usuario ingresado correctamente");

} //ingresado correctamente


else{
    echo json_encode("error");
}//error

  }//cierrre de consulta ya registrada


  
  } //fin de validar datos vacios
?>

