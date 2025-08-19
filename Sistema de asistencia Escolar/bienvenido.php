<?php
include("includes/auth.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
  <div class="container-fluid px-4">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="data:image/png;base64,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" alt="Logo" width="40" class="me-2">
      <strong>Sistema Escolar</strong>
    </a>
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person-circle"></i> <?php echo $_SESSION['usuario']; ?>
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><span class="dropdown-item-text">Rol: <?php echo $_SESSION['rol']; ?></span></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-danger" href="logout.php"><i class="bi bi-box-arrow-right"></i> Cerrar sesión</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <aside class="col-md-3 col-lg-2 d-md-block bg-white border-end min-vh-100 p-3">
      <h6 class="text-muted text-uppercase">Menú</h6>
      <ul class="nav flex-column">
        <?php if($_SESSION['rol'] == 'admin'){ ?>
        <li class="nav-item">
          <a class="nav-link text-dark" href="docentes/index.php">👥 Gestionar Docentes</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link text-dark" href="estudiantes/index.php">🎓 Gestionar Estudiantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="asistencias/tomar.php">✅ Tomar Asistencia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="asistencias/listar.php">📋 Listar Asistencias</a>
        </li>
      </ul>
    </aside>

    <!-- Contenido principal -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
      <h1 class="h2">👋 Bienvenido, <span class="text-primary"><?php echo $_SESSION['usuario']; ?></span></h1>
      <p class="lead">Tu rol actual es: <span class="badge bg-primary"><?php echo $_SESSION['rol']; ?></span></p>
    </main>
  </div>
</div>

</body>
</html>
