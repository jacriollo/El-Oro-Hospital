<?php

$conexion = mysqli_connect("localhost","root","","el oro");

$query = $conexion->query("SELECT * FROM doctor");

echo '<option value="0">Seleccione el doctor</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['coddoc']. '">' . $row['nombre'] . '</option>' . "\n";
}



