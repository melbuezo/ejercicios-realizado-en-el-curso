<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 - Repetir Palabra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Repetir Palabra 10 Veces</h1>
    <form method="POST">
        <label for="palabra">Ingresa una palabra:</label><br>
        <input type="text" name="palabra" id="palabra" required><br><br>

        <button type="submit">Mostrar</button>
    </form>

    <div class="resultado">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $palabra = htmlspecialchars($_POST["palabra"]);

            for ($i = 1; $i <= 10; $i++) {
                echo "<p>$i. $palabra</p>";
            }
        }
        ?>
    </div>
</body>
</html>

