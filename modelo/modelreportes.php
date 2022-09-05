<?php
class Modelo{


    private $reporte;
    private $db;
    public $codrepo;
    //public $dnidoc;
    
    public $nombre;
    public $fecha;
  
   
  
    public function __construct(){
        $this->reporte=array();
        $this->db=new PDO('mysql:host=localhost;dbname=el oro',"root","");
    }
    public function mostrar($tabla,$condicion){
         //$consulta="SELECT doctor.coddoc, doctor.dnidoc, doctor.nomdoc,doctor.apedoc,specialty.nombrees, doctor.sexo, doctor.telefo, doctor.fechanaci, doctor.correo, doctor.naciona,doctor.estado, doctor.fecha_create FROM doctor INNER JOIN specialty ON doctor.codespe = specialty.codespe";
         $consulta="SELECT reporte.codrepo, reporte.nombre, reporte.fecha FROM reporte";
  
        $resultado=$this->db->query($consulta);
        while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
            $this->reporte[]=$tabla;
        }
        return $this->reporte;
      }
      public function  insertar(Modelo $data){
      try {
         //$query="INSERT INTO doctor (dnidoc,nomdoc,apedoc,codespe,sexo,telefo,fechanaci, correo,naciona,estado)VALUES(?,?,?,?,?,?,?,?,?,?)";
         $query="INSERT INTO reporte (nombre,fecha)VALUES(?,?)";
  
         //$this->db->prepare($query)->execute(array($data->dnidoc,$data->nomdoc,$data->apedoc,
         $this->db->prepare($query)->execute(array($data->nombre,$data->fecha));
      }catch (Exception $e) {
  
        die($e->getMessage());
      }
      }
      public function llenarreporte(){
  
  
  
     
  
  
        
    
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