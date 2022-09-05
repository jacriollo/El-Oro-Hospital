<?php
require_once '../modelo/modelenfermedades.php';
class enfermedadescontroller{

				
    public $model;
    public function __construct() {
          $this->model=new Modelo();
      }
      function mostrar(){
          $enfermedad=new Modelo();
  
          $dato=$enfermedad->mostrar("enfermedades", "1");
          require_once '../vista/enfermedades/mostrar.php';
      }
  
  
      //INSERTAR
    public  function nuevo(){
          require_once '../vista/enfermedades/nuevo.php';
      }
      //aca ando haciendo
      public function recibir(){
                  $alm = new Modelo();
             
                  $alm->nombre=$_POST['nombre'];
                 
                  
                  
  
       $this->model->insertar($alm);
       //-------------
  header("Location: enfermedades.php");
  
            }
  
              //ELIMINAR
              function eliminar(){
                  $codenfer=$_REQUEST['codenfer'];
                  $condicion="codenfer=$codenfer";
                  $enfermedad=new Modelo();
                  $dato=$enfermedad->eliminar("enfermedades", $condicion);
                  header("location:enfermedades.php");
              }
  
     


}
