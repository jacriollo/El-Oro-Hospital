
<?php
class Modelo{

  private $examen;
 // private $db;

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
      $this->examen=array();
      $this->db=new PDO('mysql:host=localhost;dbname=el oro',"root","");
  }
  public function mostrar($tabla,$condicion){
    $consulta="SELECT cita.codcit, cita.dates, cita.hour,paciente.nombrep,doctor.nombre, especialidad.nombrees, cita.estado, cita.fecha_create FROM cita INNER JOIN paciente ON cita.codpaci = paciente.codpaci INNER JOIN doctor ON cita.coddoc = doctor.coddoc INNER JOIN especialidad ON cita.codespe = especialidad.codespe";

    //  $consulta="SELECT cita.codcit, paciente.codpaci, paciente.nombrep, paciente.apellidop, doctor.coddoc, doctor.nombre, doctor.apellido, especialidad.codespe, especialidad.nombrees, cita.estado FROM cita INNER JOIN paciente ON cita.codpaci=paciente.codpaci INNER JOIN doctor ON cita.coddoc=doctor.coddoc INNER JOIN especialidad ON cita.codespe=especialidad.codespe WHERE paciente.codpaci='$id'";
      //$consulta="SELECT horario.codhor, horario.nomhor, doctor.coddoc, doctor.cedula, doctor.nombre, doctor.apellido, doctor.correo, doctor.direccion, doctor.ciudad, horario.fere FROM horario INNER JOIN doctor ON  horario.coddoc = doctor.coddoc";
      
      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->examen[]=$tabla;
      }
      return $this->examen;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO examen (coddoc,codpaci,descripcion,urlpdf)VALUES(?,?,?,?)";

      $this->db->prepare($query)->execute(array($data->coddoc,$data->codpaci,$data->descripcion,$data->urlpdf));

    }catch (Exception $e) {

      die($e->getMessage());
    }
    }
  
  /*public function actualizar($tabla,$data,$condicion){
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
  } */
}

 ?>
