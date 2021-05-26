<?php
	session_start();
    include('../conexion.php');

	if(isset($_POST['edit'])){
        $id= $_POST['id'];
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
   $sql ="UPDATE delincuente SET nombres,apellidos = '$nombres', '$apellidos' WHERE id = '$id'";
		
	$pdoQuery = "UPDATE delincuente set nombres=:nombres,apellidos=:apellidos where id=:id";
	$ejecutar = $pdo->prepare($pdoQuery);
	$pdo_eje = $ejecutar->execute(array(":id"=>$id,":nombres"=>$nombres,":apellidos"=>$apellidos));	
	
	
	
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

header('location: ../listado_delincuentes.php');

?>