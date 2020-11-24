<?php

include("con_db.php");

if (isset($_POST['btn_registro'])){
	if (strlen($_POST['NombreUsuario']) >= 1 && strlen($_POST['BarCode']) >= 1 && strlen($_POST['NombreProducto']) >= 1 && strlen($_POST['tipo']) >= 1 && strlen($_POST['CantidadProducto']) >= 1 && strlen($_POST['MarcaProducto']) >= 1 && strlen($_POST['ModeloProducto']) >= 1 && strlen($_POST['SerieProducto']) >= 1 && strlen($_POST['PrecioProducto']) >= 1){
		$NombreUsuario = trim($_POST['NombreUsuario']);
		$BarCode = trim($_POST['BarCode']);
		$NombreProducto = trim($_POST['NombreProducto']);
		$tipo = trim($_POST['tipo']);
		$CantidadProducto = trim($_POST['CantidadProducto']);
		$MarcaProducto = trim($_POST['MarcaProducto']);
		$ModeloProducto = trim($_POST['ModeloProducto']);
		$SerieProducto = trim($_POST['SerieProducto']);
		$PrecioProducto = trim($_POST['PrecioProducto']);
		$consulta = "INSERT INTO productos(nombre_usuario, codigo, nombre_producto, tipo, cantidad, marca, modelo, serie, precio) VALUES ('$NombreUsuario',$BarCode ,'$NombreProducto' ,'$tipo' ,'$CantidadProducto' ,'$MarcaProducto' ,'$ModeloProducto' ,'$SerieProducto',$PrecioProducto)";
		$resultado = mysqli_query($conn,$consulta);
		if ($resultado) {
			?>
			<h3> ingresado</h3>
			<?php
		}else {
			?>
			<h3> no paila</h3>
			<?php
		}
		
		
	}   else {
		?>
		<h3> completar los campos</h3>
		<?php
	}
			
}




?>