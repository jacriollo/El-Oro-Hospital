<?php
session_start();
include_once('../config/dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		//<span>
		echo $usuario= ucfirst($_SESSION['nombre']);										
		//</span>
		echo $fechaAct=  date("Y-m-d H:i:s"); 

		$stmt = $db->prepare("INSERT INTO especialidad (nombrees, descripcion,usu_registro, estado) VALUES (:nombrees, :descripcion, :usu_registro, :estado)");	
	 	$_SESSION['message'] = ( $stmt->execute(array(':nombrees' => $_POST['nombrees'], ':descripcion' => $_POST['descripcion'], ':usu_registro' => $_POST['usu_registro'], ':estado'=>$_POST['estado']  ) ) ) ? 'Guardado correctamente' : 'Algo salió mal. No se puede agregar';	
	
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

header('location: ../../folder/specialty.php');
	
?>