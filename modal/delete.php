<?php
	session_start();
	include('conexion.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM comuna WHERE id = '".$_GET['id']."'";
          
		//use for MySQLi OOP
		if($pdo->query($sql)){
			echo 'Miembro eliminado con éxito.';
		}
		
		else{
			echo 'Algo salió mal al eliminar miembro.';
		}
	}
	else{
	echo'Seleccionar miembro para eliminar primero.';
	}

	header('location: listado_comunas.php');
?>