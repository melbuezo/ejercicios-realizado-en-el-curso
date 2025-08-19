<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10 - Inversión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Simulador de Inversión</h1>
    <form method="POST">
        <label for="capital">Cantidad a invertir (Q):</label><br>
        <input type="number" name="capital" id="capital" min="0" step="0.01" required><br><br>

        <label for="interes">Interés anual (%):</label><br>
        <input type="number" name="interes" id="interes" min="0" step="0.01" required><br><br>

        <label for="años">Duración (años):</label><br>
        <input type="number" name="años" id="años" min="1" required><br><br>

        <button type="submit">Calcular inversión</button>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $capital = floatval($_POST["capital"]);
                $interes = floatval($_POST["interes"]);
                $años = intval($_POST["años"]);

                echo "<h2>Capital acumulado por año</h2>";
                echo "<table>";
                echo "<tr><th>Año</th><th>Capital (Q)</th></tr>";

                for ($i = 1; $i <= $años; $i++) {
                    $capital *= (1 + $interes / 100);
                    echo "<tr><td>$i</td><td>" . number_format($capital, 2) . "</td></tr>";
                }

                echo "</table>";
            }
            ?>
        </div>
    </form>
</body>
</html>