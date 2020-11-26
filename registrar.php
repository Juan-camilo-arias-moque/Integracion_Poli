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
			echo '<script language="javascript">alert("Producto ingresado exitosamente");</script>';
		}else {
			echo '<script language="javascript">alert("El producto no fue ingresado");</script>';
		}
		
		
	}   else {
		echo '<script language="javascript">alert("Por favor complete todos los campos");</script>';
	}
			
}




?>