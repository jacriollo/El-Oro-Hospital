<?php
session_start();
include_once('../config/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		//$stmt = $db->prepare("INSERT INTO customers (dnipa, nombrep,apellidop,seguro,tele,sexo,email,clave ,cargo,estado) 
		$stmt = $db->prepare("INSERT INTO paciente (nombrep,apellidop,seguro,telefono,sexo,email,clave ,cargo,archivo,estado) 
		VALUES (:nombrep, :apellidop, :seguro, :telefono,:sexo,:email,:clave,:archivo,:cargo,:estado)");

		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':nombrep' => $_POST['nombrep'] , ':apellidop' => $_POST['apellidop'], 
		':seguro' => $_POST['seguro'], ':telefono' => $_POST['telefono'], ':sexo' => $_POST['sexo'], ':email' => $_POST['email'],':archivo' => $_POST['archivo'], ':clave' => MD5($_POST['clave']), 
		':cargo' => $_POST['cargo'], ':estado' => $_POST['estado'])) ) ? 'Paciente guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: ../../folder/customers.php');
	
?>