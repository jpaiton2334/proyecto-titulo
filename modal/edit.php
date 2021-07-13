<?php
	session_start();
    include('../conexion.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
     $sql ="UPDATE comuna SET id,nombre = '$nombre' WHERE id = '$id'";
		
	$pdoQuery = "UPDATE comuna set id=:id,nombre=:nombre where id=:id";
	$ejecutar = $pdo->prepare($pdoQuery);
	$pdo_eje = $ejecutar->execute(array(":id"=>$id,":nombre"=>$nombre));	
	
	
	
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

header('location: ../listado_datos/listado_comunas.php');

?>