<?php

$dbhost = "mybase";
$dbuser = "root";
$dbpass = "1234";
$dbname = "usuarios";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM admins WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: home.html");
	//echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	header("Location: index.html");
	//echo "No ingreso"; 
}
	


?>