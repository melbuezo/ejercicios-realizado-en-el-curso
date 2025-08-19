<?php
include("../includes/auth.php");
include("../connection.php");

$where = "";
if (isset($_POST['fecha']) && $_POST['fecha'] != '') {
  $fecha = $_POST['fecha'];
  $where = "WHERE fecha='$fecha'";
}

$result = mysqli_query($conn, "SELECT a.id, e.nombre, e.apellido, a.fecha, a.estado FROM asistencias a JOIN estudiantes e ON a.id_estudiante=e.id $where");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Listado de Asistencias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f1f3f5;
    }

    .card {
      border-radius: 1rem;
      border: 1px solid #dee2e6;
    }

    .btn-custom {
      border-radius: 0.5rem;
    }

    .table th,
    .table td {
      vertical-align: middle;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="card shadow-sm p-4">
      <h2 class="text-center mb-4"><i class="bi bi-journal-text"></i> Listado de Asistencias</h2>

      <!-- Formulario de filtro -->
      <form method="post" class="row g-3 mb-4">
        <div class="col-md-6">
          <label for="fecha" class="form-label fw-semibold">📅 Filtrar por fecha:</label>
          <input type="date" id="fecha" name="fecha" class="form-control">
        </div>
        <div class="col-md-6 d-flex align-items-end">
          <button type="submit" class="btn btn-primary w-100 btn-custom">
            <i class="bi bi-filter-circle"></i> Filtrar
          </button>
        </div>
      </form>

      <!-- Tabla -->
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm bg-white rounded">
          <thead class="table-light">
            <tr class="text-center">
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Fecha</th>
              <th>Estado</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellido']; ?></td>
                <td class="text-center"><?php echo $row['fecha']; ?></td>
                <td class="text-center">
                  <?php if ($row['estado'] == 'Presente') { ?>
                    <span class="badge bg-success"><i class="bi bi-check-circle-fill"></i> Presente</span>
                  <?php } elseif ($row['estado'] == 'Ausente') { ?>
                    <span class="badge bg-danger"><i class="bi bi-x-circle-fill"></i> Ausente</span>
                  <?php } else { ?>
                    <span class="badge bg-secondary"><?php echo $row['estado']; ?></span>
                  <?php } ?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

      <!-- Botón volver -->
      <div class="mt-4 text-end">
        <a href="../bienvenido.php" class="btn btn-secondary btn-custom">
          <i class="bi bi-arrow-left-circle"></i> Volver
        </a>
      </div>
    </div>
  </div>
</body>
</html>
