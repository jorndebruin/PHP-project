<?php
$servername = 'localhost';
$database   = 'phpforum';




try {
    $conn = new PDO("mysql:host=$servername;dbname=phpforum");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{

}