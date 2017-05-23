<?php

header("Access-Control-Allow-Origin: *");

include("conexion.php");

$origen = $_POST["origen"];
$destino = $_POST["destino"];
$fechaini = $_POST["fechaini"];
$fechafin = $_POST["fechafin"];

$sentencia = "INSERT INTO ruta (destino, origen, fecha_inicio, fecha_fin) VALUES ('".$destino."', '".$origen."', '".$fechaini."', '".$fechafin."')"; 

$query = mysqli_query($conexion, $sentencia);

if($query){
    echo "Se registro la Ruta con exito";
}else{
    echo "No fue registrar el usuario";
}

mysqli_close($conexion);

?>
