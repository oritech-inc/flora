<div id="signin">
    <div class="border-bottom h3 fw-bold m-0 p-0">REGISTRATION</div>
    <div class="alert alert-primary rounded-0 msgAlert">
        Register your us account
    </div>
    <div class="card-body">
        <form id="frmAuth">
            <div class="input-group input-group-sm mb-2">
                <span class="input-group-text">
                    <i class="bi bi-person-lines-fill fa-lg"></i>
                </span>
                <div class="form-floating">
                    <select class="form-control form-control-sm" id="slType" name="type" autocomplete="type" required>
                        <option value="">-- Select type--</option>
                        <option value="supplier">Supplier</option>
                        <option value="buyer">Buyer</option>
                    </select>
                    <label for="txMail">Account type</label>
                </div>
            </div>

            <button class="btn btn-success rounded-5 w-100 my-2" type="submit">
                Continue <i class="bi bi-arrow-bar-right fa-pull-right fa-lg mt-1"></i>
            </button>
        </form>
    </div>
    <div class="card-footer">
        Already have an account?,
        <a href="#" id="btSignin" type="button" class="btLink" data-link="signin">
            Sign In
        </a>
    </div>
</div>