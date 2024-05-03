<?php

include('conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$tipo_documento = $_POST['tipo_documento'];
$numero_documento = $_POST['numero_documento'];

$conectar = conn();
$sql = "INSERT INTO usuarios (nombre, apellido, correo, contrasena, edad, telefono, tipo_documento,numero_documento) 
VALUES('$nombre','$apellido','$correo', '$contrasena','$edad', '$telefono', '$tipo_documento','$numero_documento')";

$resul = mysqli_query($conectar, $sql) or trigger_error(" query failed SQL-ERROR: ".mysqli_error($conectar), E_USER_ERROR);
echo"$sql";

