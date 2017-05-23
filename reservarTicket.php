<?php

	header("Access-Control-Allow-Origin: *");
	include("conexion.php");

		$id_ruta = $_POST["id_ruta"];
		$cedula = $_POST["cedula"];

		
	$sentencia = "INSERT INTO ticket (id_ruta, id_usuario) VALUES ('".$id_ruta."', '".$cedula."')"; 

		$query = mysqli_query($conexion, $sentencia);

		if($query){
		    echo "Se reservo el ticket con exito";
		}else{
		    echo "No se pudo reservar el ticket";
		}

	mysqli_close($conexion);
?>

