<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$db="asistencia escolar";
$port = 3307;

$conn = mysqli_connect($servidor,$usuario,$clave,$db,$port);
if(!$conn){
    die("Error de conexion: ". mysqli_connect_error());
}
?>