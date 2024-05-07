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
$rol = $_POST['rol'];

$conectar = conn();
$sql = "INSERT INTO usuarios (nombre, apellido, correo, contrasena, edad, telefono, tipo_documento,numero_documento,rol) 
VALUES('$nombre','$apellido','$correo', '$contrasena','$edad', '$telefono', '$tipo_documento','$numero_documento','$rol')";

$resul = mysqli_query($conectar, $sql) or trigger_error(" query failed SQL-ERROR: ".mysqli_error($conectar), E_USER_ERROR);
echo"$sql";

