<?php

include("connection.php");

$con = connection();

$id = $_get['id'];

$sql = "SELECT * from persona where id= '$id'";
$query = mysqli_query($con , $sql);
$row = mysqli_fetch_array($query);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="card mb-4">
<div class="card-header">
    <h4>Editar Usuario</h4>
<div class="card-body">
    <form action="edit_crud.php" method="post" class="row g-3">

          <input type="hidden" name="id" value="<?$row['id'] ?>"<!--invisible>


        <div class="col-md-3">
            <input type="text" name="name" class="form-control" placeholder="Nombre" VALUES="<?$row['Nombre'] ?>">
        </div>
        <div class="col-md-3">
            <input type="text" name="lastname" class="form-control" placeholder="Apellido" VALUES="<?$row['Apellido'] ?>">
        </div>
        <div class="col-md-3">
            <input type="text" name="username" class="form-control" placeholder="Usuario" VALUES="<?$row['Usuario'] ?>">
        </div>
        <div class="col-md-3">
            <input type="text" name="password" class="form-control" placeholder="Contraseña"VALUES="<?$row['Contraseña'] ?>">
        </div>
        <div class="col-md-3">
            <input type="text" name="email" class="form-control" placeholder="Correo"VALUES="<?$row['Correo'] ?>">
        </div>
        <div class="col-6">
            <input type="submit" value="Agregar Usuario" class="btn btn-primary">ACTUALIZAR</button>
        </div>
    </form>
</div>
</body>
</html>

?>