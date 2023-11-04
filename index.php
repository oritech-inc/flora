<?php
    session_start();
    $user = "";
    if(!isset($_SESSION['user'])){
    header("Location:auth.php?p=signin");
        exit;
    }
    else{
        $user = $_SESSION['user'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora Trade&reg; | Home</title>
</head>

<body>

</body>

</html>