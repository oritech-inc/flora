<h1 class="h1 mb-3 fw-bold">
    REGISTRATION
</h1>
<form id="frmRecover">
    <p class="card-text">
        Enter your email address and then click submit, to send password reset link.
    </p>
    <div class="form-floating">
        <input type="email" class="form-control form-control-sm" id="txMail" name="email" placeholder="name@example.com" autocomplete="email" required autofocus>
        <label for="txMail">Email address</label>
    </div>

    <button class="btn btn-success btn-sm rounded-5 w-100 my-4" type="submit">
        Submit <i class="bi bi-arrow-bar-right fa-pull-right fa-lg mt-1"></i>
    </button>
    <hr>

    <div class="d-flex justify-content-between">
        <a href="#" id="btForgot" type="button" class="btn btn-outline-info btn-sm btLink rounded-5" data-link="signin">
            <i class="bi bi-person-fill"></i> Sign in
        </a>
        <a href="#" id="btRegister" type="button" class="btn btn-outline-info btn-sm btLink rounded-5" data-link="register">
            <i class="bi bi-person-add"></i> Register now
        </a>
    </div>

</form>