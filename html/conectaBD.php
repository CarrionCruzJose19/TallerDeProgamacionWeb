<?php

function getConexion() {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "restobar";
    $port = "3306";
    $cn = mysqli_connect($hostname, $username, $password, $database, $port)
            or die("Error al conectar");
    return $cn;
}
