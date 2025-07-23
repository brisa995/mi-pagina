<?php
include('connection.php');
$connection = connectDB();

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $id";

if (mysqli_query($connection, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
