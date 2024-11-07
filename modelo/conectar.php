<?php
$conectar = new mysqli("localhost", "root", "", "mydb");
$conectar->set_charset("utf8");

if ($conectar->connect_error) {
    die("Error de conexión: " . $conectar->connect_error);
}

?>