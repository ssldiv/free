<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "free";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar si hay error en la conexión
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Ejecutar consulta
$sql = "SELECT id, red, usuario, contraseña FROM usuarios";
$resultado = mysqli_query($conn, $sql);

// Imprimir resultados en una tabla HTML
if (mysqli_num_rows($resultado) > 0) {
  echo "<table>";
  echo "<tr><th>ID</th><th>Red Social</th><th>Correo Electrónico</th><th>Contraseña</th></tr>";
  while($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr><td>" . $fila["id"] . "</td><td>" . $fila["red"] . "</td><td>" . $fila["usuario"] . "</td><td>" . $fila["contraseña"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 resultados";
}

// Cerrar conexión
mysqli_close($conn);
?>