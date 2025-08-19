<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10 - Cuenta Regresiva</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cuenta Regresiva</h1>
    <form method="POST">
        <label for="inicio">Ingresa un número entero positivo:</label><br>
        <input type="number" name="inicio" id="inicio" min="1" required><br><br>
        <button type="submit">Iniciar cuenta regresiva</button>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inicio = intval($_POST["inicio"]);
                $regresiva = [];

                for ($i = $inicio; $i >= 1; $i--) {
                    $regresiva[] = $i;
                }

                $resultado = implode(", ", $regresiva);
                echo "<p>Cuenta regresiva desde $inicio:</p>";
                echo "<p class='regresiva'>$resultado</p>";
            }
            ?>
        </div>
    </form>
</body>
</html>

