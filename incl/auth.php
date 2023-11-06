<?php

include "./../db.php";


// Database connection parameters
$dsn = "mysql:host=localhost;dbname=flora_db";
$username = "root";
$password = "";

// Create a new PDO instance
$db = new PDO($dsn, $username, $password);

// Set PDO error mode to exceptions
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['authUser'])){
    $email = $_POST['mail'];
    $password = $_POST['pass'];

    $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch();

//    if ($user && password_verify($password, $user['password'])) {
    if ($user && $password == $user['password']) {
        echo 1;
        // You can set a session here and redirect the user to a dashboard or other page.
    } else {
        echo 0;
    }
}