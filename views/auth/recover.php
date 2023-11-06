<div id="signin">
    <div class="border-bottom h3 fw-bold m-0 p-0">RECOVER</div>
    <div class="alert alert-primary rounded-0 msgAlert">
        Enter your email address to send password reset link to.
    </div>
    <div class="card-body">
        <form id="frmAuth">
            <div class="input-group input-group-sm mb-2">
                <span class="input-group-text">
                    <i class="bi bi-person-lines-fill fa-lg"></i>
                </span>
                <div class="form-floating">
                    <input type="email" class="form-control form-control-sm" id="txMail" name="email"
                        placeholder="name@example.com" autocomplete="email" required autofocus>
                    <label for="txMail">Email address</label>
                </div>
            </div>

            <button class="btn btn-success rounded-5 w-100 my-2" type="submit">
                Submit <i class="bi bi-box-arrow-in-right fa-pull-right fa-lg mt-1"></i>
            </button>
        </form>
    </div>
    <div class="card-footer">
        <div class="btn-group w-100" role="group" aria-label="auth button group">
            <a href="#" id="btForgot" type="button" class="btn btn-primary btn-sm btLink rounded-5" data-link="login">
                <i class="bi bi-person-fill fa-lg"></i> Sign in
            </a>
            <a href="#" id="btRegister" type="button" class="btn btn-primary btn-sm btLink rounded-5"
                data-link="signup">
                <i class="bi bi-person-fill-add fa-lg"></i> Signup
            </a>
        </div>

    </div>
</div>