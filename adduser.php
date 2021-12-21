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

//4-Inserta 

$nombre = trim($_POST["Name"]);
$apellidos=trim($_POST["Surname"]);
$nacimiento=trim($_POST["Birthdate"]);
$pais=trim($_POST["Country"]);
$postal=trim($_POST["PostalNumber"]);
$direccion=trim($_POST["Address"]);
$telefono=trim($_POST["PhoneNumber"]);
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

$query = "INSERT INTO $database_name.$table_name (`Nombre`,`Apellidos`, `Fecha_de_Nacimiento`,`País`,`Código_Postal`,`Dirección`,`Teléfono`,`Email`) VALUES ('$nombre', '$apellidos', '$nacimiento', '$pais', '$postal', '$direccion','$telefono', '$email');";
$ok=mysqli_query($connection,$query);
if(!$ok)print("Insert:no OK");
else print("Insert: OK");

//cerrar
mysqli_close($connection);
print('<br>'."Connection Closed")
?>