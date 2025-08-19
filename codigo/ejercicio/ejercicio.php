<?php

$precio = 650; // precio por computadora
$cantidad = 2; // se compran dos
$total = $precio * $cantidad;

// Descuento si paga con tarjeta (18%)
$descuento_tarjeta = $total * 0.18;
$total_tarjeta = $total - $descuento_tarjeta;

echo " Pago con tarjeta:<br>";
echo "Costo total: Q $total<br>";
echo "Descuento: Q $descuento_tarjeta<br>";
echo "Total a pagar: Q $total_tarjeta<br><br>";

// Descuento si paga en efectivo (25%)
$descuento_efectivo = $total * 0.25;
$total_efectivo = $total - $descuento_efectivo;

echo "Pago en efectivo:<br>";
echo "Costo total: Q$total<br>";
echo "Descuento: Q$descuento_efectivo<br>";
echo "Total a pagar: Q$total_efectivo<br>";

?>