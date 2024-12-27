<?php

// connect to the phpmyadmin server
$host = "localhost";

// database name
$dbname = "store";

// database username
$dbusername = "root";

// database password
$dbpassword = "";

// try catch 
try {
    // execute connection using pdo data objects
    $pdo = new PDO ("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);

    // if we get an error then we want to throw an exception
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // grab the error exception
} catch (PDOException $e) {

    // when not connected
    die("Connection failed: " . $e -> getMessage());
}