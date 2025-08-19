<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 - Años vividos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>¿Cuántos años has vivido?</h1>
    <form method="POST">
        <label for="edad">Ingresa tu edad:</label><br>
        <input type="number" name="edad" id="edad" min="1" required><br><br>
        <button type="submit">Mostrar años</button>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $edad = intval($_POST["edad"]);

                echo "<p>Has vivido los siguientes años:</p>";
                echo "<ul>";
                for ($i = 1; $i <= $edad; $i++) {
                    echo "<li>Año $i</li>";
                }
                echo "</ul>";
            }
            ?>
        </div>
    </form>
</body>
</html>