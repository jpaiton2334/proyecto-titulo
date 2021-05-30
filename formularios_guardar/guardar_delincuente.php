<?php

require_once('../conexion.php');

$rut  = $_POST['rut'];
$nombres  = $_POST['nombres'];
$apellidos  = $_POST['apellidos'];
$apodo  = $_POST['apodo'];
$domicilio = $_POST['domicilio'];
$telefono  = $_POST['telefono'];
$celular  = $_POST['celular'];
$email  = $_POST['email'];
$fecha_nacimiento  = $_POST['fecha_nacimiento'];
$estado = $_POST['estado'];
$nombre_institucion_usuario  = $_POST['permisos'];


$nombreimg =$_FILES['imagen']['name']; //obtiene el nombre de la imagen
$archivo =$_FILES['imagen']['tmp_name']; //contiene el archivo
$ruta="../img";

$ruta = $ruta."/".$nombreimg;
move_uploaded_file($archivo,$ruta);

$sql = 'SELECT * FROM delincuente where rut = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($rut));
$resultado = $sentencia->fetch();


if($resultado){
   echo 'delincuente ya registrado - debe ingresar otro rut';
   echo '<a href="../index.php">Volver al formulario</a>';
    die();
    echo 'delincuente ingresado exitosamente';
}


$consulta = $pdo->prepare("INSERT INTO delincuente (rut, nombres,apellidos,apodo,domicilio,telefono,
celular,email,fecha_nacimiento,estado,nombre_institucion_usuario,foto) 
values (:rut,:nombres,:apellidos,:apodo,:domicilio,
:telefono,:celular,:email,:fecha_nacimiento,:estado,:nombre_institucion_usuario,:foto)");

$consulta->bindParam(':rut',$rut);
$consulta->bindParam(':nombres',$nombres);  
$consulta->bindParam(':apellidos',$apellidos);
$consulta->bindParam(':apodo',$apodo);
$consulta->bindParam(':domicilio',$domicilio);
$consulta->bindParam(':telefono',$telefono);
$consulta->bindParam(':celular',$celular);
$consulta->bindParam(':email',$email);
$consulta->bindParam(':fecha_nacimiento',$fecha_nacimiento);
$consulta->bindParam(':estado',$estado);
$consulta->bindParam(':nombre_institucion_usuario',$nombre_institucion_usuario);
$consulta->bindParam(':foto',$ruta);


if($consulta->execute()){
    echo 'consulta ingresada correctamente';
    echo '<a href="../index.php"> Volver al inicio</a>';

}else{
   echo 'error';
}



?>

