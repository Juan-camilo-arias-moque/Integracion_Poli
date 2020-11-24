<?php

include("con_db.php");


if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE nombre_usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: home.php");
	//echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	header("Location: index.html");
	?>
	<h3>usuario o contraseña erroneos</h3>
	<?php
}
	


?>