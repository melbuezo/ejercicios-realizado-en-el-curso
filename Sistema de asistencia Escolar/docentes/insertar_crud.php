<?php
include("../includes/auth.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Docente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Agregar Docente</h4>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Apellido</label>
          <input type="text" name="apellido" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Teléfono</label>
          <input type="text" name="telefono" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success w-100">Guardar</button>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
  include("../connection.php");
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $email=$_POST['email'];
  $telefono=$_POST['telefono'];
  $sql="INSERT INTO docentes(nombre,apellido,email,telefono) VALUES('$nombre','$apellido','$email','$telefono')";
  mysqli_query($conn,$sql);
  header("Location: index.php");
}
?>