<?php
include("../includes/auth.php");
include("../connection.php");
$id=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM estudiantes WHERE id=$id");
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Estudiante</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-warning text-dark">
      <h4 class="mb-0">Editar Estudiante</h4>
    </div>
    <div class="card-body">
      <form action="actualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" class="form-control" required>
        </div>
        
        <div class="mb-3">
          <label class="form-label">Apellido</label>
          <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>" class="form-control" required>
        </div>
        
        <div class="mb-3">
          <label class="form-label">Grado</label>
          <input type="text" name="grado" value="<?php echo $row['grado']; ?>" class="form-control" required>
        </div>
        
        <div class="mb-3">
          <label class="form-label">Sección</label>
          <input type="text" name="seccion" value="<?php echo $row['seccion']; ?>" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary w-100">Actualizar</button>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>