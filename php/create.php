<?php
include('connection.php');
$connection = connectDB();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP - Nuevo Usuario</title>
    <style>
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 100px; }
        input { padding: 5px; width: 200px; }
    </style>
</head>
<body>
    <h1>Nuevo Usuario</h1>
    <form action="store.php" method="post">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" required>
        </div>
        
        <div class="form-group">
            <label for="lastname">Apellido:</label>
            <input type="text" name="lastname" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        
        <div class="form-group">
            <input type="submit" value="Guardar">
            <a href="index.php">Cancelar</a>
        </div>
    </form>
</body>
</html>

<?php mysqli_close($connection); ?>
