<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Verificar Contraseña del Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Definir y Verificar Contraseña</h1>
    <form method="POST">
        <label for="contrasena1">Define tu contraseña:</label><br>
        <input type="password" name="contrasena1" id="contrasena1" required><br><br>

        <label for="contrasena2">Confirma tu contraseña:</label><br>
        <input type="password" name="contrasena2" id="contrasena2" required><br><br>

        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $con1 = strtolower(trim($_POST["contrasena1"]));
        $con2 = strtolower(trim($_POST["contrasena2"]));

        if ($con1 === $con2) {
            echo "<p class='correcto'>Las contraseñas coinciden.</p>";
        } else {
            echo "<p class='incorrecto'>Las contraseñas no coinciden.</p>";
        }
    }
    ?>
</body>
</html>





