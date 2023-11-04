<?php
$prot = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$root = $prot . $_SERVER['HTTP_HOST'] . "/flora/";
$path = "/flora/auth";
$url = $prot . $host . $path;
$page = "";

if (!$_GET['p']) {
    $page = "signin";
}
else{
    $page = $_GET['p'];
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
    <link rel="stylesheet" href="./css/bs/dist/css/lumen.css">
    <link rel="stylesheet" href="./css/bs/icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./js/auth.js">
    <link rel="stylesheet" href="./css/bs/dist/js/bootstrap.bundle.min.js">
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

<body class="d-flex align-items-center">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <main class="form-signin w-100 m-auto text-center bg-body-tertiary rounded-4">
        <img class="mb-4 rounded-3" src="<?= $root ?>/img/brand/flora.png" alt="flora_trade_logo" width="180" height="100">

        <?php
        switch ($page) {
            case "signin":
                require_once("./views/auth/signin.php");
                break;
            case "signup":
                require_once("./views/auth/register.php");
            case "confirm":
                require_once("./views/auth/confirm.php");
            case "recover":
                require_once("./views/auth/recover.php");
                break;
            default:
                require_once("./views/alerts/error.php");
                break;
        }
        include "./views/auth/auth.php";
        ?>


        <p class="mt-5 mb-3 text-body-secondary fixed-bottom text-center border-top-1">
            <a href="https://freshmarksystems.co.za" target="_blank" class="text-warning fs-b h5">FMS,</a>
            <a href="#" target="_blank" class="text-warning fs-b h5">Flora Trade</a>
            &copy; 2023
        </p>
    </main>
</body>

</html>