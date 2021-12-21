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
	
//2- Crear  una base de datos	
$query = "CREATE DATABASE IF NOT EXISTS $database_name";	

$ok = mysqli_query($connection, $query);

if (!$ok) echo 'no se ha podido crear la base de datos: '.'<br>'; 
	else print("data base OK");

//3- Crear una table

$query = "CREATE TABLE $database_name.$table_name(
	Nombre varchar(30) NOT NULL, 
	Apellidos varchar(50) NOT NULL, 
	Fecha_de_Nacimiento date,
	País VARCHAR(30), 
	Código_Postal int,  
	Dirección varchar(100),
	Teléfono int, 
	Email varchar(50) NOT NULL)";

$ok = mysqli_query($connection,$query);	
if(!$ok)print('<br>'."Create Table: no OK");
else print('<br>'."Table: OK");



$sql = "SELECT * FROM $table_name";
$result = $connection->query($sql);

$query = "SELECT * FROM users";
$ok = mysqli_query($connection, $query);

$fila=mysqli_fetch_array($datos);

echo "TEST";
echo $ok;


while ($fila){
 echo "id: " . $fila["Nombre"]. " - Apellidos: " . $fila["Apellidos"]. " " . $fila["Apellidos"]. "<br>";
} 

?>