<?php
include('connection.php');
$connection = connectDB();

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($connection, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP - Editar Usuario</title>
    <style>
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 100px; }
        input { padding: 5px; width: 200px; }
    </style>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="<?= $user['name'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="lastname">Apellido:</label>
            <input type="text" name="lastname" value="<?= $user['lastname'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= $user['email'] ?>" required>
        </div>
        
        <div class="form-group">
            <input type="submit" value="Actualizar">
            <a href="index.php">Cancelar</a>
        </div>
    </form>
</body>
</html>

<?php mysqli_close($connection); ?>
