<?php
session_start();
include_once('../config/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO doctor (cedula, nombre,apellido,codespe,sexo,fechanaci,correo,telefono,direccion,ciudad,usuario,clave,cargo,estado) VALUES (:cedula, :nombre, :apellido, :codespe, :sexo,:fechanaci,:correo,:telefono,:direccion,:ciudad,:usuario,:clave,:cargo,:estado)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':cedula' => $_POST['cedula'] , ':nombre' => $_POST['nombre'] , ':apellido' => $_POST['apellido'], ':codespe' => $_POST['codespe'], ':sexo' => $_POST['sexo'],':fechanaci' => $_POST['fechanaci'], ':correo' => $_POST['correo'], ':telefono' => $_POST['telefono'], ':direccion' => $_POST['direccion'], ':ciudad' => $_POST['ciudad'],':usuario' => $_POST['usuario'],':clave' => MD5($_POST['clave']),':cargo' => $_POST['cargo'],':estado' => $_POST['estado'])) ) ? 'Paciente guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
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

header('location: ../../folder/doctor.php');
	
?>