    <?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root"; // Por defecto, el usuario es 'root' sin contraseña
$password = ""; // Por defecto, la contraseña está vacía
$dbname = "elegance_db"; // Nombre de la base de datos
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Verificar si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    // $firstName = $conn->real_escape_string($_POST['first-name']);
    $lastName = $conn->real_escape_string($_POST['last-name']);
    $email = $conn->real_escape_string($_POST['email']);
    $cardNumber = $conn->real_escape_string($_POST['card-number']);
    // Insertar datos en la tabla
    $sql = "INSERT INTO orders (first_name, last_name, email, card_number) VALUES ('$firstName', '$lastName', '$email', '$cardNumber')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode([
            "status" => "success",
            "message" => "Gracias por tu compra, $firstName $lastName!"
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Error: " . $sql . "<br>" . $conn->error
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Método no permitido."
    ]);
}
// Cerrar conexión
$conn->close();
?>