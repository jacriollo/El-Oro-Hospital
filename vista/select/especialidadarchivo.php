
<?php

$conexion = mysqli_connect("localhost","root","","el oro");
$id = $_POST['doctor'];

$query = $conexion->query("SELECT cita.codcit, paciente.codpaci, paciente.nombrep, paciente.apellidop, doctor.coddoc, doctor.nombre, doctor.apellido, especialidad.codespe, especialidad.nombrees, cita.estado FROM cita INNER JOIN paciente ON cita.codpaci=paciente.codpaci INNER JOIN doctor ON cita.coddoc=doctor.coddoc INNER JOIN especialidad ON cita.codespe=especialidad.codespe WHERE paciente.codpaci='$id'");

echo '<option value="0">Seleccione</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codespe']. '">' . $row['nombrees'] . '</option>' . "\n";
}
