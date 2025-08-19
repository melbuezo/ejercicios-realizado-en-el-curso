<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 14 - Operación con Potencia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado de la operación</h1>
    <div class="resultado">
        <?php
        $resultado = (3 + 2) * pow(2, 2);
        echo "<p>(3 + 2) × 2² = $resultado</p>";
        ?>
    </div>
</body>
</html>