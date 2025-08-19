<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ejercicios PHP</h1>

    <!-- Ejercicio 1 -->
    <section>
        <h2>Ejercicio 1: Mayor o menor de edad</h2>
        <form method="post">
            Edad: <input type="number" name="edad1">
            <button type="submit" name="ej1">Verificar</button>
        </form>
        <?php
        if (isset($_POST['ej1'])) {
            $edad = $_POST['edad1'];
            echo ($edad >= 18) ? "Eres mayor de edad." : "Eres menor de edad.";
        }
        ?>
