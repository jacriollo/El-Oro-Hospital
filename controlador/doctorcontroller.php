<?php
require_once '../modelo/modeldoctor.php';
class doctorcontroller{

    public $model;
  public function __construct() {
        $this->model=new Modelo();
    }
    function mostrar(){
        $doctor=new Modelo();

        $dato=$doctor->mostrar("doctor", "1");
        require_once '../vista/doctor/mostrar.php';
    }


    //INSERTAR
  public  function nuevo(){
        require_once '../vista/doctor/nuevo.php';
    }
    //aca ando haciendo
    public function recibir(){
                $alm = new Modelo();
                //$alm->dnidoc=$_POST['txtdni'];
                $alm->cedula=$_POST['cedula'];
                //$alm->nomdoc=$_POST['txtnomd'];
                $alm->nombre=$_POST['nombre'];
                $alm->apellido=$_POST['apellido'];
				$alm->codespe=$_POST['codespe'];
				$alm->sexo=$_POST['sexo'];
                $alm->fechanaci=$_POST['fechanaci'];
				$alm->correo=$_POST['correo'];
				//$alm->telefo=$_POST['txttele'];
                $alm->telefono=$_POST['telefono'];				
                $alm->direccion=$_POST['direccion'];
                $alm->ciudad=$_POST['ciudad'];
                //$alm->usuario=$_POST['usuario'];
				//$alm->estado=$_POST['cboesta'];
                $alm->usuario=$_POST['txtusu'];
				$alm->password=$_POST['txtpass'];
				
                

     $this->model->insertar($alm);
     //-------------
header("Location: doctor.php");

          }

            //ELIMINAR
            function eliminar(){
                $coddoc=$_REQUEST['coddoc'];
                $condicion="coddoc=$coddoc";
                $doctor=new Modelo();
                $dato=$doctor->eliminar("doctor", $condicion);
                header("location:doctor.php");
            }

    }
