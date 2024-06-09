<?php
$servername = "localhost";
$username = "root";
$password = "moshiroshiina24"; //lagay nyo pass sa mysql

try {
    $conn = new PDO("mysql:host=$servername;dbname=jobdatabase", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>