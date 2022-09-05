
<?php
require_once '../modelo/modelexamenes.php';
class examenescontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $examen=new Modelo();

        $dato=$examen->mostrar("horario", "1");
        require_once '../vista/examenes/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/user_app/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                $alm->codigo=$_POST['txtcoddoc'];
                $alm->nombre=$_POST['txtnombre'];
                $alm->descripcion=$_POST['txtdescripcion'];
                $alm->urlpdf=$_POST['txturl'];           
               
                

     $this->model->insertar($alm);
     //-------------
header("Location: horario.php");

          }

            //ELIMINAR
           /* function eliminar(){
                $codhor=$_REQUEST['codhor'];
                $condicion="codhor=$codhor";
                $horario=new Modelo();
                $dato=$horario->eliminar("horario", $condicion);
                header("location:horario.php");
            }*/

    }
