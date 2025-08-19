<?php
include("../includes/auth.php");
include("../connection.php");
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$grado=$_POST['grado'];
$seccion=$_POST['seccion'];
$sql="UPDATE estudiantes SET nombre='$nombre', apellido='$apellido', grado='$grado', seccion='$seccion' WHERE id=$id";
mysqli_query($conn,$sql);
header("Location: index.php");
?>