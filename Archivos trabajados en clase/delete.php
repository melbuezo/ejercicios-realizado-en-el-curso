<?php  
include("connection.php");

$con = connection();
$id = $_GET['id'];



$sql = "DELETE FROM persona where id='$id'";

$elim= mysqli_querysq($con, $sql);

if($elim){
    header("Location: index.php");
}
?>