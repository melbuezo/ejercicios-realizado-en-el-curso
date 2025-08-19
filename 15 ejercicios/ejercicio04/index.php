<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Par o Impar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>¿El número es par o impar?</h1>
    <form method="POST">
        <label for="numero">Ingresa un número entero:</label><br>
        <input type="number" name="numero" id="numero" required><br><br>
        <button type="submit">Verificar</button>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = intval($_POST["numero"]);

                if ($numero % 2 == 0) {
                    echo "<p class='par'>✅ El número $numero es <strong>par</strong>.</p>";
                } else {
                    echo "<p class='impar'>🔹 El número $numero es <strong>impar</strong>.</p>";
                }
            }
            ?>
        </div>
    </form>
</body>
</html>