<?php
include("../includes/auth.php");
include("../connection.php");
if (isset($_POST['submit'])) {
  $fecha = $_POST['fecha'];
  foreach ($_POST['estado'] as $id_estudiante => $estado) {
    $sql = "INSERT INTO asistencias(id_estudiante,fecha,estado) VALUES($id_estudiante,'$fecha','$estado')";
    mysqli_query($conn, $sql);
  }
  echo "<div class='alert alert-success text-center m-4'>✅ Asistencia guardada correctamente.</div>";
}
$result = mysqli_query($conn, "SELECT * FROM estudiantes");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Tomar Asistencia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f1f3f5;
    }

    .card {
      border-radius: 12px;
      border: 1px solid #dee2e6;
    }

    .btn-custom {
      border-radius: 8px;
    }

    .table thead th {
      background-color: #343a40;
      color: white;
    }
  </style>
</head>

<body>
  <div class="container py-5">
    <div class="card shadow-sm">
      <div class="card-body">
        <h2 class="text-center mb-4"><i class="bi bi-clipboard-check"></i> Tomar Asistencia</h2>

        <form method="post">
          <!-- Fecha -->
          <div class="mb-4">
            <label for="fecha" class="form-label fw-bold">Fecha:</label>
            <input type="date" id="fecha" name="fecha" class="form-control" required>
          </div>

          <!-- Tabla de estudiantes -->
          <div class="table-responsive mb-4">
            <table class="table table-bordered table-hover table-sm align-middle">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Estado</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['apellido']; ?></td>
                    <td>
                      <select name="estado[<?php echo $row['id']; ?>]" class="form-select">
                        <option value="Presente">✅ Presente</option>
                        <option value="Ausente">❌ Ausente</option>
                      </select>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>

          <!-- Botones -->
          <div class="d-flex justify-content-between">
            <button type="submit" name="submit" class="btn btn-primary btn-custom">
              <i class="bi bi-save"></i> Guardar Asistencia
            </button>
            <a href="../bienvenido.php" class="btn btn-secondary btn-custom">
              <i class="bi bi-arrow-left"></i> Volver
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
