<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 15 - Paga Total</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculadora de Paga</h1>
    <form method="POST">
        <label for="horas">Horas trabajadas:</label><br>
        <input type="number" name="horas" id="horas" min="0" step="0.01" required><br><br>

        <label for="valor">Valor por hora (Q):</label><br>
        <input type="number" name="valor" id="valor" min="0" step="0.01" required><br><br>

        <button type="submit">Calcular paga</button>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $horas = floatval($_POST["horas"]);
                $valor = floatval($_POST["valor"]);
                $paga = $horas * $valor;

                echo "<p>Has trabajado <strong>$horas</strong> horas a Q<strong>$valor</strong> por hora.</p>";
                echo "<p class='paga'>Tu paga total es: Q" . number_format($paga, 2) . "</p>";
            }
            ?>
        </div>
    </form>
</body>
</html>
