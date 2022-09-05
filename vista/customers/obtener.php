<?php
	session_start();
	include_once('../config/dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$codpaci  = $_GET['codpaci'];
			$cedula = $_POST['cedula'];
			$nombrep = $_POST['nombrep'];
			$apellidop = $_POST['apellidop'];
			$sexo = $_POST['sexo'];
			$telefono = $_POST['telefono'];
			
			$correo = $_POST['correo'];
			$direccion = $_POST['direccion'];
			$ciudad = $_POST['ciudad'];
			$usuario = $_POST['usuario'];
			//$archivo = $_POST['archivo'];
			
			//$sql = "UPDATE customers SET dnipa = '$dnipa',nombrep = '$nombrep',apellidop = '$apellidop',seguro = '$seguro',tele = '$tele',sexo = '$sexo' ,usuario = '$usuario' WHERE codpaci = '$codpaci'";
			$sql = "UPDATE paciente SET cedula = '$cedula', nombrep = '$nombrep',apellidop = '$apellidop',sexo = '$sexo',telefono = '$telefono',correo = '$correo',direccion = '$direccion',ciudad = '$ciudad',usuario = '$usuario' WHERE codpaci = '$codpaci'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Paciente actualizado correctamente' : 'No se puso actualizar el paciente';

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

	header('location: ../../folder/customers.php');

?>