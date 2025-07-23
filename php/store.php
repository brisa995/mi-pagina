<?php
include('connection.php');
$connection = connectDB();

// Recoger datos del formulario
$name = mysqli_real_escape_string($connection, $_POST['name']);
$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
$email = mysqli_real_escape_string($connection, $_POST['email']);

// Insertar en la base de datos
$sql = "INSERT INTO users (name, lastname, email) VALUES ('$name', '$lastname', '$email')";

if (mysqli_query($connection, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>