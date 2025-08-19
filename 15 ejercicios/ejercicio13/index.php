<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13 - Saludo Personalizado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Saludo Personalizado</h1>
    <form method="POST">
        <label for="nombre">¿Cuál es tu nombre?</label><br>
        <input type="text" name="nombre" id="nombre" required><br><br>
        <button type="submit">Saludar</button>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nombre = htmlspecialchars($_POST["nombre"]);
                echo "<p class='saludo'>¡Hola $nombre!</p>";
            }
            ?>
        </div>
    </form>
</body>
</html>