<?php
class Modelo{

  private $doctor;
  private $db;
  public $coddoc;
  //public $dnidoc;
  public $cedula;
  public $nombre;
  public $apellido;
  public $codespe;
  public $sexo;
  public $fechanaci;
  public $correo;
  public $telefono;
  public $direccion;
  public $ciudad;
  public $usuario;
  public $estado;
  public $clave;
  public $cargo;
  
  

  public function __construct(){
      $this->doctor=array();
      $this->db=new PDO('mysql:host=localhost;dbname=el oro',"root","");
  }
  public function mostrar($tabla,$condicion){
       //$consulta="SELECT doctor.coddoc, doctor.dnidoc, doctor.nomdoc,doctor.apedoc,specialty.nombrees, doctor.sexo, doctor.telefo, doctor.fechanaci, doctor.correo, doctor.naciona,doctor.estado, doctor.fecha_create FROM doctor INNER JOIN specialty ON doctor.codespe = specialty.codespe";
       $consulta="SELECT doctor.coddoc, doctor.cedula, doctor.nombre,doctor.apellido,especialidad.nombrees, doctor.sexo, doctor.fechanaci, doctor.correo, doctor.telefono, doctor.direccion, doctor.ciudad,doctor.estado,doctor.usuario, doctor.cargo FROM doctor INNER JOIN especialidad ON doctor.codespe = especialidad.codespe";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->doctor[]=$tabla;
      }
      return $this->doctor;
    }
    public function  insertar(Modelo $data){
    try {
       //$query="INSERT INTO doctor (dnidoc,nomdoc,apedoc,codespe,sexo,telefo,fechanaci, correo,naciona,estado)VALUES(?,?,?,?,?,?,?,?,?,?)";
       $query="INSERT INTO doctor (cedula,nombre,apellido,codespe,sexo,fechanaci, correo,telefono, direccion, ciudad,estado,usuario,cargo,password)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

       //$this->db->prepare($query)->execute(array($data->dnidoc,$data->nomdoc,$data->apedoc,
       $this->db->prepare($query)->execute(array($data->cedula,$data->nombre,$data->apellido,$data->codespe,$data->sexo,$data->fechanaci,$data->correo,$data->telefono,$data->direccion,$data->ciudad,$data->estado,$data->usuario,$data->cargo));

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
