<?php
require_once '../modelo/modelhorario.php';
class horariocontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $horario=new Modelo();

        $dato=$horario->mostrar("horario", "1");
        require_once '../vista/horario/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/horario/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->nomhor=$_POST['txtnomhor'];
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: horario.php");

          }

            //ELIMINAR
            function eliminar(){
                $codhor=$_REQUEST['codhor'];
                $condicion="codhor=$codhor";
                $horario=new Modelo();
                $dato=$horario->eliminar("horario", $condicion);
                header("location:horario.php");
            }

    }
