<div id="signin">
    <div class="border-bottom h3 fw-bold m-0 p-0">SIGN IN</div>
    <div class="alert alert-light rounded-0 alAuth">
        Welcome back
    </div>
    <div class="card-body m-0 px-2">
        <form id="frmAuth" method="POST" data-type="signin">
            <div class="input-group input-group-sm mb-2">
                <span class="input-group-text">
                    <i class="bi bi-person-fill fa-lg"></i>
                </span>
                <div class="form-floating" data-bs-container="body" data-bs-toggle="popover"  data-bs-trigger="focus" data-bs-placement="top" data-bs-content="Top popover">
                    <input type="email" class="form-control form-control-sm" id="txMail" name="email"
                        placeholder="name@example.com" autocomplete="email" required autofocus>
                    <label for="txMail">Email address *</label>
                </div>
            </div>
            <div class="input-group input-group-sm">
                <span class="input-group-text">
                    <i class="bi bi-lock-fill fa-lg"></i>
                </span>
                <div class="form-floating">
                    <input type="password" class="form-control" id="txPass" name="password" placeholder="Password"
                        autocomplete="current-password" required>
                    <label for="txPass">Password *</label>
                </div>
                <button class="btn btn-primary btTogglePass" type="button" data-state="hidden">
                    <i class="bi bi-eye fa-lg"></i>
                </button>
            </div>

            <div class="d-flex justify-content-between my-3">

                <div class="form-check text-start">
                    <input class="form-check-input" type="checkbox" id="chRemember">
                    <label class="form-check-label" for="txRemember">
                        Remember me
                    </label>
                </div>
                <a href="#" id="btForgot" type="button" class="btLink" data-link="forgot">
                    Forgot password
                </a>
            </div>

            <button class="btn btn-success rounded-5 w-100 my-2" type="submit">
                Submit <i class="bi bi-box-arrow-in-right fa-pull-right fa-lg mt-1"></i>
            </button>
        </form>
    </div>
    <div class="card-footer px-2">
        Don't have an account yet?,
        <a href="#" id="btRegister" type="button" class="btLink" data-link="signup">
            Register now
        </a>
    </div>
</div>