<?php
require_once '../controlador/enfermedadescontroller.php';
$objenfe=new enfermedadescontroller();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objenfe->mostrar();
    elseif ($op=="nuevo")
        $objenfe->nuevo();
    elseif ($op=="guardar")
        $objenfe->guardar();
    elseif ($op=="editar")
        $objenfe->editar();
    elseif($op=="update")
        $objenfe->update();
        elseif($op=="insertar")
            $objenfe->insertar();
        elseif($op=="recibir")
            $objenfe->recibir();
            elseif($op=="eliminar")
                $objenfe->eliminar();
?>
