<?php
include("includes/auth.php");
include("connection.php");
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM estudiantes WHERE id =$id");
header("Location: index.php");
?>