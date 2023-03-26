<?php
// Conexión a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "zolydbform";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Recuperar los datos del formulario
$telefono = mysqli_real_escape_string($conn, $_POST['telefono']);
$correo = mysqli_real_escape_string($conn, $_POST['correo']);

// Insertar los datos en la base de datos
$sql = "INSERT INTO datos (telefono, correo) VALUES ('$telefono', '$correo')";
if (mysqli_query($conn, $sql)) {
  echo "Datos guardados correctamente";
} else {
  echo "Error al guardar los datos: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>