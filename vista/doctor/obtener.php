<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			
			$cedula = $_POST['cedula'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$sexo = $_POST['sexo'];
			$fechanaci = $_POST['fechanaci'];
			$correo = $_POST['correo'];
			$telefono = $_POST['telefono'];
			$direccion = $_POST['direccion'];
			$ciudad = $_POST['ciudad'];
			$usuario = $_POST['usuario'];
			$cargo = $_POST['cargo'];
			
			
		
			
$sql = "UPDATE doctor SET cedula = '$cedula', nombre = '$nombre', apellido = '$apellido', sexo = '$sexo',fechanaci = '$fechanaci',correo = '$correo', telefono = '$telefono',direccion = '$direccion', ciudad = '$ciudad', usuario = '$usuario',cargo = '$cargo' WHERE coddoc = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Doctor actualizado correctamente' : 'No se puso actualizar el doctor';

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

	header('location: ../../folder/doctor.php');

?>