<?php
include("conexion_gym.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

// Crea la consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO clientes (id, nombre, apellido, dni, direccion, telefono) VALUES ('$rfidData', '$nombre', '$apellido', '$dni', '$direccion', '$telefono')";

// Ejecuta la consulta
if (mysqli_query($conexion, $sql)) {
    echo "Datos insertados correctamente en la base de datos.";
} else {
    echo "Error al insertar los datos: " . mysqli_error($conexion);
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
