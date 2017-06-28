<?php
$servername = 'localhost';
$username   = 'jorn';
$password   = 'jorn';
$database   = 'phpforum';




try {
    $conn = new PDO("mysql:host=$servername;dbname=phpforum", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "gelukt!";
}
catch(PDOException $e)
{
    echo "kut joh: " . $e->getMessage();
}