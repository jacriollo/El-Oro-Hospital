<?php
class Modelo{

  private $cita;
  private $db;
  public $codcit;
  public $dates;
  public $hour;
  public $codpaci;
  public $coddoc;
  public $codespe;
  public $estado;
  
  
  

  public function __construct(){
      $this->cita=array();
      $this->db=new PDO('mysql:host=localhost;dbname=el oro',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT cita.codcit, cita.dates, cita.hour,paciente.nombrep,doctor.nombre, especialidad.nombrees, cita.estado, cita.fecha_create FROM cita INNER JOIN paciente ON cita.codpaci = paciente.codpaci INNER JOIN doctor ON cita.coddoc = doctor.coddoc INNER JOIN especialidad ON cita.codespe = especialidad.codespe";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->cita[]=$tabla;
      }
      return $this->cita;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO cita (dates,hour,codpaci,coddoc,codespe,estado)VALUES(?,?,?,?,?,?)";

      $this->db->prepare($query)->execute(array($data->dates,$data->hour,$data->codpaci,
	  $data->coddoc,$data->codespe,$data->estado));

    }catch (Exception $e) {

      die($e->getMessage());
    }
    }
    public function llenarespecialidad(){



    try{
      $consulta="SELECT * FROM especialidad";
      $smt=$this->db->prepare($consulta);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);


    }catch(Exception $e){


    }

    }
	
	public function llenardoctor(){



    try{
      $consulta="SELECT * FROM doctor";
      $smt=$this->db->prepare($consulta);
      $smt->execute();
      return $smt->fetchAll(PDO::FETCH_OBJ);


    }catch(Exception $e){


    }

    }

   
	
	
  public function actualizar($tabla,$data,$condicion){
      $consulta="UPDATE $tabla SET $data WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
  public function eliminar($tabla,$condicion){
      $consulta="DELETE FROM $tabla WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
}

 ?>
