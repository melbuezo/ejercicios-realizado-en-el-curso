<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 - Números Impares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Números Impares</h1>
    <form method="POST">
        <label for="limite">Ingresa un número entero positivo:</label><br>
        <input type="number" name="limite" id="limite" min="1" required><br><br>
        <button type="submit">Mostrar impares</button>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $limite = intval($_POST["limite"]);
                $impares = [];

                for ($i = 1; $i <= $limite; $i++) {
                    if ($i % 2 != 0) {
                        $impares[] = $i;
                    }
                }

                $resultado = implode(", ", $impares);
                echo "<p>Los números impares desde 1 hasta $limite son:</p>";
                echo "<p class='impares'>$resultado</p>";
            }
            ?>
        </div>
    </form>
</body>
</html>
