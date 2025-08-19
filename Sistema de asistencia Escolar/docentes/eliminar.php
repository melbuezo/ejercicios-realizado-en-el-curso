<?php
include("../includes/auth.php");
include("../conexion.php");
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM docentes WHERE id=$id");
header("Location: index.php");
?>