<?php
require_once '../modelo/modelreportes.php';
class reportescontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $reporte=new Modelo();

        $dato=$reporte->mostrar("reporte", "1");
        require_once '../vista/reportes/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/reportes/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                //$alm->dnidoc=$_POST['txtdni'];
                
                //$alm->nomdoc=$_POST['txtnomd'];
                $alm->nombre=$_POST['nombre'];
                $alm->fecha=$_POST['fecha'];
             
				
				
                

     $this->model->insertar($alm);
     //-------------
header("Location: reportes.php");

          }

            //ELIMINAR
            function eliminar(){
                $codrepo=$_REQUEST['codrepo'];
                $condicion="codrepo=$codrepo";
                $reporte=new Modelo();
                $dato=$reporte->eliminar("reporte", $condicion);
                header("location:reportes.php");
            }

    
}

