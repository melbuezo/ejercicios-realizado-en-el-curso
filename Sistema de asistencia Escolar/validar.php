<?php
session_start();
include("connection.php");

$usuario = $_POST['usuario'];
$clave = $_POST['contraseña'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['usuario'] = $row['usuario'];
    $_SESSION['rol'] = $row['rol'];
    header("Location: bienvenido.php");
    exit();
}else{
    echo "USUARIO Y CONTRASEÑA INCORRECTOS";
}
?>