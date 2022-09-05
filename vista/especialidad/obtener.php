<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$codespe = $_GET['codespe'];
			$nombrees = $_POST['nombrees'];
			$descripcion = $_POST['descripcion'];
			$usu_registro = $_POST['usu_registro'];
			$usu_mod = $_POST['usu_mod'];
			$estado = $_POST['estado'];

			$sql = "UPDATE especialidad SET nombrees = '$nombrees', descripcion = '$descripcion', usu_registro='$usu_registro', usu_mod='$usu_mod', estado='$estado'   WHERE codespe = '$codespe'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Área actualizado correctamente' : 'No se puso actualizar el área';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: ../../folder/specialty.php');

?>