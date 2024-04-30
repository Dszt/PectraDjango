<?php
include('conexion.php');
?>

<html>
<head>
    <title>Mostrar</title>
</head>
<body>
    <table>
        <tr>
            <th>Correo</th>
            <th>Nombre</th>
            <th>Contraseña</th>
            <th>Edad</th>
            <th>Tipo de Documento</th>
            <th>Número de Documento</th>
        </tr>

<?php
$sql = "SELECT * FROM registro";
$conectar = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);
$result = mysqli_query($conectar, $sql);
while($mostrar = mysqli_fetch_array($result))
{
?>
<tr>
    <td><?php echo $mostrar ['correo'] ?></td>
    <td><?php echo $mostrar ['nombre'] ?></td>
    <td><?php echo $mostrar ['contrasena'] ?></td>
    <td><?php echo $mostrar ['edad'] ?></td>
    <td><?php echo $mostrar ['tipo_documento'] ?></td>
    <td><?php echo $mostrar ['numero_documento'] ?></td>
</tr>
<?php
}
?>

    </table>
</body>
</html>
