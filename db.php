<?php
$con = "";

try {
    // Database connection parameters
    $dsn = "mysql:host=localhost;dbname=flora_db";
    $username = "root";
    $password = "";

    // Create a new PDO instance
    $db = new PDO($dsn, $username, $password);

    // Set PDO error mode to exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $con = "Connected to the database successfully!";
} catch (PDOException $e) {
    // Handle connection errors
   $con = "Connection failed: " . $e->getMessage();
}
?>