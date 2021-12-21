<?php

echo 'PHP Connect to MySQL';
$server = "localhost:3307";
$database_name = "MONLAUHACK";
$username = "sergicastin";
$password = "Monlau2021";
$table_name = "users";

//1-conectar al servidor (Localhost)
$connection = mysqli_connect($server,$username,$password);
if (mysqli_connect_errno()) die("Cannot connect to database");
else echo 'OK: connect to database"<br>';
	
$email=trim($_POST["Email"]);

/*
===========Prueba============
$nombre="Sergi";
$apellidos="Castillo Tiñena"; 
$nacimiento="2001-08-15";
$pais="España";
$postal="08130";
$direccion="Font dels Arcs 15";
$telefono="653818127";
$email="sergicastin@monlau.com";
*/

// Borrar

$query = "DELETE FROM $database_name.$table_name WHERE Email = '$email'";

$ok=mysqli_query($connection,$query);
if(!$ok)print('<br>'."delete: no OK");
else print('<br>'."Delete: OK");


//cerrar
mysqli_close($connection);
print('<br>'."Connection Closed")
?>