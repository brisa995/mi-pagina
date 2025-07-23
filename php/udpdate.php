<?php
include('connection.php');
$connection = connectDB();

// Recoger datos del formulario
$id = $_POST['id'];
$name = mysqli_real_escape_string($connection, $_POST['name']);
$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
$email = mysqli_real_escape_string($connection, $_POST['email']);

// Actualizar en la base de datos
$sql = "UPDATE users SET name='$name', lastname='$lastname', email='$email' WHERE id=$id";

if (mysqli_query($connection, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>