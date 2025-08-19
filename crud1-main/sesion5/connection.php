<?php   

function connection(){
 $host="localhost";
 $user="root";
 $pass="";
 $db="crud1";
 $port = 3306;

 //metodo
 $connect=mysqli_connect($host,$user,$pass,$db,$port);

 mysqli_select_db($connect,$db);
 return $connect;
}
?>