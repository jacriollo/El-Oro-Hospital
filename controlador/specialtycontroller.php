<?php
require_once '../modelo/modelspecialty.php';
class specialtycontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $especialidad=new Modelo();

        $dato=$especialidad->mostrar("especialidad", "1");
        require_once '../vista/especialidad/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/especialidad/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $fechaAct=  date("Y-m-d H:i:s"); 
                $alm->nombrees=$_POST['nombrees'];
                $alm->descripcion=$_POST['descripcion'];
                $alm->usu_registro=$_POST['usu_registro']; 
                $alm->estado=$_POST['estado'];
                
                

     $this->model->insertar($alm);
     //-------------
header("Location: specialty.php");

          }

            //ELIMINAR
            function eliminar(){
                $codespe=$_REQUEST['codespe'];
                $condicion="codespe=$codespe";
                $especialidad=new Modelo();
                $dato=$especialidad->eliminar("especialidad", $condicion);
                header("location:specialty.php");
            }

    }
