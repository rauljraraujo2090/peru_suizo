<?php
// Datos de conexión a la base de datos
$dbhost = 'localhost';
$dbname = 'rauljr';
$dbuser = 'postgres';
$dbpass = 'Neymar_2090_jr';


    // Conexión utilizando PDO
    $conn = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    