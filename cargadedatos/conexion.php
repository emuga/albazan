<?php

/* Iniciamos la conexion con MySQL */
$servername = "localhost";
$username = "root";
$password = "31a2wn6a";
$dbname = "albazan";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Conexion fallida: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("La conexion ha fallado: %s\n", mysqli_connect_error());
    exit();
}

?>