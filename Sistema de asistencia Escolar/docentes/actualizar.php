<?php
include("../includes/auth.php");
include("../conexion.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$sql="UPDATE docentes SET nombre='$nombre', apellido='$apellido', email='$email', telefono='$telefono' WHERE id=$id";
mysqli_query($conn,$sql);
header("Location: index.php");
?>