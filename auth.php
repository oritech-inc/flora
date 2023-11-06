<?php
$prot = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$root = $prot . $_SERVER['HTTP_HOST'] . "/flora/";
$path = "/flora/auth";
$url = $prot . $host . $path;
$page = "";

if (!$_GET['p']) {
    $page = "login";
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
<!--    <script src="./js/color-modes.js"></script>-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Freshmark Systems, Flora Trade">
    <meta name="generator" content="FLora Trade 0.0.1">

    <title>Flora Trade | Auth</title>
    <link rel="icon" type="image/x-icon" href="<?= $root ?>/img/brand/logo-circle-green.svg">

    <link rel="stylesheet" href="./css/site/main.css">
    <!--    <link rel="stylesheet" href="./css/site/auth.css">-->
    <link rel="stylesheet" href="./css/bs/dist/css/flatly.css">
    <link rel="stylesheet" href="./css/bs/icons/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./js/auth.js">
    <link rel="stylesheet" href="./js/main.js">
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
    <main class="card m-auto text-center bg-body-tertiary rounded-4" style="width: 20rem">
        <img class="card-img-top mx-5" src="<?= $root ?>/img/brand/flora.png" alt="flora_trade_logo"
            style="width: 14.5rem;height: 7rem">

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
    </main>
    <p class="mt- text-body-secondary fixed-bottom text-center border-top-1" style="color:#c66828;">
        <a href="#" class="btToggleModal" data-type="terms" data-bs-toggle="modal" data-bs-target="#mdHelper">
            Terms of use
        </a>
        |
        <a href="#" class="btToggleModal" data-type="privacy" data-bs-toggle="modal" data-bs-target="#mdHelper">
            Privacy policy
        </a>
    </p>
</body>

</html>