<?php


echo "Hola mundo <br> ";
echo "segundo mensaje";

//variables
$variable = "texto"; //string
$numero = 25; // entero
$decimal = 3.15; //double o float
$booleano = true; // booleano
$nulo = null; //valor nulo 

//operador
$a = 4;
$b = 2;
$resultado = $a + $b;
echo "<br>";
echo $a + $b;//suma
echo "<br>";
echo $a - $b;//resta
echo "<br>";
echo $a * $b;//multiplicacion
echo "<br>";
echo $a / $b;//divicion
echo "<br>";
echo $a % $b;//porcentaje

$variable = "Marvin"; //string
$variable2 = "Paiz"; //string
echo "<br>";echo "<br>";
echo "El usuario se llama: " . $variable . " " .$variable2;

//asignaciones

$a > $b;//mayor que
$a < $b;//menor que
$a !=$b;//diferente que 
$a == $b;//igual que 
$a ===$b;//igual 

$a += $b;//equivale a $a = $a + &b
$a -= $b;//equivale a $a = $a + &b

$a && $b;//and
$a || $b;//or
!$a; //not 

echo "<br>";echo "<br>";
$numero = 19;
//condiciones
if($numero > 20){
    echo "Hola mundo, EL NUMERO ES MAYOR";
}else{
    echo "el numero era menor";
}


switch($numero){
    case 1:
        echo "hola mundo, el numero es mayor";
        break;

        case 'value':
            # code...
            break;

            default:
            # code...
            break;
}

?>


