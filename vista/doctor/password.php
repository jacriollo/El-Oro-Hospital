<?php
session_start();
include_once('../config/dbconect.php');

if (isset($_POST['editar'])) {
	$database = new Connection();
	$db = $database->open();
	try {
		$coddoc  = $_GET['coddoc'];

		$clave = MD5($_POST['clave']);

		$sql = "UPDATE doctor SET clave = '$clave'  WHERE coddoc = '$coddoc'";
		//if-else statement in executing our query
		$_SESSION['message'] = ($db->exec($sql)) ? 'Contraseña actualizada correctamente' : 'No se puso actualizar la contraseña';
	} catch (PDOException $e) {
		$_SESSION['message'] = $e->getMessage();
	}

	//Cerrar la conexión
	$database->close();
} else {
	$_SESSION['message'] = 'Complete el formulario de edición';
}

header('location: ../../folder/doctor.php');

?>



