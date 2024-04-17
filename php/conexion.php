<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "pectra";

#conexión a la base de datos#
$conn = mysqli_connect($host,$usuario,$contrasena,$base_de_datos);

#datos del formulario
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];
$edad = $_POST['edad'];
$tipo_documento = $_POST['tipo-documento'];
$numero_documento = $_POST['numero-documento'];

#inserción de datos
$sql = " INSERT INTO registro (correo,nombre,contrasena,edad,tipo-documento, numero-documento) VALUES ('$correo','$nombre'.'$contrasena','$edad', '$tipo_documento', '$numero_documento'); "


?>