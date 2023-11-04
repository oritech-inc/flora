<main class="form-signin w-100 m-auto text-center bg-body-tertiary rounded-4">
    <form id="frmLogin" >
        <img class="mb-4 rounded-3" src="./../../img/brand/flora.png" alt="flora_trade_logo" width="180" height="100">
        <h1 class="h2 mb-3 fw-bold">SIGNIN</h1>

        <div class="form-floating">
            <input type="email" class="form-control form-control-sm" id="txMail" placeholder="name@example.com" required autofocus>
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