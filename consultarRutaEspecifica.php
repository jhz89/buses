<?php

	header("Access-Control-Allow-Origin: *");
	include("conexion.php");

	$valor = $_POST["valor"];
	$buscador = $_POST["buscador"];		

		$sql = "SELECT * FROM ruta WHERE $buscador = '".$valor."'";
		$query = mysqli_query($conexion, $sql);
	
	$cantidadRegistros = mysqli_num_rows($query);
	
	if($cantidadRegistros > 0)
	{
		$tabla = "<form id='formReservar'><table class='table table-striped'>";
		$tabla = $tabla . "<tr><th>ID Ruta</th><th>Origen</th><th>Destino</th><th>Fecha Inicio</th><th>Fecha Fin</th><th>Reservar</th></tr>";
		while($row = mysqli_fetch_array($query))
		{
			$tabla = $tabla . "<tr><td><label id='id_ruta'>" . $row["id_ruta"] . "</label></td>";
			$tabla = $tabla . "<td>". $row["origen"] ."</td>";
			$tabla = $tabla . "<td>" . $row["destino"] . "</td>";
			$tabla = $tabla . "<td>" . $row["fecha_inicio"] . "</td>";
			$tabla = $tabla . "<td>" . $row["fecha_fin"] . "</td>";
			$tabla = $tabla . "<td>"."<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Reservar</button>"." </td></tr>";
		}		

		$tabla = $tabla . "</table></form>";
		echo $tabla;
	}
	else
	{
		echo "No hay registros";	
	}
	

	mysqli_close($conexion);
?>