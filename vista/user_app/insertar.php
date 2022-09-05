<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "el oro");

//include_once('../config/dbconect.php');
//include_once('../vista/config/dbconect.php');

//$database = new Connection();
//$db = $database->open();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$descripcion = $_POST["descripcion"];
$fecha = $_POST["fecha"];




if ($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = date("m-d-y") . "-" . date("H-i-s") . "-" . $nombre_base;
    $ruta = "archivo/" . $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);

    if ($subirarchivo) {
        $insertar = "INSERT INTO examen (nombre,apellido,descripcion,fecha,archivo) VALUES ('$nombre', '$apellido', '$descripcion', '$fecha', '$ruta')";
        $resultado = mysqli_query($conexion, $insertar);

        if ($resultado) {
            echo "<script>window.location='mostrararchivo.php'</script>";            
           
        } else {
            echo "error al subir el archivo";
        }
    }
}

//header('location: ../../folder/examen.php');

?>