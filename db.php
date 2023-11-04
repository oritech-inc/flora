<?php
try {
    // Database connection parameters
    $dsn = "mysql:host=localhost;dbname=your_database_name";
    $username = "root";
    $password = "";

    // Create a new PDO instance
    $db = new PDO($dsn, $username, $password);

    // Set PDO error mode to exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>