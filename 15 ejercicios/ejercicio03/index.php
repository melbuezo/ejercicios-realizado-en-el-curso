<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - División</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>División de Dos Números</h1>
    <form method="POST">
        <label for="num1">Primer número:</label><br>
        <input type="number" step="any" name="num1" id="num1" required><br><br>

        <label for="num2">Segundo número (divisor):</label><br>
        <input type="number" step="any" name="num2" id="num2" required><br><br>

        <button type="submit">Dividir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);

        if ($num2 == 0) {
            echo "<p class='error'>Error: No se puede dividir entre cero.</p>";
        } else {
            $resultado = $num1 / $num2;
            echo "<p class='resultado'>Resultado: $num1 ÷ $num2 = $resultado</p>";
        }
    }
    ?>
</body>
</html>

