<?php
	session_start();
	include('../conexion.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM delincuente WHERE id = '".$_GET['id']."'";
          
		//use for MySQLi OOP
		if($pdo->query($sql)){
			echo ' eliminado con éxito.';
		}
		
		else{
			echo 'Algo salió mal al eliminar .';
		}
	}
	else{
	echo'Seleccionar miembro para eliminar primero.';
	}

	header('location: crud/crud_listado_delincuentes.php');
?>