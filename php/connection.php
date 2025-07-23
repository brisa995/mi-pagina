<?php
function connectDB() {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "crud_php";
    
    $connection = mysqli_connect($host, $user, $password, $database);
    
    if (!$connection) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    
    return $connection;
}
?>
