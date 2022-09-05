<?php
require_once '../controlador/reportescontroller.php';
$objrepo=new reportescontroller();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objrepo->mostrar();
    elseif ($op=="nuevo")
        $objrepo->nuevo();
    elseif ($op=="guardar")
        $objrepo->guardar();
    elseif ($op=="editar")
        $objrepo->editar();
    elseif($op=="update")
        $objrepo->update();
        elseif($op=="insertar")
            $objrepo->insertar();
        elseif($op=="recibir")
            $objrepo->recibir();
            elseif($op=="eliminar")
                $objrepo->eliminar();
?>
