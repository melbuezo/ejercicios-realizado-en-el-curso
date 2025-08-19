<?php



include("conexion.php");


$usuario = $_POST['usuario'];
$clave = $_POST['contraseña'];

$sql="SELECT * FROM user WHERE usuario= '$usuario' AND clave='$clave'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result)>0){

   header("location: bienvenido.php");
   exit();
}else{
    echo "USUARIO Y CONTRASEÑA INCORRECTOS";
}

?>