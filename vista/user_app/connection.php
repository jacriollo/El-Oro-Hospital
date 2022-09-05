<?php

function connect(){
	return new mysqli("localhost","root","","el oro");
}

function get_categorias(){
	$con = connect();
	$sql = "SELECT cita.codcit, cita.dates, cita.hour, paciente.codpaci, 
						paciente.cedula, paciente.nombrep, paciente.apellidop, doctor.coddoc, doctor.cedula, doctor.nombre, 
						doctor.apellido, especialidad.codespe, especialidad.nombrees, cita.estado FROM cita INNER JOIN paciente ON 
						cita.codpaci=paciente.codpaci INNER JOIN doctor ON cita.coddoc=doctor.coddoc INNER JOIN especialidad ON 
						cita.codespe=especialidad.codespe";
	$query  =$con->query($sql);
	$data =  array();
	if($query){
		while($r = $query->fetch_object()){
			$data[] = $r;
		}
	}
	return $data;
}

?>