<?php

	header("Access-Control-Allow-Origin: *");
	include("conexion.php");
	
	$sql = "SELECT * FROM ruta";
	
	$query = mysqli_query($conexion, $sql);
	
	$cantidadRegistros = mysqli_num_rows($query);
	
	if($cantidadRegistros > 0)
	{
		$tabla = "<table class='table table-striped'>";
		$tabla = $tabla . "<tr><th>ID Ruta</th><th>Origen</th><th>Destino</th><th>Fecha Inicio</th><th>Fecha Fin</th></tr>";
		while($row = mysqli_fetch_array($query))
		{
			$tabla = $tabla . "<tr><td>" . $row["id_ruta"] . "</td>";
			$tabla = $tabla . "<td>" . $row["origen"] . "</td>";
			$tabla = $tabla . "<td>" . $row["destino"] . "</td>";
			$tabla = $tabla . "<td>" . $row["fecha_inicio"] . "</td>";
			$tabla = $tabla . "<td>" . $row["fecha_fin"] . "</td></tr>";
		}		

		$tabla = $tabla . "</table>";
		echo $tabla;
	}
	else
	{
		echo "No hay registros";
	}

	mysqli_close($conexion);
?>