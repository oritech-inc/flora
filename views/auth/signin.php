<h1 class="h1 mb-3 fw-bold">SIGNIN</h1>
<form id="frmAuth">

    <div class="form-floating">
        <input type="email" class="form-control form-control-sm" id="txMail" name="email" placeholder="name@example.com" autocomplete="email" required autofocus>
        <label for="txMail">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="txPass" name="password" placeholder="Password" autocomplete="current-password" required>
        <label for="txPass">Password</label>
    </div>

    <div class="d-flex justify-content-between">

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="1" id="chRemember">
            <label class="form-check-label" for="txRemember" style="cursor:pointer">
                Remember me
            </label>
        </div>
        <a href="#" id="btForgot" type="button" class="mt-3 btLink" data-link="forgot">
            Forgot password
        </a>
    </div>

    <button class="btn btn-success btn-sm rounded-5 w-100 my-2" type="submit">
        Submit <i class="bi bi-arrow-bar-right fa-pull-right fa-lg mt-1"></i>
    </button>
    <hr>
    <p class="">
        Don't have an account yet?,
        <a href="#" id="btRegister" type="button" class="btLink" data-link="signup">
            Register now
        </a>
    </p>
</form>