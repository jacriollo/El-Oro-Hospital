<?php

$conexion = mysqli_connect("localhost","root","","el oro");

$query = $conexion->query("SELECT * FROM paciente");

echo '<option value="0">Seleccione el paciente</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codpaci']. '">' . $row['nombrep'] . '</option>' . "\n";
}



