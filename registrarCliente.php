<?php

header("Access-Control-Allow-Origin: *");

include("conexion.php");

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$email = $_POST["email"];

$sentencia = "INSERT INTO usuario (cedula, nombre, apellido, telefono, direccion, email) VALUES ('".$cedula."','".$nombre."','".$apellido."','".$telefono."','".$direccion."','".$email."')";

$query = mysqli_query($conexion, $sentencia);

if($query){
    echo "Se registro el Usuario con exito";
}else{
    echo "No fue registrar el usuario";
}

mysqli_close($conexion);

?>
