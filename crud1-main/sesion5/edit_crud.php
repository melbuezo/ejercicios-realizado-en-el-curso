<?php 

include("connection.php");

$con=connection();

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "UPDATE persona SET Nombre = '$name', Apellido = '$lastname', Usuario = '$username', Contraseña = '$password', Email = '$email' WHERE id = '$id'";
$query = mysqli_query($con,$sql);

if($query){
    header("location: index.php");
}

?>