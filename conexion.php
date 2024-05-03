<?php
function conn() //creamos una función que tenga los datos de la conexión
{
    $hostname = "localhost";
    $usuariodb ="root";
    $passwordddb = "";
    $dbname="adso";

    $conectar = mysqli_connect($hostname, $usuariodb, $passwordddb, $dbname);
    return $conectar;

}



