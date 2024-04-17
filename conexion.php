<?php 
// Datos de conexión
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "pectra";

// Conexión a la base de datos
$conn = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

// Un mensaje por si no me puedo conectar
if (!$conn) {
    die("Algo malo debes tener, no me pude conectar: " . mysqli_connect_error());
}

#datos del formulario
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];
$edad = $_POST['edad'];
$tipo_documento = $_POST['tipo_documento'];
$numero_documento = $_POST['numero_documento'];


// Preparar la consulta SQL
$sql = "INSERT INTO registro (correo,nombre,contrasena,edad,tipo_documento,numero_documento) VALUES ('$correo','$nombre','$contrasena','$edad','$tipo_documento','$numero_documento')";

// Ejecutar la consulta
if (mysqli_query($conn, $sql)) {
    echo "Datos insertados correctamente";
} else {
    echo "No se insertaron los datos correctamente: " . mysqli_error($conn);
}

// Cerrar conexión
mysqli_close($conn);
?>

