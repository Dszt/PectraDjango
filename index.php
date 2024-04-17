<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <form name="registro" action="registro.php" method="post">
        Correo <input type="text" name="correo" required> <p></p>
        Nombre <input type="text" name="nombre" required> <p></p>
        Contraseña <input type="number" name="contrasena" required> <p></p>
        Edad <input type="number" name="edad" required> <p></p>
        <label for="lang">Tipo de documento</label> 
        <select name="tipo-documento" id="lang">
            <option value="cedulaa">Cedula de ciudadania</option>
            <option value="tarjeta_identidad">Tarjeta de identidad</option>
            <option value="cedula_extrajera">Cédula de extranjeria</option>
        </select><p></p>
        Número de documento <input type="number" name="numero-documento" required> 
        <input type="submit" value="Enviar"/> <br>
    </form>
    
</body>
</html>