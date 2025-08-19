<?php
include("../includes/auth.php");
include("../connection.php");
$result = mysqli_query($conn,"SELECT * FROM estudiantes");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Estudiantes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-6xl mx-auto mt-12 px-4">
  <div class="bg-white p-6 rounded-xl shadow-md">
    <h2 class="text-2xl font-bold text-center mb-6">🎓 Estudiantes</h2>

    <div class="flex justify-between mb-4">
      <a href="insertar_crud.php" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md transition">➕ Agregar Estudiante</a>
      <a href="../bienvenido.php" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md transition">⬅ Volver</a>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-200 rounded-md overflow-hidden">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="text-left px-4 py-2">ID</th>
            <th class="text-left px-4 py-2">Nombre</th>
            <th class="text-left px-4 py-2">Apellido</th>
            <th class="text-left px-4 py-2">Grado</th>
            <th class="text-left px-4 py-2">Sección</th>
            <th class="text-left px-4 py-2">Acciones</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <?php while($row = mysqli_fetch_assoc($result)) { ?>
          <tr class="border-t border-gray-200 hover:bg-gray-50">
            <td class="px-4 py-2"><?php echo $row['id']; ?></td>
            <td class="px-4 py-2"><?php echo $row['nombre']; ?></td>
            <td class="px-4 py-2"><?php echo $row['apellido']; ?></td>
            <td class="px-4 py-2"><?php echo $row['grado']; ?></td>
            <td class="px-4 py-2"><?php echo $row['seccion']; ?></td>
            <td class="px-4 py-2 space-x-2">
              <a href="editar.php?id=<?php echo $row['id']; ?>" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white text-sm px-3 py-1 rounded-md transition">✏ Editar</a>
              <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="inline-block bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded-md transition">🗑 Eliminar</a>
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
