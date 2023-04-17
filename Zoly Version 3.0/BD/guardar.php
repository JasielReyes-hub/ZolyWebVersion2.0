<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zolydbform";

$conn = mysqli_connect($localhost, $root, $zolydbform);
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Recuperar los datos del formulario
$telefono = mysqli_real_escape_string($conn, $_POST['telefono']);
$correo = mysqli_real_escape_string($conn, $_POST['correo']);

// Insertar los datos en la base de datos
$stmt = mysqli_prepare($conn, "INSERT INTO datos (telefono, correo) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "ss", $telefono, $correo);

if (mysqli_stmt_execute($stmt)) {
  echo "Datos guardados correctamente";
} else {
  echo "Error al guardar los datos: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>
