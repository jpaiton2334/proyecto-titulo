<?php
	session_start();
    include('../conexion.php');

	if(isset($_POST['edit'])){
        $id= $_POST['id'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$estado = $_POST['estado'];
   $sql ="UPDATE delincuente SET nombres,apellidos,estado= '$nombres', '$apellidos' , '$estado'WHERE id = '$id'";
		
	$pdoQuery = "UPDATE delincuente set nombres=:nombres,apellidos=:apellidos ,estado=:estado where id=:id";
	$ejecutar = $pdo->prepare($pdoQuery);
	$pdo_eje = $ejecutar->execute(array(":id"=>$id,":nombres"=>$nombres,":apellidos"=>$apellidos ,":estado"=>$estado));	
	
	
	
	//use for MySQLi OOP
	if($pdo_eje){
		echo 'dato actualizado con éxito.';
	}
	
	else{
		echo 'Algo salió mal al actualizar  .';
	}
}
else{
echo'Seleccionar  para  primero.';
}

header('location: ../crud/crud_listado_delincuentes.php');

?>