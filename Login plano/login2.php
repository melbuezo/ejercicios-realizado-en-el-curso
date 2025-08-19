<?php
$errores = [];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario_ingresado = trim($_POST["usuario"] ?? "");
    $password_ingresado = $_POST["password"] ?? "";

    if ($usuario_ingresado === "" || $password_ingresado === "") {
        $errores[] = "Complete todos los campos.";
    } else {
        $usuario_valido = "admin";
        $password_valido = "1234";

        if (
            $usuario_ingresado === $usuario_valido &&
            $password_ingresado === $password_valido
        ) {
            $mensaje = "Bienvenido, $usuario_ingresado";
        } else {
            $errores[] = "Credenciales incorrectas.";
        }
    }
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <form method="post" class="card" autocomplete="off" novalidate>
      <img src="imagenes/descarga.png" class="form-logo" alt="Logo Colegio Tecnológico en Informática">
      <h1>Iniciar sesión</h1>
      <?php if (!empty($errores)): ?>
        <div class="alert">
          <?php foreach ($errores as $e): ?>
            <p><?= htmlspecialchars($e) ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($mensaje)): ?>
        <div class="alert success">
          <p><?= htmlspecialchars($mensaje) ?></p>
        </div>
      <?php endif; ?>
      <div class="field">
        <label for="usuario">Usuario</label>
        <input id="usuario" name="usuario" type="text" value="<?= htmlspecialchars($_POST["usuario"] ?? "") ?>" required>
      </div>
      <div class="field">
        <label for="password">Contraseña</label>
        <input id="password" name="password" type="password" required>
      </div>
      <button type="submit">Entrar</button>
    </form>
  </div>
</body>
</html>
