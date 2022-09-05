
<?php
session_start();
include_once('../config/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO examen (coddoc,codpaci,descripcion,urlpdf) VALUES (:codigo, :descripcion, :urlpdf)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':coddoc' => $_POST['codigo'] , ':codpaci' => $_POST['codpaci'] , ':descripcion' => $_POST['descripcion'], ':urlpdf' => $_POST['urlpdf'])) ) ? 'Paciente guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
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

header('location: ../../folder/examen.php');
	
?>