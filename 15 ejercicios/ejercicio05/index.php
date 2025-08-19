<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Evaluación de Impuestos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Evaluación de Impuestos</h1>
    <form method="POST">
        <label for="edad">Edad:</label><br>
        <input type="number" name="edad" id="edad" min="0" required><br><br>

        <label for="ingresos">Ingresos mensuales (Q):</label><br>
        <input type="number" name="ingresos" id="ingresos" min="0" required><br><br>

        <button type="submit">Evaluar</button>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $edad = intval($_POST["edad"]);
                $ingresos = floatval($_POST["ingresos"]);

                if ($edad >= 18 && $ingresos > 2500) {
                    echo "<p class='obligado'> Sí estás obligado a pagar impuestos.</p>";
                } else {
                    echo "<p class='no-obligado'> No estás obligado a pagar impuestos.</p>";
                    echo "<ul>";
                    if ($edad < 18) {
                        echo "<li>🔹 Tu edad es menor de 18 años.</li>";
                    }
                    if ($ingresos <= 2500) {
                        echo "<li>🔹 Tus ingresos mensuales son iguales o menores a Q2,500.</li>";
                    }
                    echo "</ul>";
                }
            }
            ?>
        </div>
    </form>
</body>
</html>


