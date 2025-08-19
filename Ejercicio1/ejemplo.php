<?php
// -- PRIMERA PARTE: Número mayor --
$num1 = 120;
$num2 = 85;

echo "<h3>Comparación de Números</h3>";
echo "Número 1: $num1 <br>";
echo "Número 2: $num2 <br>";

if ($num1 > $num2) {
    echo "El número mayor es: $num1<br><br>";
} elseif ($num2 > $num1) {
    echo "El número mayor es: $num2<br><br>";
} else {
    echo "Ambos números son iguales<br><br>";
}

// ----SEGUNDA PARTE: Compra de computadoras ---
$precioUnidad = 650.00;
$cantidad = 2;
$subtotal = $precioUnidad * $cantidad;

// Método de pago: "tarjeta" o "efectivo"
$metodoPago = "efectivo";

echo "<h3>Compra de Computadoras</h3>";
echo "Cantidad: $cantidad<br>";
echo "Precio por unidad: Q$precioUnidad<br>";
echo "Subtotal: Q$subtotal<br>";
echo "Método de pago: $metodoPago<br>";

if ($metodoPago == "tarjeta") {
    $descuento = 0.18; // 18%
} elseif ($metodoPago == "efectivo") {
    $descuento = 0.25; // 25%
} else {
    $descuento = 0;
    echo "Método de pago no reconocido.<br>";
}

$montoDescuento = $subtotal * $descuento;
$totalPagar = $subtotal - $montoDescuento;

echo "Descuento aplicado: Q" . number_format($montoDescuento, 2) . "<br>";
echo "Total a pagar: Q" . number_format($totalPagar, 2);
?>