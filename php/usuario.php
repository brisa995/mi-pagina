<?php
include('connection.php');
$connection = connectDB();
$sql = "SELECT * FROM users";
$result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <title>CRUD PHP - Listado</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        th { background-color: #7c6e8aff; color: white; }
        .actions { white-space: nowrap; }
    </style>
</head>
<body>
    <h1>Listado de Usuarios</h1>
    <a href="create.php">Nuevo Usuario</a>
    <br><br>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Accione</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['lastname'] ?></td>
                <td><?= $row['email'] ?></td>
                <td class="actions">
                    <a href="edit.php?id=<?= $row['id'] ?>">Editar</a>
                    <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>