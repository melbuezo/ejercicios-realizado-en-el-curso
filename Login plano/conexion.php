<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$db = "login1";

$conn = mysqli_connect($servidor, $usuario, $clave, $db);

if (!$conn){

    die("error de conexion" . mysqli_connect());
}