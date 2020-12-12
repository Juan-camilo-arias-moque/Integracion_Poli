<?php

include("con_db.php");

		$resultado = mysqli_query($conn,"SELECT * FROM productos");

		while ($consulta = mysqli_fetch_array($resultado)) {

			echo "<table width=\"100%\" border=\"1\" >
						<tr>
							<th>Nombre Usuario</th>
							<th>Codigo producto</th>
							<th>Nombre producto</th>
							<th>Tipo de producto</th>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Serie</th>
							<th>Cantidad</th>
							<th>Precio</th>
						</tr>
						<tr>
							<td align = center>".$consulta['nombre_usuario']."</td>
							<td align = center>".$consulta['codigo']."</td>
							<td align = center>".$consulta['nombre_producto']."</td>
							<td align = center>".$consulta['tipo']."</td>
							<td align = center>".$consulta['marca']."</td>
							<td align = center>".$consulta['modelo']."</td>
							<td align = center>".$consulta['serie']."</td>
							<td align = center>".$consulta['cantidad']."</td>
							<td align = center>".$consulta['precio']."</td>
						</tr>
				</table>";
			echo "<br>";	
			
		}





		

?>