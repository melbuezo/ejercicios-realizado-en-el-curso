<?php
include("../includes/auth.php");
include("../connection.php");
$result = mysqli_query($conn,"SELECT * FROM docentes");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Docentes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .container {
      margin-top: 50px;
    }
    .card {
      border-radius: 1rem;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .btn-custom {
      border-radius: 0.7rem;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="card p-4">
    <h2 class="text-center mb-4">📋 Docentes</h2>

    <div class="d-flex justify-content-between mb-3">
      <a href="insertar_crud.php" class="btn btn-success btn-custom">➕ Agregar Docente</a>
      <a href="../bienvenido.php" class="btn btn-secondary btn-custom">⬅ Volver</a>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row=mysqli_fetch_assoc($result)){ ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td>
              <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">✏ Editar</a>
              <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">🗑 Eliminar</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>