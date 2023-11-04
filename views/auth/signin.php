<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        background: url("./imgs/Flora/sigmund.jpg") no-repeat center center fixed;
        font: "ITC Avant Garde Gothic";
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

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4">

    <main class="form-signin w-100 m-auto text-center bg-body-tertiary rounded-4">
        <form id="frmLogin">
            <img class="mb-4 rounded-3" src="./imgs/flora_logo.png" alt="flora_trade_logo" width="180" height="100">
            <h1 class="h2 mb-3 fw-bold">SIGNIN</h1>

            <div class="form-floating">
                <input type="email" class="form-control form-control-sm" id="txMail" placeholder="name@example.com"
                    required autofocus>
                <label for="txMail">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="txPass" placeholder="Password" required>
                <label for="txPass">Password</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="txRemember">
                <label class="form-check-label" for="txRemember">
                    Remember me
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        </form>
        <p class="mt-5 mb-3 text-body-secondary fixed-bottom text-center">
            <a href="#" class="text-info">FMS,</a>
            <a href="#" class="text-info">Flora Trade</a>
            &copy; 2023
        </p>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $('#frmLogin').submit(function(e) {
        e.preventDefault();
        const mail = $('#txMail').val();
        const pass = $('#txPass').val();
        if (validateData(mail, pass)) {
            alert(mail + " " + pass);
        }
        //$.ajax({
        //  type: "POST",
        //  url: "login.php",

        // });

    });

    $('#txMail').keyup(() => {
        const txt = $('#txMail').val();
        if (txt === "") {
            $('#txMail').addClass('border-danger');
            $('#txMail').focus();
        }
    });

    function validateData(mail, pass) {
        if (mail == '' || mail == 0 || mail == null) {
            $('#txMail').addClass('is-invalid');
            $('#txMail').focus();
            return false;
        } else if (pass == '' || pass == 0 || pass == null) {
            $('#txPass').addClass('is-invalid');
            $('#txPass').focus();
            return false;
        } else {
            return true;
        }
    }
    </script>
</body>

</html>