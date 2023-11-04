<?php
$prot = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$root = $prot.$_SERVER['HTTP_HOST']."/flora/";
$path = "/flora/auth.php";
$url = $prot . $host . $path;

if (!isset($_GET['pg'])) {
    $_GET['pg'] = "signin";
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <script src="./js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Freshmark Systems, Flora Trade">
    <meta name="generator" content="FLora Trade 0.0.1">

    <title>Flora Trade&reg; | Auth</title>
    <link rel="stylesheet" href="./css/site/main.css">
    <link rel="stylesheet" href="./css/site/auth.css">
    <link rel="stylesheet" href="./css/bs/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bs/icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background: url("./img/bg/auth.jpg") no-repeat center center fixed;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
    </style>
</head>

<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php
    switch ($_GET['pg']) {
        case "signin":
            // require_once("./views/auth/signin.php");
            require_once("./views/alerts/error.php");
            break;
        case "register":
            require_once("./views/auth/register.php");
            break;
        default:
            require_once("./views/alerts/error.php");
            break;
    }
    ?>

    <script src="" async defer></script>
    <link rel="stylesheet" href="./js/jquery.min.js">
    <link rel="stylesheet" href="./js/auth.js">
    <link rel="stylesheet" href="./css/bs/dist/js/bootstrap.bundle.min.js">
</body>

</html>